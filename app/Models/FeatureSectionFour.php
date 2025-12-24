<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeatureSectionFour extends Model
{
    protected $fillable = [
        'upper_image',

        'upper_title_az',
        'upper_title_en',
        'upper_title_ru',
        'upper_title_de',
        'upper_title_fr',
        'upper_title_es',
        'upper_title_zh',
        'upper_description_az',
        'upper_description_en',
        'upper_description_ru',
        'upper_description_de',
        'upper_description_fr',
        'upper_description_es',
        'upper_description_zh',

        'upper_icon_1',
        'upper_icon_1_url',
        'upper_icon_2',
        'upper_icon_2_url',
        'upper_icon_3',
        'upper_icon_3_url',
        'upper_icon_4',
        'upper_icon_4_url',

        'lower_image',

        'lower_title_az',
        'lower_title_en',
        'lower_title_ru',
        'lower_title_de',
        'lower_title_fr',
        'lower_title_es',
        'lower_title_zh',
        'lower_description_az',
        'lower_description_en',
        'lower_description_ru',
        'lower_description_de',
        'lower_description_fr',
        'lower_description_es',
        'lower_description_zh',

        'button_url',
        'is_active',
    ];

    public function upperTitle($locale)
    {
        return $this->{'upper_title_' . $locale};
    }

    public function upperDescription($locale)
    {
        return $this->{'upper_description_' . $locale};
    }

    public function lowerTitle($locale)
    {
        return $this->{'lower_title_' . $locale};
    }

    public function lowerDescription($locale)
    {
        return $this->{'lower_description_' . $locale};
    }
}
