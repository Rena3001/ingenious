<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'icons',

        // Main
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_es',
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_es',

        'sort',

        // Section 2
        'section2_title_az',
        'section2_title_en',
        'section2_title_ru',
        'section2_title_de',
        'section2_title_es',
        'section2_description_az',
        'section2_description_en',
        'section2_description_ru',
        'section2_description_de',
        'section2_description_es',

        'section2_list',

        'section2_button_text_az',
        'section2_button_text_en',
        'section2_button_text_ru',
        'section2_button_text_de',
        'section2_button_text_es',

        'section2_button_link',
        'section2_background',

        // Section 3
        'section3_title_az',
        'section3_title_en',
        'section3_title_ru',
        'section3_title_de',
        'section3_title_es',
        'section3_description_az',
        'section3_description_en',
        'section3_description_ru',
        'section3_description_de',
        'section3_description_es',

        'section3_skills',
        'section3_background',
    ];


    /**
     * Icons JSON formatını avtomatik array kimi gətirək.
     */
    protected $casts = [
        'icons' => 'array',
        'section2_list' => 'array',
        'section3_skills' => 'array',
    ];
}
