<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $fillable = [
        'portfolio_section_id',
        'title_az', 'title_en', 'title_ru', 'title_de', 'title_fr', 'title_es', 'title_zh',
        'description_az', 'description_en', 'description_ru', 'description_de', 'description_fr', 'description_es', 'description_zh',
        'image',
        'product_url',
        'sort_order',
        'is_active',
    ];

    public function section()
    {
        return $this->belongsTo(PortfolioSection::class, 'portfolio_section_id');
    }
}
