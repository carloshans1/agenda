<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'id',
        'ddd',
        'fone',
        'tipo_id', //celular, celular/whatsapp, telefone_Casa, telefone_serviço, radio...
        'pessoa_id'
    ];

    protected $table = 'Telefone';
}
