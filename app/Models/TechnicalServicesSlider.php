<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalServicesSlider extends Model
{
    protected $table = 'technical_services_sliders';

    protected $fillable = [
        'background_image',
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_fr',
        'description_es',
        'description_zh',
        'button_link',
        'sort_order',
        'is_active',
    ];
    public function getTitle($locale)
    {
        $field = 'title_' . $locale;
        return $this->$field;
    }

    public function getDescription($locale)
    {
        $field = 'description_' . $locale;
        return $this->$field;
    }
}
