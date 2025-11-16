<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('client.pages.products');
    }

    public function show($id)
    {
        // Logic to show a specific shop item
        return view('client.pages.product-detail', ['id' => $id]);
    }
}
