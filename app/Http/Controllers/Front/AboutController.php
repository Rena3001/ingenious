<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\MainAboutPage;
use App\Models\PartnershipPage;
use App\Models\Product;

class AboutController extends Controller
{
    public function index(string $locale)
    {
        app()->setLocale($locale);

        $about = MainAboutPage::with([
            'galleries' => fn($q) => $q->orderBy('sort_order'),
            'sections'  => fn($q) => $q->orderBy('sort_order'),
            'ceoMessage'
        ])
            ->where('slug', 'why-bamoone')
            ->where('is_active', true)
            ->firstOrFail();

        $products = Product::where('is_active', true)
            ->orderByDesc('is_top_seller')
            ->limit(6)
            ->get();
        return view('client.pages.about', compact(
            'about',
            'products',
            'locale'
        ));
    }

 public function show()
{
    $page = PartnershipPage::where('is_active', true)->firstOrFail();

    return view('client.pages.partnership', compact('page'));
}
}
