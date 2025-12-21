<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityFeature extends Model
{
    protected $fillable = [
        'icon',

        'title_az','title_en','title_es','title_de','title_fr','title_ru','title_zh',
        'description_az','description_en','description_es','description_de',
        'description_fr','description_ru','description_zh',

        'order',
        'is_active',
    ];

    public function getTitle($locale)
    {
        $field = 'title_' . $locale;
        return $this->$field ?? $this->title_en ?? $this->title_az;
    }

    public function getDescription($locale)
    {
        $field = 'description_' . $locale;
        return $this->$field ?? $this->description_en ?? $this->description_az;
    }
}
