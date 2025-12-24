<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallToActionTwo extends Model
{
    protected $table = 'call_to_action_twos';

    protected $fillable = [
        'title_az',
        'title_en',
        'title_es',
        'title_de',
        'title_fr',
        'title_ru',
        'title_zh',
        'subtitle_az',
        'subtitle_en',
        'subtitle_de',
        'subtitle_es',
        'subtitle_fr',
        'subtitle_ru',
        'subtitle_zh',
        'background_image',
        'button_url',
    ];

    public function getTitle(string $locale): ?string
    {
        return $this->{'title_' . $locale}
            ?? $this->title_en;
    }

    public function getSubTitle(string $locale): ?string
    {
        return $this->{'subtitle_' . $locale}
            ?? $this->subtitle_en;
    }
}
