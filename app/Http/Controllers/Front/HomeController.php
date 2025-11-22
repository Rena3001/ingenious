<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\ContactPage;
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
                ->where('is_active', true)
                ->get()
                ->keyBy('type');
        $services = Service::first();
        $contact = ContactPage::first();

        return view('client.home', compact(
            'sliders', 'locale', 'settings', 'about', 'services'
        ));
    }

}
