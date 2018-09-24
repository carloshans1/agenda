<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone_Tipo extends Model
{
    protected $fillable = [
        'id',
        'tipo',
        'telefone_id'
    ];

    protected $table = 'Telefone_Tipo';
}
