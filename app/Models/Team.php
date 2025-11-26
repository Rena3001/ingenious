<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_az',
        'name_en',
        'name_ru',
        'name_de',
        'name_es',
        'position_az',
        'position_en',
        'position_ru',
        'position_de',
        'position_es',
        'desc_az',
        'desc_en',
        'desc_ru',
        'desc_de',
        'desc_es',
        'image',
        'twitter',
        'facebook',
        'linkedin',
        'sort',
        'is_active',
    ];


    // Dynamic name by locale
    public function getName($locale)
    {
        return $this->{'name_' . $locale} ?? $this->name_az;
    }

    public function getPosition($locale)
    {
        return $this->{'position_' . $locale} ?? $this->position_az;
    }

    public function getDesc($locale)
    {
        return $this->{'desc_' . $locale} ?? $this->desc_az;
    }
}
