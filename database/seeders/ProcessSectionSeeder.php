<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProcessSection;

class ProcessSectionSeeder extends Seeder
{
    public function run(): void
    {
        ProcessSection::updateOrCreate(
            ['id' => 1], // yalnız 1 record
            [
                /* =====================
                   TITLES
                ===================== */
                'title_en' => 'SMART INSTALLATION',
                'title_az' => 'AĞILLI QURAŞDIRMA',
                'title_ru' => 'УМНАЯ УСТАНОВКА',
                'title_de' => 'INTELLIGENTE INSTALLATION',
                'title_fr' => 'INSTALLATION INTELLIGENTE',
                'title_es' => 'INSTALACIÓN INTELIGENTE',
                'title_zh' => '智能安装',

                /* =====================
                   DESCRIPTIONS
                ===================== */
                'description_en' =>
                    'Smart installation process designed for fast, secure and reliable system setup.',
                'description_az' =>
                    'Sürətli, təhlükəsiz və etibarlı sistem qurulması üçün hazırlanmış ağıllı quraşdırma prosesi.',
                'description_ru' =>
                    'Умный процесс установки для быстрого и надежного запуска системы.',
                'description_de' =>
                    'Intelligenter Installationsprozess für eine schnelle und sichere Einrichtung.',
                'description_fr' =>
                    'Processus d’installation intelligent pour une mise en place rapide et fiable.',
                'description_es' =>
                    'Proceso de instalación inteligente para una configuración rápida y segura.',
                'description_zh' =>
                    '用于快速、安全系统部署的智能安装流程。',

                /* =====================
                   BACKGROUND IMAGE
                ===================== */
                'background_image' => 'assets/images/background/15.jpg',

                /* =====================
                   ICON CLASSES
                ===================== */
                'icon_1' => 'flaticon-stopwatch',
                'icon_2' => 'flaticon-settings-2',
                'icon_3' => 'flaticon-calendar-3',

                /* =====================
                   STEP 1
                ===================== */
                'step_1_desc_en' => 'Fast planning and preparation for smooth installation.',
                'step_1_desc_az' => 'Rahat quraşdırma üçün sürətli planlama və hazırlıq.',
                'step_1_desc_ru' => 'Быстрое планирование и подготовка.',
                'step_1_desc_de' => 'Schnelle Planung und Vorbereitung.',
                'step_1_desc_fr' => 'Planification et préparation rapides.',
                'step_1_desc_es' => 'Planificación y preparación rápida.',
                'step_1_desc_zh' => '快速规划与准备。',

                /* =====================
                   STEP 2
                ===================== */
                'step_2_desc_en' => 'Precise system configuration and secure setup.',
                'step_2_desc_az' => 'Dəqiq sistem konfiqurasiyası və təhlükəsiz quraşdırma.',
                'step_2_desc_ru' => 'Точная настройка системы.',
                'step_2_desc_de' => 'Präzise Systemkonfiguration.',
                'step_2_desc_fr' => 'Configuration précise du système.',
                'step_2_desc_es' => 'Configuración precisa del sistema.',
                'step_2_desc_zh' => '精准系统配置。',

                /* =====================
                   STEP 3
                ===================== */
                'step_3_desc_en' => 'Final testing, optimization and activation.',
                'step_3_desc_az' => 'Yekun test, optimizasiya və aktivasiya.',
                'step_3_desc_ru' => 'Финальное тестирование и активация.',
                'step_3_desc_de' => 'Abschließende Tests und Aktivierung.',
                'step_3_desc_fr' => 'Tests finaux et activation.',
                'step_3_desc_es' => 'Pruebas finales y activación.',
                'step_3_desc_zh' => '最终测试与启用。',

                'is_active' => true,
            ]
        );
    }
}
