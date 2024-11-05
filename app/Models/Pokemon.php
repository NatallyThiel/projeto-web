<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'pontos_de_poder', 
    ];
}
