<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\WarrantyAccordionSection;
use App\Models\WarrantyContactCtaSection;
use App\Models\WarrantyFeatureSection;
use App\Models\WarrantyFeatureSectionTwo;
use App\Models\WarrantyMainSlider;
use App\Models\WarrantyPortfolioSection;
use App\Models\WarrantyProcessSection;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function index()
    {
        $slides = WarrantyMainSlider::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
        $featureSection = WarrantyFeatureSection::query()
            ->where('is_active', true)
            ->with([
                'items' => function ($q) {
                    $q->where('is_active', true)
                        ->orderBy('sort_order');
                }
            ])
            ->first();
        $accordionSection = WarrantyAccordionSection::where('is_active', true)
            ->with(['items' => function ($q) {
                $q->where('is_active', true)
                    ->orderBy('sort_order');
            }])
            ->first();
        $portfolioSection = WarrantyPortfolioSection::where('is_active', true)
            ->with('items')
            ->first();
        $featureSectionTwo = WarrantyFeatureSectionTwo::where('is_active', true)->first();
        $processSection = WarrantyProcessSection::where('is_active', true)->first();
        $contactCta = WarrantyContactCtaSection::where('is_active',true)->first();

        return view('client.pages.warranty', compact('slides', 'featureSection', 'accordionSection', 'portfolioSection', 'featureSectionTwo', 'processSection','contactCta'));
    }
}
