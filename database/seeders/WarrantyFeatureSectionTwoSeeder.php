<?php

namespace Database\Seeders;

use App\Models\FeatureSectionTwo;
use App\Models\WarrantyFeatureSectionTwo;
use Illuminate\Database\Seeder;

class WarrantyFeatureSectionTwoSeeder extends Seeder
{
    public function run(): void
    {
        WarrantyFeatureSectionTwo::create([

            /* =====================
               BACKGROUND
            ===================== */
            'background_image' => 'features/warranty-support-bg.jpg',

            /* =====================
               TITLE (32)
            ===================== */
            'title_en' => 'Warranty & Support',
            'title_az' => 'Zəmanət və Dəstək',
            'title_ru' => 'Гарантия и поддержка',
            'title_de' => 'Garantie & Support',
            'title_fr' => 'Garantie et assistance',
            'title_es' => 'Garantía y soporte',
            'title_zh' => '保修与支持',

            /* =====================
               DESCRIPTION (32.1)
            ===================== */
            'description_en' =>
                'Please review the guidelines below to ensure proper warranty evaluation and support.',
            'description_az' =>
                'Zəmanət müraciətinin düzgün qiymətləndirilməsi və dəstək göstərilməsi üçün aşağıdakı qaydalarla tanış olun.',
            'description_ru' =>
                'Пожалуйста, ознакомьтесь с приведенными ниже правилами для правильной оценки гарантии и получения поддержки.',
            'description_de' =>
                'Bitte lesen Sie die folgenden Richtlinien, um eine korrekte Garantieprüfung und Unterstützung zu gewährleisten.',
            'description_fr' =>
                'Veuillez consulter les directives ci-dessous afin de garantir une évaluation correcte de la garantie et une assistance appropriée.',
            'description_es' =>
                'Revise las siguientes pautas para garantizar una correcta evaluación de la garantía y soporte.',
            'description_zh' =>
                '请查看以下指南，以确保正确的保修评估和支持。',

            /* =====================
               ICON 1 — PACKAGE CHECK (33)
            ===================== */
            'icon_1' => 'flaticon-box',

            'icon_1_title_en' => 'Package & Accessories Check',
            'icon_1_title_az' => 'Qutu və Aksesuarların Yoxlanması',
            'icon_1_title_ru' => 'Проверка упаковки и аксессуаров',
            'icon_1_title_de' => 'Überprüfung von Verpackung und Zubehör',
            'icon_1_title_fr' => 'Vérification de l’emballage et des accessoires',
            'icon_1_title_es' => 'Revisión del paquete y accesorios',
            'icon_1_title_zh' => '包装与配件检查',

            /* =====================
               ICON 2 — INSTALLATION (34)
            ===================== */
            'icon_2' => 'flaticon-settings',

            'icon_2_title_en' => 'Installation Requirements',
            'icon_2_title_az' => 'Quraşdırma Tələbləri',
            'icon_2_title_ru' => 'Требования к установке',
            'icon_2_title_de' => 'Installationsanforderungen',
            'icon_2_title_fr' => 'Exigences d’installation',
            'icon_2_title_es' => 'Requisitos de instalación',
            'icon_2_title_zh' => '安装要求',

            /* =====================
               ICON 3 — WARRANTY TERMS (35)
            ===================== */
            'icon_3' => 'flaticon-shield',

            'icon_3_title_en' => 'Warranty Terms',
            'icon_3_title_az' => 'Zəmanət Şərtləri',
            'icon_3_title_ru' => 'Гарантийные условия',
            'icon_3_title_de' => 'Garantiebedingungen',
            'icon_3_title_fr' => 'Conditions de garantie',
            'icon_3_title_es' => 'Términos de garantía',
            'icon_3_title_zh' => '保修条款',

            /* =====================
               STATUS
            ===================== */
            'is_active' => true,
        ]);
    }
}
