<?php

namespace Database\Seeders;

use App\Models\NightVisionSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NightVisionSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NightVisionSection::create([
            'title_en' => 'Night Vision Technology',
            'title_az' => 'Gecə Görmə Texnologiyası',
            'title_ru' => 'Технология ночного видения',
            'title_es' => 'Tecnología de Visión Nocturna',
            'title_de' => 'Nachtsehen Technologie',
            'title_fr' => 'Technologie de Vision Nocturne',
            'title_zh' => '夜间视觉技术',
            'description_en' => 'Experience unparalleled clarity in low-light conditions with our cutting-edge night vision technology. Designed to enhance visibility and ensure safety, our night vision solutions are perfect for various applications, from security to outdoor adventures.',
            'description_az' => 'Gecə ərazi dərəcəsindən istifadə edərək, bizim inkişaf etmiş gecə görüş texnologiyamızla təkmil şəkildə görə bilərsiniz. Görünüşü artırmaq və təhlükəsizlik təmin etmək üçün dizayn olunmuş gecə görüş həllimiz, təhlükəsizlikdən sınaqda qalın vaxtın qeyri-adi tәkmil şәkildә görә bilәrsiniz.',
            'description_ru' => 'Ощущайте непревзойденную ясность в условиях низкой освещенности с нашей передовой технологией ночного видения. Разработанная для повышения видимости и обеспечения безопасности, наша технология ночного видения идеально подходит для различных применений, от безопасности до приключений на открытом воздухе.',
            'description_es' => 'Experimente una claridad sin precedentes en condiciones de poca luz con nuestra tecnología de visión nocturna de última generación. Diseñada para mejorar la visibilidad y garantizar la seguridad, nuestras soluciones de visión nocturna son perfectas para diversas aplicaciones, desde seguridad hasta aventuras al aire libre.',
            'description_de' => 'Erleben Sie unvergleichliche Klarheit bei schwachem Licht mit unserer modernen Nachtseh-Technologie. Entwickelt zur Verbesserung der Sichtbarkeit und Sicherheit, sind unsere Nachtsichtlösungen ideal für verschiedene Anwendungen, von Sicherheit bis Outdoor-Abenteuer.',
            'description_fr' => 'Profitez d\'une clarté inégalée dans des conditions de faible luminosité avec notre technologie de vision nocturne innovante. Conçue pour améliorer la visibilité et assurer la sécurité, notre solution de vision nocturne est parfaite pour diverses applications, allant de la sécurité aux aventures en plein air.',
            'description_zh' => '通过我们尖端的夜间视觉技术，在低光条件下体验无与伦比的清晰度。专为增强可见性和确保安全而设计，我们的夜间视觉解决方案非常适合各种应用，从安全到户外冒险。',
            'button_primary_url' => 'https://example.com/night-vision',
            'button_secondary_url' => 'https://example.com/learn-more',
            'image' => 'night_vision_section/default_night_vision_image.jpg',
            'is_active' => true,
        ]);
    }
}
