<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'type',
        'title_az', 'title_en', 'title_ru',
        'content_az', 'content_en', 'content_ru',
        'short_desc_az', 'short_desc_en', 'short_desc_ru',
        'button_key', 'is_active',
    ];

    public function missionItems()
    {
        return $this->hasMany(AboutMissionItem::class);
    }

    public function getTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{'title_'.$locale};
    }

    public function getContent($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{'content_'.$locale};
    }

    public function getShortDesc($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{'short_desc_'.$locale};
    }

    public function getButtonText($locale = null)
    {
        return \App\Models\Translation::getValue($this->button_key, $locale);
    }

    public function getTranslation($field, $locale)
    {
        return $this->{$field . '_' . $locale};
    }
}
