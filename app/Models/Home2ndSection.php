<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home2ndSection extends Model
{
    protected $table = 'home_2nd_sections';
    protected $fillable = [
        'background_image',
        'is_active',
    ];
}
