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
        'name_fr',
        'name_zh',

        // Descriptions
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_es',
        'description_fr',
        'description_zh',

        'price',
        'image',
        'amazon_link',
        'model_code',
        'slug',
        'is_new',
        'is_top_seller',
        'is_active',
        'amazon_price',
        'currency',
        'features',
        'detail_page_url',
    ];
    protected $casts = [
        'features' => 'array',
        'is_new' => 'boolean',
        'is_top_seller' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'amazon_price' => 'decimal:2',
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

    public function images()
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order');
    }

    public function videos()
    {
        return $this->hasMany(ProductVideo::class);
    }

    public function specs()
    {
        return $this->hasMany(ProductSpec::class);
    }

    public function aplusContents()
    {
        return $this->hasMany(ProductAplusContent::class)->orderBy('sort_order');
    }
    public function getRouteKeyName()
{
    return 'slug';
}

}
