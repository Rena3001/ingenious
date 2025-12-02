<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\RoadmapItem;

class OverviewController extends Controller
{
    public function show($locale, $slug)
{
    app()->setLocale($locale);

    $item = RoadmapItem::where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

    // bütün roadmap itemlər (slider üçün)
    $items = RoadmapItem::where('is_active', true)
        ->orderBy('stage_number')
        ->get();

    return view('client.pages.overview', compact('item', 'items', 'locale'));
}

}
