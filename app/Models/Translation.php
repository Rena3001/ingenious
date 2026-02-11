<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
  protected $fillable = [
        'key',
        'value_az',
        'value_en',
        'value_ru',
        'value_de',
        'value_es',
        'value_fr',
        'value_zh',
    ];


public static function getValue(?string $key, ?string $locale = null): string
{
    if (!$key) {
        return '';
    }

    $locale = $locale ?? app()->getLocale();
    $column = 'value_' . $locale;

    $translation = static::where('key', $key)->first();

    return $translation?->$column ?? $key;
}

}
