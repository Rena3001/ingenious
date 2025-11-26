<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',

        // Names
        'name_az',
        'name_en',
        'name_ru',
        'name_de',
        'name_es',

        // Descriptions
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_es',

        'price',
        'image',
        'amazon_link'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{$field . '_' . $locale};
    }
    public function reviews()
    {
        return $this->hasMany(Review::class)->where('approved', true);
    }
}
