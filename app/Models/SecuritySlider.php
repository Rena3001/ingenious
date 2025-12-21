<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecuritySlider extends Model
{

    protected $fillable = [
        'title_en',
        'title_es',
        'title_de',
        'title_fr',
        'title_ru',
        'title_zh',
        'title_az',
        'description_en',
        'description_es',
        'description_de',
        'description_fr',
        'description_ru',
        'description_zh',
        'description_az',
        'image',
        'is_active',
        'order'
    ];

    public function getTitle($locale)
    {
        return $this->{'title_' . $locale}
            ?? $this->title_az
            ?? $this->title_en;
    }

    public function getDescription($locale)
    {
        return $this->{'description_' . $locale}
            ?? $this->description_az
            ?? $this->description_en;
    }
    public function getTranslation($field, $locale = null)
    {
        $loc = $locale ?? app()->getLocale();
        return $this->{$field . '_' . $loc};
    }
}
