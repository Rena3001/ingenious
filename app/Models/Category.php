<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_az',
        'name_en',
        'name_ru',
        'name_de',
        'name_es',
        'name_fr',
        'name_zh'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{$field . '_' . $locale};
    }

    public function faqs()
    {
        return $this->hasMany(TechnicalContent::class);
    }
}
