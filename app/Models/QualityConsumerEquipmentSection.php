<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityConsumerEquipmentSection extends Model
{
    protected $table = 'quality_consumer_equipment_sections';

    protected $fillable = [
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_fr',
        'description_es',
        'description_zh',
        'image',
        'is_active',
    ];

    // Accessor methods for multilingual titles and descriptions
    public function getTitle($locale)
    {
        $field = 'title_' . $locale;
        return $this->$field;
    }

    public function getDescription($locale)
    {
        $field = 'description_' . $locale;
        return $this->$field;
    }
    protected static function booted()
    {
        static::saving(function ($model) {
            logger('IMAGE VALUE:', [$model->image]);
        });
    }
}
