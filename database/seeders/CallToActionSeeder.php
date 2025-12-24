<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CallToAction;

class CallToActionSeeder extends Seeder
{
    public function run(): void
    {
        CallToAction::create([
            'background_image' => 'assets/images/background/19.jpg',

            'title_en' => 'WORKING TOGETHER',
            'title_az' => 'BİRLİKDƏ İŞLƏYİRİK',
            'title_ru' => 'РАБОТАЕМ ВМЕСТЕ',
            'title_de' => 'ZUSAMMENARBEIT',
            'title_fr' => 'TRAVAILLER ENSEMBLE',
            'title_es' => 'TRABAJANDO JUNTOS',
            'title_zh' => '共同努力',
            'description_ru' => 'Мы работаем вместе, чтобы создать более удобную и умную среду.',
            'description_de' => 'Wir arbeiten zusammen, um eine komfortablere und intelligentere Umgebung zu schaffen.',
            'description_fr' => 'Nous travaillons ensemble pour créer un environnement plus confortable et plus intelligent.',
            'description_es' => 'Trabajamos juntos para crear un entorno más cómodo e inteligente.',
            'description_zh' => '我们共同努力，创造一个更舒适、更智能的环境。',
            'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description_az' => 'Birlikdə işləyərək daha rahat və ağıllı mühit yaradırıq.',

            'button_url' => '/contact',
            'is_active' => true,
        ]);
    }
}
