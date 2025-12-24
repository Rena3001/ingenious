<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessSection extends Model
{
    protected $fillable = [
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
        'background_image',
        'icon_1',
        'icon_2',
        'icon_3',
        'step_1_desc_az',
        'step_1_desc_en',
        'step_1_desc_ru',
        'step_1_desc_de',
        'step_1_desc_fr',
        'step_1_desc_es',
        'step_1_desc_zh',
        'step_2_desc_az',
        'step_2_desc_en',
        'step_2_desc_ru',
        'step_2_desc_de',
        'step_2_desc_fr',
        'step_2_desc_es',
        'step_2_desc_zh',
        'step_3_desc_az',
        'step_3_desc_en',
        'step_3_desc_ru',
        'step_3_desc_de',
        'step_3_desc_fr',
        'step_3_desc_es',
        'step_3_desc_zh',
        'is_active',
        'button_link',
    ];
}
