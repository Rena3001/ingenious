<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\Translation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ===============================
    // 📌 1. PRODUCT LIST
    // ===============================
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('name_az', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('name_en', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('name_ru', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('name_de', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('name_es', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('name_fr', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('name_zh', 'LIKE', '%' . $request->search . '%');

            });
        }

        // Sorting
        if ($request->orderby === 'price') {
            $query->orderBy('price', 'asc');
        } elseif ($request->orderby === 'price-desc') {
            $query->orderBy('price', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $products = $query->get();
        $categories = Category::where('is_active', true)->withCount('products')->get();

        return view('client.pages.products', [
            'products'   => $products,
            'categories' => $categories,
            'locale'     => app()->getLocale(),
            'search'     => $request->search,
        ]);
    }

    // ===============================
    // 📌 2. CATEGORY PRODUCTS
    // ===============================
      public function byCategory(Request $request, string $locale, int $category)
    {
        app()->setLocale($locale);

        $currentCategory = Category::where('is_active', true)->findOrFail($category);

        $query = Product::where('category_id', $currentCategory->id);

        // 🔍 Search
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name_az', 'LIKE', "%{$request->search}%")
                  ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                  ->orWhere('name_ru', 'LIKE', "%{$request->search}%")
                  ->orWhere('name_de', 'LIKE', "%{$request->search}%")
                  ->orWhere('name_es', 'LIKE', "%{$request->search}%")
                  ->orWhere('name_fr', 'LIKE', "%{$request->search}%")
                  ->orWhere('name_zh', 'LIKE', "%{$request->search}%");
            });
        }

        // 🔃 Sorting
        match ($request->orderby) {
            'price'      => $query->orderBy('price', 'asc'),
            'price-desc' => $query->orderBy('price', 'desc'),
            default      => $query->orderBy('created_at', 'desc'),
        };

        return view('client.pages.products', [
            'products'        => $query->get(),
            'categories'      => Category::where('is_active', true)->withCount('products')->get(),
            'currentCategory' => $currentCategory,
            'locale'          => $locale,
            'search'          => $request->search,
        ]);
    }


    // ===============================
    // 📌 3. PRODUCT DETAIL
    // ===============================
    public function show(string $locale, Product $product)
    {
        app()->setLocale($locale);
        $categories = Category::where('is_active', true)->withCount('products')->get();

        $related = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->get();

        return view('client.pages.product-detail', [
            'product'    => $product,
            'categories' => $categories,
            'related'    => $related,
            'locale'     => app()->getLocale(),
        ]);
    }

    // ===============================
    // 📌 4. SUBMIT REVIEW
    // ===============================
    public function storeReview(Request $request, Product $product)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        Review::create([
            'product_id' => $product->id,
            'name'       => $request->name,
            'email'      => $request->email,
            'message'    => $request->message,
            'approved'   => false,
        ]);

        $message = Translation::getValue(
            'review_submitted_message',
            app()->getLocale()
        );

        return redirect()->route('product.detail', [
            'locale'  => app()->getLocale(),
            'product' => $product->slug,
        ])->with('success', $message);
    }
}
