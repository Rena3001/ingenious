<?php

namespace Database\Seeders;

use App\Models\ConsumerElectronicsSlider;
use Illuminate\Database\Seeder;

class ConsumerElectronicsSliderSeeder extends Seeder
{
    public function run(): void
    {
        ConsumerElectronicsSlider::create([
            'background_image' => 'sliders/consumer/bg-1.jpg',
            'content_image'    => 'sliders/consumer/device-1.png',

            'title_en' => 'Smart Consumer Electronics',
            'title_az' => 'Ağıllı İstehlak Elektronikası',
            'title_ru' => 'Умная потребительская электроника',
            'title_de' => 'Intelligente Unterhaltungselektronik',
            'title_fr' => 'Électronique grand public intelligente',
            'title_es' => 'Electrónica de consumo inteligente',
            'title_zh' => '智能消费电子',

            'description_en' => 'Innovative electronics designed for modern smart living.',
            'description_az' => 'Müasir ağıllı yaşayış üçün hazırlanmış innovativ elektronika.',
            'description_ru' => 'Инновационная электроника для умного дома.',
            'description_de' => 'Innovative Elektronik für modernes Smart Living.',
            'description_fr' => 'Électronique innovante pour la vie intelligente.',
            'description_es' => 'Electrónica innovadora para hogares inteligentes.',
            'description_zh' => '为现代智能生活打造的创新电子产品。',

            'button_link' => '/products',
            'sort_order'  => 1,
            'is_active'   => true,
        ]);
    }
}
