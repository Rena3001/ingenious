<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Product;

class AnnouncementsController extends Controller
{
   public function index($locale)
{
    app()->setLocale($locale);

    $announcements = Announcement::active()
        ->ordered()
        ->paginate(3); // 1 səhifədə 3 kart (foto solda + mətn sağda)
    $products = Product::where('is_active', true)
            ->orderByDesc('is_top_seller')
            ->limit(6)
            ->get();
    return view('client.pages.announcements', compact('announcements','products'));
}

}
