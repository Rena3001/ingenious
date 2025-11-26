<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = [
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
        'button_text_az',
        'button_text_en',
        'button_text_ru',
        'button_text_de',
        'button_text_es',
        'button_link',
        'image',
        'layout',
        'step_number'
    ];


    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{$field . '_' . $locale};
    }
}
