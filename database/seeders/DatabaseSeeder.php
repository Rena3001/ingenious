<?php

namespace Database\Seeders;

use App\Models\ProductAplusContent;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            HomeApplianceSlideSeeder::class,
            FeatureSectionSeeder::class,
            FeatureItemSeeder::class,
            AccordionSectionSeeder::class,
            AccordionItemSeeder::class,
            PortfolioSectionSeeder::class,
            PortfolioItemSeeder::class,
            FeatureSectionTwoSeeder::class,
            FeatureSectionThreeSeeder::class,
            ServiceItemSeeder::class,
            FeatureSectionFourSeeder::class,
            ElectricalEquipmentSliderSeeder::class,
            ProductSectionSeeder::class,
            CallToActionSeeder::class,
            ConsumerElectronicsSliderSeeder::class,
            ProductFeatureSectionSeeder::class,
            ProductSupportSectionSeeder::class,
            QualityConsumerEquipmentSectionSeeder::class,
            EasySetupSectionSeeder::class,
            LocalRecordingSeeder::class,
            NightVisionSectionSeeder::class,
            CallToActionTwoSeeder::class,
            AboutSectionTwoSeeder::class,
            TechnicalServicesSliderSeeder::class,
            TechnicalIconsSeeder::class,
            FaqSectionSeeder::class,
            OurServicesSectionSeeder::class,
            ProductVideoSectionsSeeder::class,
            ProductVideoItemsSeeder::class,
            WhyBamooneTestimonialsSeeder::class,
            SupportResourcesSectionSeeder::class,
            ShopSectionSeeder::class,
            InstallationSectionSeeder::class,
            InstallationStepSeeder::class,
            ServicePackageSeeder::class,
            ServicePackageSectionSeeder::class,
            TechnicalContentSeeder::class,
            SettingsSeeder::class,
            GuideSeeder::class,
            WarrantyMainSliderSeeder::class,
            WarrantyFeatureSectionSeeder::class,
            WarrantyAccordionSectionSeeder::class,
            WarrantyFeatureSectionTwoSeeder::class,
            WarrantyProcessSectionSeeder::class,
            MainAboutPageSeeder::class,
            ProductFeatureSectionSeeder::class,
            ProductSectionSeeder::class,
            ProductSupportSectionSeeder::class,
            ProductVideoItemsSeeder::class,
            ProductVideoSectionsSeeder::class,
            HomeAboutSeeder::class,
            HomeAboutMissionSeeder::class,
            RoadmapSeeder::class,
            SliderSeeder::class,
            PartnershipPageSeeder::class,
            NewsSeeder::class,
            AnnouncementSeeder::class,
            SecurityFeatureSeeder::class,
        ]);
    }
}
