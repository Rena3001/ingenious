<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\TechnicalContent;
use Illuminate\Http\Request;

class TechnicalContentController extends Controller
{
    public function index(Request $request)
    {
        $locale = app()->getLocale();

        $query = TechnicalContent::query()
            ->where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('published_at')
                  ->orWhere('published_at', '<=', now());
            })
            ->with('category');

        /* ===============================
           CATEGORY FILTER
        =============================== */
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        /* ===============================
           A–Z LETTER FILTER
        =============================== */
        if ($request->filled('letter')) {
            $letter = mb_strtoupper($request->letter);

            $query->whereRaw(
                "UPPER(LEFT(title_{$locale}, 1)) = ?",
                [$letter]
            );
        }

        /* ===============================
           SEARCH (TITLE + CONTENT)
        =============================== */
        if ($request->filled('search')) {
            $keyword = $request->search;

            $query->where(function ($q) use ($keyword, $locale) {
                $q->where("title_$locale", 'LIKE', "%{$keyword}%")
                  ->orWhere("content_$locale", 'LIKE', "%{$keyword}%");
            });
        }

        /* ===============================
           PAGINATION
        =============================== */
        $faqs = $query
            ->orderByDesc('published_at')
            ->paginate(6)
            ->withQueryString();

        $alphabet = [
            'A','B','C','CH','D','E','F','G','GH','H','I','J','K','L',
            'M','N','O','OE','P','Q','R','S','SH','T','U','UE','V','Y','Z','ZH'
        ];

        $settings = Setting::first();

        return view('client.pages.faq', [
            'faqs'     => $faqs,
            'alphabet' => $alphabet,
            'locale'   => $locale,
            'search'   => $request->search,
            'settings' => $settings,
        ]);
    }
}
