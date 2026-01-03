<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use Illuminate\Http\Request;

class GuidesTutorialsController extends Controller
{
  public function index(Request $request)
{
    $locale = app()->getLocale();

    $query = Guide::query()
        ->where('is_active', true)
        ->where(function ($q) {
            $q->whereNull('published_at')
              ->orWhere('published_at', '<=', now());
        });

    /* ===============================
       SEARCH (PRODUCT NAME + DESCRIPTION)
    =============================== */
    if ($request->filled('q')) {
        $keyword = $request->q;

        $query->where(function ($q) use ($keyword, $locale) {
            $q->where("product_name_$locale", 'LIKE', "%{$keyword}%")
              ->orWhere("description_$locale", 'LIKE', "%{$keyword}%");
        });
    }

    $guides = $query
        ->with('category')
        ->orderByDesc('published_at')
        ->paginate(12)
        ->withQueryString();

    return view('client.pages.guidesandtutor', [
        'guides' => $guides,
        'locale' => $locale,
        'search' => $request->q, // ⭐ vacib
    ]);
}
}
