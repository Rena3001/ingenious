<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccordionSection extends Model
{
    protected $fillable = [
        'background_image',
        'title_az','title_en','title_ru','title_de','title_fr','title_es','title_zh',
        'is_active'
    ];

    public function items()
    {
        return $this->hasMany(AccordionItem::class)
            ->orderBy('sort_order');
    }
}
