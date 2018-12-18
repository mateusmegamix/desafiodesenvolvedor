<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'Pessoas';
    protected $fillable = array('Nome', 'Data_Nasc', 'Sexo');
}
