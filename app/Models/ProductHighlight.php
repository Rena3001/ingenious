<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductHighlight extends Model
{
    protected $fillable = ['product_id', 'is_active'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function features()
    {
        return $this->hasMany(ProductHighlightFeature::class)
            ->orderBy('order');
    }

    public function getTitle($locale)
    {
        return $this->{'title_'.$locale} ?? $this->title_en;
    }

    public function getDescription($locale)
    {
        return $this->{'description_'.$locale} ?? $this->description_en;
    }
}

