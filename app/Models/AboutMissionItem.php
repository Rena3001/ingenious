<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMissionItem extends Model
{
    protected $fillable = [
        'about_section_id',
        'icon',
        'title_az', 'title_en', 'title_ru',
        'text_az', 'text_en', 'text_ru',
    ];

    public function section()
    {
        return $this->belongsTo(AboutSection::class);
    }

    public function getTitle($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{'title_'.$locale};
    }

    public function getText($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{'text_'.$locale};
    }
    public function getTranslation($field, $locale)
    {
        return $this->{$field . '_' . $locale};
    }
}
