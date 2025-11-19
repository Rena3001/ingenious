<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\Client;
use App\Models\Team;
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
        $team = Team::where('is_active', 1)
        ->orderBy('sort')
        ->get();
        $clients = Client::where('is_active', 1)
            ->orderBy('sort')
            ->get();
        return view('client.pages.about', compact('about', 'locale','team','clients'));
    }
}
