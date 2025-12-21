<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityEquipmentSection extends Model
{
    protected $fillable = [
        'product_id',
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_fr',
        'description_es',
        'description_zh',
        'hero_image',
        'is_active',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
