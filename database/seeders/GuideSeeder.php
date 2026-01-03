<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guide;
use Carbon\Carbon;

class GuideSeeder extends Seeder
{
    public function run(): void
    {
        Guide::truncate();

        Guide::create([
            'category_id' => 1, // Security Products
            'model_code'  => 'BO1-1-10MB',

            /* ===============================
               PRODUCT NAME (7 LANG)
            =============================== */
            'product_name_az' => 'Smart Kilid BO1-1-10MB',
            'product_name_en' => 'Smart Lock BO1-1-10MB',
            'product_name_ru' => 'Умный замок BO1-1-10MB',
            'product_name_de' => 'Smartes Schloss BO1-1-10MB',
            'product_name_es' => 'Cerradura Inteligente BO1-1-10MB',
            'product_name_fr' => 'Serrure Intelligente BO1-1-10MB',
            'product_name_zh' => '智能门锁 BO1-1-10MB',

            /* ===============================
               DESCRIPTION (7 LANG)
            =============================== */
            'description_az' =>
                'Bu video təlimatda smart kilidin sıfırlanması, ilkin quraşdırılması və gündəlik istifadə qaydaları izah olunur.',

            'description_en' =>
                'This video tutorial explains how to reset, install, and properly use the smart lock.',

            'description_ru' =>
                'В этом видео объясняется сброс, установка и правильное использование умного замка.',

            'description_de' =>
                'Dieses Video erklärt das Zurücksetzen, die Installation und die Nutzung des Smart-Schlosses.',

            'description_es' =>
                'Este video explica cómo reiniciar, instalar y usar correctamente la cerradura inteligente.',

            'description_fr' =>
                'Cette vidéo explique la réinitialisation, l’installation et l’utilisation correcte de la serrure intelligente.',

            'description_zh' =>
                '本视频讲解智能门锁的重置、安装及正确使用方法。',

            /* ===============================
               VIDEO
            =============================== */
            'video_embed_url' =>
                'https://www.youtube.com/embed/dQw4w9WgXcQ',

            'video_watch_url' =>
                'https://www.youtube.com/watch?v=dQw4w9WgXcQ',

            /* ===============================
               STATUS
            =============================== */
            'is_active'    => true,
            'published_at' => Carbon::now()->subDays(2),
        ]);

        Guide::create([
            'category_id' => 3, // Electrical Equipment
            'model_code'  => 'ELX-220-PWR',

            'product_name_az' => 'Elektrik Adapteri ELX-220',
            'product_name_en' => 'Power Adapter ELX-220',
            'product_name_ru' => 'Адаптер питания ELX-220',
            'product_name_de' => 'Netzadapter ELX-220',
            'product_name_es' => 'Adaptador ELX-220',
            'product_name_fr' => 'Adaptateur ELX-220',
            'product_name_zh' => '电源适配器 ELX-220',

            'description_az' =>
                'Bu video elektrik adapterinin təhlükəsiz qoşulması və istifadə qaydalarını izah edir.',

            'description_en' =>
                'This guide shows how to safely connect and use the power adapter.',

            'description_ru' =>
                'Видео объясняет безопасное подключение и использование адаптера питания.',

            'description_de' =>
                'Dieses Video zeigt die sichere Nutzung des Netzadapters.',

            'description_es' =>
                'Este video explica el uso seguro del adaptador de corriente.',

            'description_fr' =>
                'Cette vidéo explique l’utilisation sécurisée de l’adaptateur.',

            'description_zh' =>
                '本视频讲解电源适配器的安全使用方法。',

            'video_embed_url' =>
                'https://www.youtube.com/embed/9bZkp7q19f0',

            'video_watch_url' =>
                'https://www.youtube.com/watch?v=9bZkp7q19f0',

            'is_active'    => true,
            'published_at' => Carbon::now()->subDay(),
        ]);
    }
}
