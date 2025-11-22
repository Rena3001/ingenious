<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Translation;

class BlogController extends Controller
{
    public function index($locale)
    {
        $blogs = Blog::latest()->get();
        app()->setLocale($locale);


        return view('client.pages.blog', compact('blogs', 'locale'));
    }

    public function show($locale,$id)
    {
        $blog = Blog::findOrFail($id);
         app()->setLocale($locale);


        return view('client.pages.blog-detail', compact('blog'));
    }

}
