<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InstallationSection;

class InstallationSectionSeeder extends Seeder
{
    public function run(): void
    {
          InstallationSection::query()->delete();

        InstallationSection::create([
            // TITLE — 70
            'title_en' => 'Installation Solutions',
            'title_az' => 'Quraşdırma həll yolları',
            'title_ru' => 'Решения по установке',
            'title_de' => 'Installationslösungen',
            'title_es' => 'Soluciones de instalación',
            'title_fr' => 'Solutions d’installation',
            'title_zh' => '安装解决方案',

            // DESCRIPTION — 70.1
            'description_en' =>
                'Our goal is to make BAMoONE product installation simple and accessible for everyone. This section helps you understand the setup quickly and resolve any issues without losing time.',
            'description_az' =>
                'BAMoONE məhsullarının quraşdırılmasını hər kəs üçün daha sadə və əlçatan etmək əsas məqsədimizdir. Bu bölmə quraşdırmanı tez başa düşmək və yaranan çətinlikləri vaxt itirmədən həll etmək üçün hazırlanıb.',
            'description_ru' =>
                'Наша цель — сделать установку продуктов BAMoONE простой и доступной для всех.',
            'description_de' =>
                'Unser Ziel ist es, die Installation von BAMoONE-Produkten einfach und zugänglich zu machen.',
            'description_es' =>
                'Nuestro objetivo es hacer que la instalación de los productos BAMoONE sea sencilla.',
            'description_fr' =>
                'Notre objectif est de rendre l’installation des produits BAMoONE simple et accessible.',
            'description_zh' =>
                '我们的目标是让 BAMoONE 产品的安装变得简单易懂。',

            // CTA — 74
            'cta_link' => '#technical-support',

            'is_active' => true,
        ]);
    }
}
