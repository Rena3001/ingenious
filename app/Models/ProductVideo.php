<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVideo extends Model
{
    protected $fillable = [
        'product_id',
        'type',        // intro | installation
        'video_url',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
