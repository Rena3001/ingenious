<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopSection extends Model
{
    protected $table='shop_sections';

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
        'is_active'
    ];

    public function getTitle($locale = null)
    {
        $locale = $locale ?? (function_exists('app') ? app()->getLocale() : 'en');
        $field = 'title_' . $locale;
        if (isset($this->{$field}) && $this->{$field} !== '') {
            return $this->{$field};
        }
        // fallback order
        return $this->title_en ?? $this->title_az ?? null;
    }

    public function getDescription($locale = null)
    {
        $locale = $locale ?? (function_exists('app') ? app()->getLocale() : 'en');
        $field = 'description_' . $locale;
        if (isset($this->{$field}) && $this->{$field} !== '') {
            return $this->{$field};
        }
        // fallback order
        return $this->description_en ?? $this->description_az ?? null;
    }
    



}
