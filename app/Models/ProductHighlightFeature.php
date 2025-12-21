<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductHighlightFeature extends Model
{
    protected $fillable = ['icon','order'];

    public function highlight()
    {
        return $this->belongsTo(ProductHighlight::class);
    }

    public function getTitle($locale)
    {
        return $this->{'title_'.$locale} ?? $this->title_en;
    }

    public function getContent($locale)
    {
        return $this->{'content_'.$locale} ?? $this->content_en;
    }
}
