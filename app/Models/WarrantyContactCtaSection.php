<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantyContactCtaSection extends Model
{
    protected $table = 'contact_cta_sections';

    protected $fillable = [

        /* Background */
        'background_image',

        /* Title */
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',

        /* Description */
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_fr',
        'description_es',
        'description_zh',

        /* CTA Button */
        'button_link',

        /* Status */
        'is_active',
    ];
}
