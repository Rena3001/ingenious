<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        $languages = [
            [
                'code' => 'az',
                'label' => 'AZ',
                'name' => 'Azərbaycan',
                'flag' => 'https://flagcdn.com/az.svg',
                'order' => 1,
            ],
            [
                'code' => 'en',
                'label' => 'EN',
                'name' => 'English',
                // İngilis dili üçün GB flag istifadə olunur
                'flag' => 'https://flagcdn.com/gb.svg',
                'order' => 2,
            ],
            [
                'code' => 'ru',
                'label' => 'RU',
                'name' => 'Русский',
                'flag' => 'https://flagcdn.com/ru.svg',
                'order' => 3,
            ],
            [
                'code' => 'de',
                'label' => 'DE',
                'name' => 'Deutsch',
                'flag' => 'https://flagcdn.com/de.svg',
                'order' => 4,
            ],
            [
                'code' => 'es',
                'label' => 'ES',
                'name' => 'Español',
                'flag' => 'https://flagcdn.com/es.svg',
                'order' => 5,
            ],
            [
                'code' => 'fr',
                'label' => 'FR',
                'name' => 'Français',
                'flag' => 'https://flagcdn.com/fr.svg',
                'order' => 6,
            ],
            [
                'code' => 'zh',
                'label' => 'ZH',
                'name' => '中文',
                // Çin bayrağı (Chinese language)
                'flag' => 'https://flagcdn.com/cn.svg',
                'order' => 7,
            ],
        ];

        foreach ($languages as $lang) {
            Language::updateOrCreate(
                ['code' => $lang['code']],
                array_merge($lang, ['is_active' => true])
            );
        }
    }
}
