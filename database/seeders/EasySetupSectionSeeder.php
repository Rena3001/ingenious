<?php

namespace Database\Seeders;

use App\Models\EasySetup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EasySetupSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can add seeding logic here if needed in the future
        EasySetup::create([
            'title_en' => 'Easy Setup for Smart Living',
            'title_az' => 'Ağıllı Yaşayış üçün Asan Quraşdırma',
            'title_ru' => 'Легкая настройка для умной жизни',
            'title_de' => 'Einfache Einrichtung für intelligentes Wohnen',
            'title_fr' => 'Configuration facile pour une vie intelligente',
            'title_es' => 'Configuración fácil para una vida inteligente',
            'title_zh' => '智能生活的轻松设置',

            'description_en' => 'Get started quickly with our user-friendly setup process.',
            'description_az' => 'İstifadəçi dostu quraşdırma prosesi ilə tez başlayın.',
            'description_ru' => 'Быстрый старт с нашим удобным процессом настройки.',
            'description_de' => 'Schneller Start mit unserem benutzerfreundlichen Einrichtungsprozess.',
            'description_fr' => 'Démarrez rapidement avec notre processus de configuration convivial.',
            'description_es' => 'Comience rápidamente con nuestro proceso de configuración fácil de usar.',
            'description_zh' => '通过我们用户友好的设置过程快速开始。',

            'image' => 'images/resource/iphones-4pcs.png',
        ]);
    }
}
