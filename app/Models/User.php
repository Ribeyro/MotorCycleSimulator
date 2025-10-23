<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'last_name',
        'tiempo_total',
        'vel_maxima',
        'vel_promedio',
        'num_objetivos_cumplidos',
        'num_infracciones',
        'lista_casos',
        'lista_senales',
    ];

    protected $casts = [
        'tiempo_total' => 'decimal:4',
        'num_objetivos_cumplidos' => 'integer',
        'num_infracciones' => 'integer',
        'lista_casos' => 'array',
        'lista_senales' => 'array',
    ];
}
