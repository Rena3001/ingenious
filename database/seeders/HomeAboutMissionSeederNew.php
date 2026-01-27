<?php

namespace Database\Seeders;

use App\Models\AboutMissionItem;
use Illuminate\Database\Seeder;
use App\Models\HomeAboutMission;

class HomeAboutMissionSeederNew extends Seeder
{
    public function run(): void
    {
        AboutMissionItem::truncate();

        AboutMissionItem::insert([
            [
                'about_section_id' => 1,
                'title_az' => 'Missiyamız',
                'title_en' => 'Our Mission',
                'title_ru' => 'Наша миссия',

                'icon' => 'flaticon-target', // və ya svg
                
            ],
            [
                'about_section_id' => 1,
                'title_az' => 'Vizyonumuz',
                'title_en' => 'Our Vision',
                'title_ru' => 'Наше видение',

                'icon' => 'flaticon-eye',
                
            ],
            [
                'about_section_id' => 1,
                'title_az' => 'Dəyərlərimiz',
                'title_en' => 'Our Values',
                'title_ru' => 'Наши ценности',

                'icon' => 'flaticon-diamond',
                
                
            ],
        ]);
    }
}
