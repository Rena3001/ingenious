<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurServicesSection extends Model
{
    protected $table = 'our_services_sections';

    protected $fillable = [
        'sort_order',
        'background_image',
        'title_az',
        'title_en',
        'title_ru',
        'title_es',
        'title_de',
        'title_fr',
        'title_zh',
        'description_az',
        'description_en',
        'description_ru',
        'description_es',
        'description_de',
        'description_fr',
        'description_zh',
        'service_1_icon',
        'service_1_title_az',
        'service_1_title_en',
        'service_1_title_ru',
        'service_1_title_es',
        'service_1_title_de',
        'service_1_title_fr',
        'service_1_title_zh',
        'service_1_text_az',
        'service_1_text_en',
        'service_1_text_ru',
        'service_1_text_es',
        'service_1_text_de',
        'service_1_text_fr',
        'service_1_text_zh',
        'service_1_button_url',
        'service_2_icon',
        'service_2_title_az',
        'service_2_title_en',
        'service_2_title_ru',
        'service_2_title_es',
        'service_2_title_de',
        'service_2_title_fr',
        'service_2_title_zh',
        'service_2_text_az',
        'service_2_text_en',
        'service_2_text_ru',
        'service_2_text_es',
        'service_2_text_de',
        'service_2_text_fr',
        'service_2_text_zh',
        'service_2_button_url',
        'service_3_icon',
        'service_3_title_az',
        'service_3_title_en',
        'service_3_title_ru',
        'service_3_title_es',
        'service_3_title_de',
        'service_3_title_fr',
        'service_3_title_zh',
        'service_3_text_az',
        'service_3_text_en',
        'service_3_text_ru',
        'service_3_text_es',
        'service_3_text_de',
        'service_3_text_fr',
        'service_3_text_zh',
        'service_3_button_url',
    ];

    public function getTitle(string $locale): ?string
    {
        return $this->{'title_' . $locale}
            ?? $this->title_en;
    }

    public function getDescription(string $locale): ?string
    {
        return $this->{'description_' . $locale}
            ?? $this->description_en;
    }

    public function getServiceTitle(string $locale, int $serviceNumber): ?string
    {
        return $this->{'service_' . $serviceNumber . '_title_' . $locale}
            ?? $this->{'service_' . $serviceNumber . '_title_en'};
    }

    public function getServiceText(string $locale, int $serviceNumber): ?string
    {
        return $this->{'service_' . $serviceNumber . '_text_' . $locale}
            ?? $this->{'service_' . $serviceNumber . '_text_en'};
    }
}
