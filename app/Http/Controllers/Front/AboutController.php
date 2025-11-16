<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        $about = AboutSection::with('missionItems')
                ->where('is_active', true)
                ->get()
                ->keyBy('type');
        return view('client.pages.about', compact('about', 'locale'));
    }
}
