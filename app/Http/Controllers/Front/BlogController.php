<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('client.pages.blog');
    }

    public function show($id)
    {
        // Logic to show a specific blog post
        return view('client.pages.blog-detail', ['id' => $id]);
    }
}
