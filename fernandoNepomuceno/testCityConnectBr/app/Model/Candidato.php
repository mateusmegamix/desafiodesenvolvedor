<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
        'nome', 'data_nascimento', 'sexo', 'data_cadastro', 'curriculo'
    ];

    protected $dates = [
        'data_nascimento', 'data_cadastro'
    ];

}
