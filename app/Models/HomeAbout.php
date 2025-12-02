<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    protected $fillable = [
        'title_az','title_en','title_ru','title_de','title_es',
        'desc_az','desc_en','desc_ru','desc_de','desc_es',
        'image',
        'is_active',
    ];

    public function getTranslation($field, $locale = null)
    {
        $loc = $locale ?? app()->getLocale();
        $key = $field . "_" . $loc;

        return $this->$key ?? null;
    }
}
