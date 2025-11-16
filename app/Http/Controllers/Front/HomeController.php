<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $locale = app()->getLocale();
        $sliders = Slider::where('is_active', true)->orderBy('order')->get();

        return view('client.home', compact('sliders', 'locale'));
    }
}
