<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalIcons extends Model
{
    protected $table = 'technical_icons';

    protected $fillable = [
        'icon_1',
        'icon_2',
        'icon_3',
        'icon_4',
        'icon_1_az',
        'icon_1_en',
        'icon_1_ru',
        'icon_1_de',
        'icon_1_es',
        'icon_1_fr',
        'icon_1_zh',
        'icon_2_az',
        'icon_2_en',
        'icon_2_ru',
        'icon_2_de',
        'icon_2_es',
        'icon_2_fr',
        'icon_2_zh',
        'icon_3_az',
        'icon_3_en',
        'icon_3_ru',
        'icon_3_de',
        'icon_3_es',
        'icon_3_fr',
        'icon_3_zh',
        'icon_4_az',
        'icon_4_en',
        'icon_4_ru',
        'icon_4_de',
        'icon_4_es',
        'icon_4_fr',
        'icon_4_zh',
        'is_active'
    ];

    public function getIconTitle($iconNumber, $locale)
    {
        $fieldName = "icon_{$iconNumber}_{$locale}";
        return $this->$fieldName;
    }
}

