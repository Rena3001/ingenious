<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeApplianceSlideSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('home_appliance_slides')->insert([
            // Background image
            'background_image' => 'images/main-slider/7.jpg',

            // Title
            'title_az' => 'APARICI AVTORİTET',
            'title_en' => 'THE LEADING AUTHORITY',
            'title_ru' => 'ВЕДУЩИЙ АВТОРИТЕТ',
            'title_de' => 'DIE FÜHRENDE AUTORITÄT',
            'title_fr' => 'L’AUTORITÉ PRINCIPALE',
            'title_es' => 'LA AUTORIDAD LÍDER',
            'title_zh' => '领先的权威',

            // Subtitle
            'subtitle_az' => 'CCTV Sistem Texnologiyasında',
            'subtitle_en' => 'In CCTV System Technology',
            'subtitle_ru' => 'В технологии систем видеонаблюдения',
            'subtitle_de' => 'In der CCTV-Systemtechnologie',
            'subtitle_fr' => 'Dans la technologie des systèmes CCTV',
            'subtitle_es' => 'En tecnología de sistemas CCTV',
            'subtitle_zh' => '在闭路电视系统技术中',

            // Button
            'button_link' => '',

            // Order & status
            'sort_order' => 1,
            'is_active' => true,

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
