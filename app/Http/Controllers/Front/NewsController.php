<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::active()
            ->latest('published_at')
            ->paginate(9);

        return view('client.pages.news', compact('news'));
    }
    public function show($locale,$slug)
{
    $news = News::where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

    $latestNews = News::active()
        ->where('id', '!=', $news->id)
        ->latest('published_at')
        ->take(5)
        ->get();

    return view('client.pages.news-detail', compact('news', 'latestNews'));
}

}
