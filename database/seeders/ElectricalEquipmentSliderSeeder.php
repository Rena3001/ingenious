<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ElectricalEquipmentSlider;

class ElectricalEquipmentSliderSeeder extends Seeder
{
    public function run(): void
    {
        ElectricalEquipmentSlider::updateOrCreate(
            ['id' => 1], // tək slider (təkrar yaratmasın)
            [
                // Images (storage içindən istifadə edəcəksən)
                'background_image' => 'sliders/electrical/background-1.jpg',
                'content_image'    => 'sliders/electrical/content-1.png',

                // Titles
                'title_en' => 'Electrical Equipment',
                'title_az' => 'Elektrik Avadanlıqları',
                'title_ru' => 'Электрическое оборудование',
                'title_de' => 'Elektrische Ausrüstung',
                'title_fr' => 'Équipement électrique',
                'title_es' => 'Equipos eléctricos',
                'title_zh' => '电气设备',

                // Descriptions
                'description_en' =>
                    'Reliable and modern electrical equipment designed for smart homes and efficient energy management.',
                'description_az' =>
                    'Ağıllı evlər və effektiv enerji idarəetməsi üçün nəzərdə tutulmuş etibarlı və müasir elektrik avadanlıqları.',
                'description_ru' =>
                    'Надежное и современное электрическое оборудование для умных домов.',
                'description_de' =>
                    'Zuverlässige und moderne elektrische Ausrüstung für Smart Homes.',
                'description_fr' =>
                    'Équipements électriques fiables et modernes pour les maisons intelligentes.',
                'description_es' =>
                    'Equipos eléctricos fiables y modernos para hogares inteligentes.',
                'description_zh' =>
                    '为智能家居和高效能源管理设计的可靠现代电气设备。',

                // Button
                'button_link' => '/products/electrical-equipment',

                // Order & status
                'sort_order' => 1,
                'is_active'  => true,
            ]
        );
    }
}
