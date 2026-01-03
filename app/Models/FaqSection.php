<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqSection extends Model
{
    protected $table = 'faq_sections';

    protected $fillable = [
        'background_image',
        'image',

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

        'feature_1_icon',
        'feature_1_title_az',
        'feature_1_title_en',
        'feature_1_title_ru',
        'feature_1_title_es',
        'feature_1_title_de',
        'feature_1_title_fr',
        'feature_1_title_zh',
        'feature_1_text_az',
        'feature_1_text_en',
        'feature_1_text_ru',
        'feature_1_text_es',
        'feature_1_text_de',
        'feature_1_text_fr',
        'feature_1_text_zh',

        'feature_2_icon',
        'feature_2_title_az',
        'feature_2_title_en',
        'feature_2_title_ru',
        'feature_2_title_es',
        'feature_2_title_de',
        'feature_2_title_fr',
        'feature_2_title_zh',

        'feature_3_icon',
        'feature_3_title_az',
        'feature_3_title_en',
        'feature_3_title_ru',
        'feature_3_title_es',
        'feature_3_title_de',
        'feature_3_title_fr',
        'feature_3_title_zh',


        // Similarly for feature 2 and feature 3...
    ];

    public function getFeatureTitle($featureNumber, $locale)
    {
        $field = "feature_{$featureNumber}_title_{$locale}";
        return $this->$field;
    }

    public function getFeatureText($featureNumber, $locale)
    {
        $field = "feature_{$featureNumber}_text_{$locale}";
        return $this->$field;
    }

    public function getTitle($locale)
    {
        $field = "title_{$locale}";
        return $this->$field;
    }
    public function getDescription($locale)
    {
        $field = "description_{$locale}";
        return $this->$field;
    }
}



