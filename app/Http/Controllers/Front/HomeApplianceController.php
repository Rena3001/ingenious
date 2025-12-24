<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AccordionSection;
use App\Models\FeatureSection;
use App\Models\FeatureSectionTwo;
use App\Models\HomeApplianceSlide;
use App\Models\PortfolioSection;
use App\Models\ProcessSection;
use Illuminate\Http\Request;

class HomeApplianceController extends Controller
{
    public function index()
    {
        $slides = HomeApplianceSlide::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $featureSection = FeatureSection::query()
            ->where('is_active', true)
            ->with([
                'items' => function ($q) {
                    $q->where('is_active', true)
                        ->orderBy('sort_order');
                }
            ])
            ->first();

        $accordionSection = AccordionSection::where('is_active', true)
            ->with([
                'items' => fn($q) =>
                $q->where('is_active', true)->orderBy('sort_order')
            ])
            ->first();

        $portfolioSection = PortfolioSection::with('items')
            ->where('is_active', true)
            ->first();
        $featureSectionTwo = FeatureSectionTwo::where('is_active', true)
            ->first();

        $processSection = ProcessSection::where('is_active', true)->first();

        return view('client.pages.home-appliances', compact('slides', 'featureSection', 'accordionSection', 'portfolioSection', 'featureSectionTwo', 'processSection'));
    }
}
