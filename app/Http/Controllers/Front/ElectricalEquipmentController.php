<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CallToAction;
use App\Models\ElectricalEquipmentSlider;
use App\Models\FeatureSectionFour;
use App\Models\FeatureSectionThree;
use App\Models\ProductSection;
use App\Models\ServiceItem;
use Illuminate\Http\Request;

class ElectricalEquipmentController extends Controller
{
    public function index()
    {
        $sliders = ElectricalEquipmentSlider::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        $featureSectionThree = FeatureSectionThree::where('is_active', true)->first();

        $serviceItems = ServiceItem::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        $featureSectionFour = FeatureSectionFour::where('is_active', true)->first();
        $productSection = ProductSection::where('is_active', true)->first();
        $callToAction = CallToAction::where('is_active', true)->first();


        return view('client.pages.electrical-equipment', compact('sliders', 'featureSectionThree', 'serviceItems', 'featureSectionFour', 'productSection', 'callToAction'));
    }
}
