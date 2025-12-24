<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioSection extends Model
{
    protected $fillable = [
        'title_az', 'title_en', 'title_ru', 'title_de', 'title_fr', 'title_es', 'title_zh',
        'description_az', 'description_en', 'description_ru', 'description_de', 'description_fr', 'description_es', 'description_zh',
        'is_active',
    ];

    public function items()
    {
        return $this->hasMany(PortfolioItem::class)->orderBy('sort_order');
    }
}