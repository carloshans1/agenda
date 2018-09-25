<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'id',
        'ddd',
        'fone',
        'pessoa_id'
    ];

    protected $table = 'Telefone';

    /* MUITOS telefones para UMA Pessoa*/
    public function pessoa() {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    /* UM Telefone para UM Tipo Telefone*/
    public function telefone_tipo() {
        return $this->hasOne(Telefone_Tipo::class, 'telefone_id');
    }
}
