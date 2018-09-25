<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone_Tipo extends Model
{
    protected $fillable = [
        'id',
        'tipo', // Celular - whatsapp
        'telefone_id'
    ];

    protected $table = 'Telefone_Tipo';

    /* MUITOS telefones para UMA Pessoa*/
    public function pessoa() {
        return $this->hasOne(Telefone::class, 'telefone_id');
    }
}
