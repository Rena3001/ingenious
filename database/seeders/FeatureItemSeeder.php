<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureItemSeeder extends Seeder
{
    public function run(): void
    {
        // Section yoxdursa yarat
        $sectionId = DB::table('feature_sections')->value('id');

        if (!$sectionId) {
            $sectionId = DB::table('feature_sections')->insertGetId([
                'background_image' => 'features/features-bg.jpg',

                'title_az' => 'SADƏ VƏ EFFEKTİV',
                'title_en' => 'SIMPLE AND EFFECTIVE',

                'description_az' => 'Sadə interfeys və güclü funksionallıq.',
                'description_en' => 'Simple interface and powerful functionality.',

                'button_text_az' => 'PULSUZ BROŞÜR İSTƏ',
                'button_text_en' => 'REQUEST A FREE BROCHURE',

                'button_link' => '/brochure',

                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        DB::table('feature_items')->insert([
            [
                'feature_section_id' => $sectionId,
                'icon' => 'flaticon-cctv-1',
                'title_en' => 'Leading Authority In CCTV',
                'text_en' => 'Maximum security with modern surveillance technologies.',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_section_id' => $sectionId,
                'icon' => 'flaticon-settings',
                'title_en' => 'Next Generation Monitoring',
                'text_en' => 'Smart analytics and flexible control capabilities.',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'feature_section_id' => $sectionId,
                'icon' => 'flaticon-insurance',
                'title_en' => 'Live And Recorded Video',
                'text_en' => 'Secure and stable viewing anytime.',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
