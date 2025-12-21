<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityPackage extends Model
{
    protected $fillable = [
        'product_id',
        'title_az','title_en','title_es','title_de','title_fr','title_ru','title_zh',
        'description_az','description_en','description_es','description_de','description_fr','description_ru','description_zh',
        'features_title_az','features_title_en',
        'background_image','model_image','is_active'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function features()
    {
        return $this->hasMany(SecurityPackageFeature::class)->orderBy('order');
    }

    public function getTitle($locale)
    {
        return $this->{'title_'.$locale} ?? $this->title_en;
    }

    public function getDescription($locale)
    {
        return $this->{'description_'.$locale} ?? $this->description_en;
    }

    public function getFeaturesTitle($locale)
    {
        return $this->{'features_title_'.$locale} ?? $this->features_title_en;
    }
}
