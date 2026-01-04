<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_es',
        'title_fr',
        'title_zh',

        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_es',
        'description_fr',
        'description_zh',
        'button_key',
        'button_url',
        'image',
        'order',
        'is_active',
    ];


    // Hər dilə görə başlıq və mətn dinamik çağırmaq üçün helper
    public function getTitle(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{'title_' . $locale};
    }

    public function getDescription(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{'description_' . $locale};
    }
}
