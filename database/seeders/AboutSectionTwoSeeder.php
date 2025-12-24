<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSectionTwo;

class AboutSectionTwoSeeder extends Seeder
{
    public function run(): void
    {
        AboutSectionTwo::create([
            'title_en' => 'Everything You Need',
            'title_az' => 'Sizə Lazım Olan Hər Şey',
            'title_ru' => 'Все, что вам нужно',
            'title_es' => 'Todo lo que necesitas',
            'title_de' => 'Alles, was du brauchst',
            'title_fr' => 'Tout ce dont vous avez besoin',
            'title_zh' => '您需要的一切',

            'description_en' => 'Everything you need to manage, monitor, and grow your system efficiently.',
            'description_az' => 'Sisteminizi effektiv idarə etmək və inkişaf etdirmək üçün lazım olan hər şey.',
            'description_ru' => 'Всё, что вам нужно для эффективного управления, мониторинга и развития вашей системы.',
            'description_es' => 'Todo lo que necesitas para gestionar, monitorear y hacer crecer tu sistema de manera eficiente.',
            'description_de' => 'Alles, was Sie zum effizienten Verwalten, Überwachen und Wachsen Ihres Systems benötigen.',
            'description_fr' => "Tout ce dont vous avez besoin pour gérer, surveiller et faire croître votre système efficacement.",
            'description_zh' => "您需要的一切来高效地管理、监控和扩展您的系统。",

            // Graph 1
            'graph_1_title_en' => 'Marketing',
            'graph_1_title_az' => 'Marketinq',
            'graph_1_title_ru' => 'Маркетинг',
            'graph_1_title_es' => 'Marketing',
            'graph_1_title_de' => 'Marketing',
            'graph_1_title_fr' => 'Marketing',
            'graph_1_title_zh' => '市场',

            'graph_1_value' => 80,

            // Graph 2
            'graph_2_title_en' => 'Design',
            'graph_2_title_az' => 'Dizayn',
            'graph_2_title_ru' => 'Дизайн',
            'graph_2_title_es' => 'Diseño',
            'graph_2_title_de' => 'Design',
            'graph_2_title_fr' => 'Design',
            'graph_2_title_zh' => '设计',

            'graph_2_value' => 90,

            // Graph 3
            'graph_3_title_en' => 'Innovation',
            'graph_3_title_az' => 'İnnovasiya',
            'graph_3_title_ru' => 'Инновации',
            'graph_3_title_es' => 'Innovación',
            'graph_3_title_de' => 'Innovation',
            'graph_3_title_fr' => 'Innovation',
            'graph_3_title_zh' => '创新',
            'graph_3_value' => 75,

            // Graph 4
            'graph_4_title_en' => 'Support',
            'graph_4_title_az' => 'Dəstək',
            'graph_4_title_ru' => 'Поддержка',
            'graph_4_title_es' => 'Soporte',
            'graph_4_title_de' => 'Unterstützung',
            'graph_4_title_fr' => 'Support',
            'graph_4_title_zh' => '支持',
            'graph_4_value' => 85,
        ]);
    }
}
