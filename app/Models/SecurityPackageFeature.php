<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SecurityPackageFeature extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'security_package_id',
        'text_az','text_en','text_es','text_de','text_fr','text_ru','text_zh',
        'order'
    ];

    public function getText($locale)
    {
        return $this->{'text_'.$locale} ?? $this->text_en;
    }
     public function securityPackage(): BelongsTo
    {
        return $this->belongsTo(SecurityPackage::class);
    }
}
