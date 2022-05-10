<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $guarded = [];

    // По умолчанию приходят строки, но свойство $casts изменяет свойства параметров
    protected $casts = [
        'price' => 'float',
        'active' => 'boolean'
    ];

    // свойство $dates приводит значения к объекту, а не просто к строковому значению
    protected $dates = [
        'active_at',
    ];
}
