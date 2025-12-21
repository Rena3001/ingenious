<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallationService extends Model
{
    protected $fillable = [
        'background_image',
        'title_az','title_en','title_ru','title_de','title_fr','title_es','title_zh',
        'description_az','description_en','description_ru','description_de','description_fr','description_es','description_zh',
       
        'cta_link',
        'is_active',
    ];

    public function icons()
    {
        return $this->hasMany(InstallationServiceIcon::class)->orderBy('order');
    }
}
