<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAplusContent extends Model
{
    protected $fillable = [
        'product_id',
        'image',
        'text_az',
        'text_en',
        'text_ru',
        'text_de',
        'text_es',
        'text_fr',
        'text_zh',
        'sort_order',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
