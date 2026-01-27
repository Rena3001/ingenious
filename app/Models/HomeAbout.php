<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
class HomeAbout extends Model
{
protected $fillable = [
    'title_az',
    'title_en',
    'title_ru',
    'title_de',
    'title_es',
    'title_fr',
    'title_zh',

    'desc_az',
    'desc_en',
    'desc_ru',
    'desc_de',
    'desc_es',
    'desc_fr',
    'desc_zh',

    'image',
    'background_image',
    'is_active',
];

       public function missionItems()
{
    return $this->hasMany(AboutMissionItem::class, 'about_section_id')
        ->orderBy('sort');
}

    public function getTranslation($field, $locale = null)
    {
        $loc = $locale ?? app()->getLocale();
        $key = $field . "_" . $loc;

        return $this->$key ?? null;
    }
    public function getTitle(?string $locale = null): ?string
    {
        return $this->getTranslation('title', $locale);
    }

    public function getDesc(?string $locale = null): ?string
    {
        return $this->getTranslation('desc', $locale);
    }

    public function getShortDesc(?string $locale = null): ?string
    {
        $desc = $this->getDesc($locale);
        return $desc ? substr($desc, 0, 500) : null;
    }
    public function getButtonText(?string $locale = null): ?string
    {
        return $this->getTranslation('button_text', $locale);
    }
}
