<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutSectionTwo;
use App\Models\CallToActionTwo;
use App\Models\ConsumerElectronicsSlider;
use App\Models\EasySetup;
use App\Models\LocalRecording;
use App\Models\NightVisionSection;
use App\Models\ProductFeatureSection;
use App\Models\ProductSupportSection;
use App\Models\QualityConsumerEquipmentSection;
use Illuminate\Http\Request;

class ConsumerElectronicsController extends Controller
{
    public function index()
    {
        $sliders = ConsumerElectronicsSlider::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $productFeatureSection = ProductFeatureSection::where('is_active', true)->first();
        $productSupportSection = ProductSupportSection::where('is_active', true)->first();
        $qualityConsumerEquipmentSection = QualityConsumerEquipmentSection::where('is_active', true)->first();
        $easySetupSection = EasySetup::first();
        $localRecordingSection = LocalRecording::where('is_active', true)->first();
        $nightVisionSection = NightVisionSection::where('is_active', true)->first();
        $callToActionTwoSection = CallToActionTwo::first();
        $aboutSectionTwo = AboutSectionTwo::where('is_active', true)->first();


        return view('client.pages.consumer-electronics', compact('sliders', 'productFeatureSection', 'productSupportSection', 'qualityConsumerEquipmentSection', 'easySetupSection', 'localRecordingSection', 'nightVisionSection', 'callToActionTwoSection', 'aboutSectionTwo'));
    }
}
