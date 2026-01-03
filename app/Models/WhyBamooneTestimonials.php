<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyBamooneTestimonials extends Model
{
    protected $table = 'why_bamoone_testimonials';

    protected $fillable = [
        'title_az',
        'title_en',
        'title_es',
        'title_de',
        'title_fr',
        'title_ru',
        'title_zh',
        'image_logo',
        'description_az',
        'description_en',
        'description_es',
        'description_de',
        'description_fr',
        'description_ru',
        'description_zh',
        'sort_order',
        'is_active',
    ];
    
    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"title_{$locale}"} ?? $this->title_en;
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"description_{$locale}"} ?? $this->description_en;
    }
}
