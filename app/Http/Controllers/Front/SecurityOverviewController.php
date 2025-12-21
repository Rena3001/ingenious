<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AppProductSection;
use App\Models\InstallationService;
use App\Models\ProductHighlight;
use App\Models\ProductShowcase;
use App\Models\SecurityFeature;
use App\Models\SecurityPackage;
use App\Models\SecuritySlider;
use App\Models\QualityEquipmentSection;
use Illuminate\Http\Request;

class SecurityOverviewController extends Controller
{
    public function index()
    {
        $securitySliders = SecuritySlider::where('is_active', true)
            ->orderBy('order')
            ->get();

        $features = SecurityFeature::where('is_active', true)
            ->orderBy('order')
            ->get();

        $package = SecurityPackage::with(['features', 'product'])
            ->where('is_active', true)
            ->first();

        $highlight = ProductHighlight::with([
            'features' => fn($q) => $q->orderBy('order'),
            'product'
        ])->where('is_active', true)->first();

        $qualityEquipment = QualityEquipmentSection::with('product')
            ->where('is_active', true)
            ->first();

        $installationService = InstallationService::with('icons')
            ->where('is_active', true)
            ->first();

        $productShowcase = ProductShowcase::where('is_active', true)
            ->where('is_active', true)
            ->first();

        $appProductSection = AppProductSection::query()
            ->where('is_active', true)
            ->latest('id')
            ->first();


        return view('client.pages.security-overview', compact('securitySliders', 'features', 'package', 'highlight', 'qualityEquipment', 'installationService', 'productShowcase', 'appProductSection'));
    }
}
