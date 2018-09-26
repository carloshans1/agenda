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

    /* UM Tipo Telefone para UM Telefone*/
    public function telefone() {
        return $this->hasOne(Telefone::class, 'telefone_id');
    }
}
