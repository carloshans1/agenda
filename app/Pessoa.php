<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'endereco'
    ];

    protected $table = 'pessoa';
    
}
