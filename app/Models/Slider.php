<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title_az', 'title_en', 'title_ru',
        'description_az', 'description_en', 'description_ru',
        'button_key', 'button_url', 'image', 'order', 'is_active',
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

    public function getButtonText(?string $locale = null): ?string
    {
        return \App\Models\Translation::getValue($this->button_key, $locale);
    }
}
