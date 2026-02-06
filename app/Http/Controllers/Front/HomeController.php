<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutMissionItem;
use App\Models\AboutSection;
use App\Models\Category;
use App\Models\ContactPage;
use App\Models\Home2ndSection;
use App\Models\HomeAbout;
use App\Models\Product;
use App\Models\RoadmapItem;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{ 
    public function index($locale)
    {
        app()->setLocale($locale);

        $settings = Setting::first();
        $sliders = Slider::where('is_active', true)->orderBy('order')->get();
        $about = AboutSection::with('missionItems')
            ->where('is_active', true);
        $services = Service::first();
        $contact = ContactPage::first();
        $section = AboutSection::where('type', 'home_about')->first();
        $products = Product::orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $roadmap = RoadmapItem::where('is_active', true)
            ->orderBy('order')
            ->get();
        $missionItems = AboutMissionItem::get();
        $homeAbout = HomeAbout::first();
        $home2nd = Home2ndSection::where('is_active', true)->first();
        $categories = Category::withCount('products')->get();
        


        return view('client.home', compact(
            'sliders',
            'locale',
            'settings',
            'about',
            'services',
            'section',
            'contact',
            'products',
            'roadmap',
            'homeAbout',
            'categories',
            'missionItems',
            'home2nd'
            
        ));
    }
}
