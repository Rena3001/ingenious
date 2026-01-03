<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TechnicalServicesSlider;

class TechnicalServicesSliderSeeder extends Seeder
{
    public function run(): void
    {
        TechnicalServicesSlider::updateOrCreate(
            [
                'sort_order' => 1,
            ],
            [
                // AZ
                'title_az' => 'Peşəkar Texniki Xidmətlər',
                'description_az' => 'Müasir avadanlıqlar və təcrübəli mütəxəssislər tərəfindən təqdim olunan texniki xidmətlər.',

                // EN
                'title_en' => 'Professional Technical Services',
                'description_en' => 'Professional technical services delivered by experienced specialists using modern equipment.',

                // RU
                'title_ru' => 'Профессиональные технические услуги',
                'description_ru' => 'Профессиональные технические услуги, предоставляемые опытными специалистами.',

                // DE
                'title_de' => 'Professionelle Technische Dienstleistungen',
                'description_de' => 'Professionelle technische Dienstleistungen mit moderner Ausrüstung.',

                // FR
                'title_fr' => 'Services Techniques Professionnels',
                'description_fr' => 'Services techniques professionnels fournis par des spécialistes expérimentés.',

                // ES
                'title_es' => 'Servicios Técnicos Profesionales',
                'description_es' => 'Servicios técnicos profesionales ofrecidos por especialistas experimentados.',

                // ZH
                'title_zh' => '专业技术服务',
                'description_zh' => '由经验丰富的专家使用现代设备提供的专业技术服务。',

                // Slider meta
                'background_image' => null, // admin paneldən upload ediləcək
                'button_link'      => '/technical-services',
                'sort_order'       => 1,
                'is_active'        => true,
            ]
        );
    }
}
