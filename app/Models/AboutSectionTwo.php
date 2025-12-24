<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSectionTwo extends Model
{
    protected $table = 'about_section_twos';

    protected $fillable = [
        // Titles
        'title_az',
        'title_en',
        'title_ru',
        'title_es',
        'title_de',
        'title_fr',
        'title_zh',

        // Descriptions
        'description_az',
        'description_en',
        'description_ru',
        'description_es',
        'description_de',
        'description_fr',
        'description_zh',

        // Pie Graphs
        'graph_1_title_az',
        'graph_1_title_en',
        'graph_1_title_ru',
        'graph_1_title_es',
        'graph_1_title_de',
        'graph_1_title_fr',
        'graph_1_title_zh',
        'graph_1_value',
        'graph_2_title_az',
        'graph_2_title_en',
        'graph_2_title_ru',
        'graph_2_title_es',
        'graph_2_title_de',
        'graph_2_title_fr',
        'graph_2_title_zh',
        'graph_2_value',
        'graph_3_title_az',
        'graph_3_title_en',
        'graph_3_title_ru',
        'graph_3_title_es',
        'graph_3_title_de',
        'graph_3_title_fr',
        'graph_3_title_zh',
        'graph_3_value',
        'graph_4_title_az',
        'graph_4_title_en',
        'graph_4_title_ru',
        'graph_4_title_es',
        'graph_4_title_de',
        'graph_4_title_fr',
        'graph_4_title_zh',
        'graph_4_value',

        // Image
        'image',
    ];

    public function getTitle(string $locale): ?string
    {
        return $this->{'title_' . $locale}
            ?? $this->title_en;
    }

    public function getDescription(string $locale): ?string
    {
        return $this->{'description_' . $locale}
            ?? $this->description_en;
    }

    public function getGraphTitle(int $graphNumber, string $locale): ?string
    {
        $field = 'graph_' . $graphNumber . '_title_' . $locale;
        return $this->{$field}
            ?? $this->{'graph_' . $graphNumber . '_title_en'};
    }
}
