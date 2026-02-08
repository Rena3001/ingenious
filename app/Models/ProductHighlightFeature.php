<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductHighlightFeature extends Model
{

    protected $fillable = ['icon','order',
        'title_az','title_en','title_ru','title_de','title_fr','title_es','title_zh',
        'content_az','content_en','content_ru','content_de','content_fr','content_es','content_zh',
    ];

     /* =====================
       RELATIONS
    ====================== */

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
 