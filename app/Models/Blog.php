<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
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
        'image',
        'position'
    ];


    public function getTranslation($field, $locale)
    {
        return $this->{$field . '_' . $locale};
    }
}
