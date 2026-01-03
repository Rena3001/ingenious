<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FaqSection;
use App\Models\InstallationSection;
use App\Models\OurServicesSection;
use App\Models\Product;
use App\Models\ProductShopSection;
use App\Models\ProductVideoSections;
use App\Models\ServicePackageSection;
use App\Models\Setting;
use App\Models\ShopSection;
use App\Models\SupportResourcesSection;
use App\Models\TechnicalIcons;
use App\Models\TechnicalServicesSlider;
use App\Models\WhyBamooneTestimonials;
use Illuminate\Http\Request;

class TechnicalServicesController extends Controller
{
    public function index()
    {

        $sliders = TechnicalServicesSlider::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $icons = TechnicalIcons::where('is_active', true)->first();

        $faqSection = FaqSection::where('is_active', true)
            ->first();
        $ourServicesSection = OurServicesSection::where('is_active', true)
            ->orderBy('sort_order')
            ->first();

        $productVideoSection = ProductVideoSections::where('is_active', true)->with('items')->first();

        $testimonials = WhyBamooneTestimonials::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $supportResourcesSection = SupportResourcesSection::where('is_active', true)->first();

        $shopSection = ShopSection::where('is_active', true)->first();
        $categories = Category::where('is_active', true)
            ->with(['products' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->get();

        // =========================
        // ALL PRODUCTS (51–54)
        // =========================
        $products = Product::orderBy('created_at', 'desc')->get();
        $installationSection = InstallationSection::where('is_active', true)
            ->with('steps')
            ->first();

            $servicePackageSection = ServicePackageSection::where('is_active', true)
        ->with('packages')
        ->first();
        $settings = Setting::first();


        return view('client.pages.technical-services', compact('sliders', 'icons', 'faqSection', 'ourServicesSection', 'productVideoSection', 'testimonials', 'supportResourcesSection', 'shopSection', 'categories', 'products', 'installationSection','servicePackageSection','settings'));
    }
}
