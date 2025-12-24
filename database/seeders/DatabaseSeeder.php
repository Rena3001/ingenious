<?php

namespace Database\Seeders;

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
        ]);
    }
}
