<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoadmapItem;

class RoadmapSeeder extends Seeder
{
    public function run(): void
    {
        RoadmapItem::truncate();

        RoadmapItem::insert([

            /* =======================
             * 1-ci mərhələ — SECURITY
             * ======================= */
            [
                'stage_number' => 1,
                'icon' => 'flaticon-lock',
                'image' => 'roadmap/security.jpg',
                'slug' => 'security-overview',

                'title_az' => 'Security – Ümumi Baxış',
                'title_en' => 'Security – Overview',
                'title_ru' => 'Безопасность – Обзор',
                'title_de' => 'Sicherheit – Überblick',
                'title_es' => 'Seguridad – Visión General',

                'subtitle_az' => 'Təhlükəsizlik',
                'subtitle_en' => 'Security',
                'subtitle_ru' => 'Безопасность',
                'subtitle_de' => 'Sicherheit',
                'subtitle_es' => 'Seguridad',

                'desc_az' => 'Smart və mexaniki kilidlər, təhlükəsizlik kameraları, giriş-çıxış sistemləri, seyflər və digər qoruyucu avadanlıqlar BAMoONE-un əsas prioritetidir.',
                'desc_en' => 'Smart locks, mechanical locks, security cameras, access control systems and safes form BAMoONE’s core priorities.',
                'desc_ru' => 'Умные и механические замки, камеры, системы контроля доступа и сейфы — основные приоритеты BAMoONE.',
                'desc_de' => 'Intelligente und mechanische Schlösser, Kameras und Zugangssysteme bilden den Kern von BAMoONE.',
                'desc_es' => 'Cerraduras inteligentes, cámaras y sistemas de control forman el núcleo de BAMoONE.',

                'button_link' => 'security',
                'button_key'  => 'buttons.overview',
                'is_active'   => 1,
                'order'       => 1,
            ],

            /* =======================
             * 2-ci mərhələ — HOME APPLIANCES
             * ======================= */
            [
                'stage_number' => 2,
                'icon' => 'flaticon-home',
                'image' => 'roadmap/home-appliances.jpg',
                'slug' => 'home-appliances-overview',

                'title_az' => 'Məişət Texnikası – Ümumi Baxış',
                'title_en' => 'Home Appliances – Overview',
                'title_ru' => 'Бытовая техника – Обзор',
                'title_de' => 'Haushaltsgeräte – Überblick',
                'title_es' => 'Electrodomésticos – Visión General',

                'subtitle_az' => 'Məişət Texnikası',
                'subtitle_en' => 'Home Appliances',
                'subtitle_ru' => 'Бытовая техника',
                'subtitle_de' => 'Haushaltsgeräte',
                'subtitle_es' => 'Electrodomésticos',

                'desc_az' => 'Təmizlik cihazları, mətbəx avadanlıqları və hava keyfiyyəti sistemləri mərhələli şəkildə bazara təqdim ediləcək.',
                'desc_en' => 'Cleaning devices, kitchen appliances and air-quality systems will be launched gradually.',
                'desc_ru' => 'Устройства для уборки и кухни будут выводиться на рынок поэтапно.',
                'desc_de' => 'Reinigungs- und Küchengeräte werden schrittweise eingeführt.',
                'desc_es' => 'Los dispositivos domésticos se lanzarán progresivamente.',

                'button_link' => 'home-appliances',
                'button_key'  => 'buttons.overview',
                'is_active'   => 1,
                'order'       => 2,
            ],

            /* =======================
             * 3-cü mərhələ — ELECTRICAL
             * ======================= */
            [
                'stage_number' => 3,
                'icon' => 'flaticon-plug',
                'image' => 'roadmap/electrical.jpg',
                'slug' => 'electrical-overview',

                'title_az' => 'Elektrik Təchizatı – Ümumi Baxış',
                'title_en' => 'Electrical Equipment – Overview',
                'title_ru' => 'Электрооборудование – Обзор',
                'title_de' => 'Elektrische Geräte – Überblick',
                'title_es' => 'Equipos Eléctricos – Visión General',

                'subtitle_az' => 'Elektrik Təchizatı',
                'subtitle_en' => 'Electrical Equipment',
                'subtitle_ru' => 'Электрооборудование',
                'subtitle_de' => 'Elektrische Geräte',
                'subtitle_es' => 'Equipos Eléctricos',

                'desc_az' => 'Ağıllı prizlər, enerji modulları, lampalar və şarj sistemləri hazırda hazırlıq mərhələsindədir.',
                'desc_en' => 'Smart sockets, energy modules and charging systems are currently in preparation.',
                'desc_ru' => 'Умные розетки и энергомодули находятся на стадии подготовки.',
                'desc_de' => 'Intelligente Steckdosen und Energiemodule befinden sich in Vorbereitung.',
                'desc_es' => 'Los módulos eléctricos están en fase de preparación.',

                'button_link' => 'electrical',
                'button_key'  => 'buttons.overview',
                'is_active'   => 1,
                'order'       => 3,
            ],

            /* =======================
             * 4-cü mərhələ — ELECTRONICS
             * ======================= */
            [
                'stage_number' => 4,
                'icon' => 'flaticon-headphones',
                'image' => 'roadmap/electronics.jpg',
                'slug' => 'electronics-overview',

                'title_az' => 'Elektronika – Ümumi Baxış',
                'title_en' => 'Consumer Electronics – Overview',
                'title_ru' => 'Электроника – Обзор',
                'title_de' => 'Elektronik – Überblick',
                'title_es' => 'Electrónica – Visión General',

                'subtitle_az' => 'Elektronika',
                'subtitle_en' => 'Consumer Electronics',
                'subtitle_ru' => 'Электроника',
                'subtitle_de' => 'Elektronik',
                'subtitle_es' => 'Electrónica',

                'desc_az' => 'Dinamiklər, qulaqcıqlar, audio sistemlər və powerbanklar bu mərhələnin əsasını təşkil edir.',
                'desc_en' => 'Speakers, earphones, audio systems and power banks form this stage.',
                'desc_ru' => 'Колонки, наушники и powerbank-устройства составляют эту категорию.',
                'desc_de' => 'Lautsprecher, Kopfhörer und Powerbanks bilden diese Kategorie.',
                'desc_es' => 'Altavoces, auriculares y powerbanks forman esta etapa.',

                'button_link' => 'electronics',
                'button_key'  => 'buttons.overview',
                'is_active'   => 1,
                'order'       => 4,
            ],
        ]);
    }
}
