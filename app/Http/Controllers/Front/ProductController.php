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
    public function index(Request $request, $locale)
    {

        app()->setLocale($locale);

        $query = Product::query();
         if ($request->search) {
                $query->where(function($q) use ($request) {
                    $q->where('name_az', 'LIKE', '%'.$request->search.'%')
                    ->orWhere('name_en', 'LIKE', '%'.$request->search.'%')
                    ->orWhere('name_ru', 'LIKE', '%'.$request->search.'%');
                });
            }
        // Sorting
        if ($request->orderby == 'price') {
            $query->orderBy('price', 'asc');
        } elseif ($request->orderby == 'price-desc') {
            $query->orderBy('price', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $products = $query->get();
        $categories = Category::withCount('products')->get();

        return view('client.pages.products', compact('products', 'categories', 'locale')) ->with('search', $request->search);
    }

    // ===============================
    // 📌 2. CATEGORY PRODUCTS
    // ===============================
    public function byCategory(Request $request, $locale, Category $category)
    {
        app()->setLocale($locale);

        $query = Product::where('category_id', $category->id);

        if ($request->orderby == 'price') {
            $query->orderBy('price', 'asc');
        } elseif ($request->orderby == 'price-desc') {
            $query->orderBy('price', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $products = $query->get();
        $categories = Category::withCount('products')->get();

        return view('client.pages.products', compact('products', 'categories', 'locale'));
    }

    // ===============================
    // 📌 3. PRODUCT DETAIL
    // ===============================
    public function show($locale, Product $product)
    {
        app()->setLocale($locale);

        $categories = Category::withCount('products')->get();

        $related = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->get();

        return view('client.pages.product-detail', compact('product', 'categories', 'related', 'locale'));
    }

    // ===============================
    // 📌 4. SUBMIT REVIEW
    // ===============================
    public function storeReview(Request $request, $locale, Product $product)
    {
        app()->setLocale($locale);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Review::create([
            'product_id' => $product->id,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'approved' => false,
        ]);

        // Multilingual success message
        $message = Translation::getValue('review_submitted_message', $locale);

        return redirect()->route('product.detail', [
            'locale' => $locale,
            'product' => $product->id
        ])->with('success', $message);
    }
}
