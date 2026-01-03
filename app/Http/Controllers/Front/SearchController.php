<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TechnicalContent;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $locale = app()->getLocale();
        $keyword = $request->search;

        /* ===============================
           PRODUCTS SEARCH
        =============================== */
        $products = Product::when($keyword, function ($q) use ($keyword) {
            $q->where(function ($qq) use ($keyword) {
                $qq->where('name_az', 'LIKE', "%$keyword%")
                   ->orWhere('name_en', 'LIKE', "%$keyword%")
                   ->orWhere('name_ru', 'LIKE', "%$keyword%");
            });
        })->limit(10)->get();

        /* ===============================
           FAQ SEARCH
        =============================== */
        $faqs = TechnicalContent::where('is_active', true)
            ->when($keyword, function ($q) use ($keyword, $locale) {
                $q->where(function ($qq) use ($keyword, $locale) {
                    $qq->where("title_$locale", 'LIKE', "%$keyword%")
                       ->orWhere("content_$locale", 'LIKE', "%$keyword%");
                });
            })
            ->limit(10)
            ->get();

        return view('client.pages.search', compact(
            'products',
            'faqs',
            'keyword',
            'locale'
        ));
    }
}
