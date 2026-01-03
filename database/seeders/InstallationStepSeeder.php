<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InstallationSection;
use App\Models\InstallationStep;

class InstallationStepSeeder extends Seeder
{
    public function run(): void
    {
        InstallationStep::truncate();

        $section = InstallationSection::first();

        /* =====================
           STEP 1 — 71 / 71.1
        ===================== */
        InstallationStep::create([
            'installation_section_id' => $section->id,
            'step_number' => 1,
            'sort_order' => 1,
            'icon' => 'flaticon-video',

            'title_en' => 'Video Setup Guides',
            'title_az' => 'Video Təlimlərlə Quraşdırma',
            'title_ru' => 'Видео-инструкции',
            'title_de' => 'Video-Installationsanleitungen',
            'title_es' => 'Guías de instalación en video',
            'title_fr' => 'Guides vidéo d’installation',
            'title_zh' => '视频安装指南',

            'description_en' =>
                'Use our video tutorials to learn the installation process in the fastest and most intuitive way.',
            'description_az' =>
                'Quraşdırmanı ən tez və anlaşılan şəkildə öyrənmək üçün video təlimlərdən istifadə edin.',
            'description_ru' =>
                'Используйте видеоуроки для быстрого обучения установке.',
            'description_de' =>
                'Nutzen Sie Video-Tutorials für eine schnelle Installation.',
            'description_es' =>
                'Aprenda la instalación de forma rápida con videos.',
            'description_fr' =>
                'Apprenez l’installation rapidement grâce aux vidéos.',
            'description_zh' =>
                '通过视频教程快速学习安装流程。',

            'is_active' => true,
        ]);

        /* =====================
           STEP 2 — 72 / 72.1
        ===================== */
        InstallationStep::create([
            'installation_section_id' => $section->id,
            'step_number' => 2,
            'sort_order' => 2,
            'icon' => 'flaticon-pdf',

            'title_en' => 'Safe Installation with PDF Manuals',
            'title_az' => 'PDF Təlimatlarla Təhlükəsiz Quraşdırma',
            'title_ru' => 'Безопасная установка с PDF',
            'title_de' => 'Sichere Installation mit PDF',
            'title_es' => 'Instalación segura con PDF',
            'title_fr' => 'Installation sécurisée avec PDF',
            'title_zh' => 'PDF 手册安全安装',

            'description_en' =>
                'Our PDF manuals include detailed illustrated instructions.',
            'description_az' =>
                'PDF təlimat kitabçaları quraşdırmanı şəkilli və dəqiq izahlarla öyrətmək üçün idealdır.',
            'description_ru' =>
                'PDF-руководства с подробными иллюстрациями.',
            'description_de' =>
                'PDF-Handbücher mit detaillierten Anleitungen.',
            'description_es' =>
                'Manuales PDF con instrucciones ilustradas.',
            'description_fr' =>
                'Manuels PDF avec instructions illustrées.',
            'description_zh' =>
                '包含详细图示的 PDF 手册。',

            'is_active' => true,
        ]);

        /* =====================
           STEP 3 — 73 / 73.1
        ===================== */
        InstallationStep::create([
            'installation_section_id' => $section->id,
            'step_number' => 3,
            'sort_order' => 3,
            'icon' => 'flaticon-support',

            'title_en' => 'Contact Us for Immediate Support',
            'title_az' => 'Bizə Yazın və Dərhal Həll Tapın',
            'title_ru' => 'Свяжитесь с нами',
            'title_de' => 'Kontaktieren Sie uns',
            'title_es' => 'Contáctenos',
            'title_fr' => 'Contactez-nous',
            'title_zh' => '联系我们获得支持',

            'description_en' =>
                'If you face any difficulty, write to us. Our team will quickly analyze the issue.',
            'description_az' =>
                'Çətinlik yaranarsa bizə yazın. Komandamız problemi tez analiz edib həll edəcək.',
            'description_ru' =>
                'При возникновении проблем свяжитесь с нами.',
            'description_de' =>
                'Bei Problemen kontaktieren Sie unser Team.',
            'description_es' =>
                'Si tiene dificultades, contáctenos.',
            'description_fr' =>
                'En cas de problème, contactez-nous.',
            'description_zh' =>
                '如遇问题，请联系我们的支持团队。',

            'is_active' => true,
        ]);
    }
}
