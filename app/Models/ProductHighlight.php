<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductHighlight extends Model
{
    protected $fillable = [
        'product_id',

        'title_az','title_en','title_ru','title_de','title_fr','title_es','title_zh',
        'description_az','description_en','description_ru','description_de','description_fr','description_es','description_zh',

        'background_image',
        'is_active',
    ];

    /* =====================
       RELATIONS
    ====================== */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function features()
    {
        return $this->hasMany(ProductHighlightFeature::class)
            ->orderBy('order');
    }

    /* =====================
       HELPERS
    ====================== */
    public function getTitle(string $locale)
    {
        return $this->{'title_'.$locale} ?? $this->title_en;
    }

    public function getDescription(string $locale)
    {
        return $this->{'description_'.$locale} ?? $this->description_en;
    }
}
