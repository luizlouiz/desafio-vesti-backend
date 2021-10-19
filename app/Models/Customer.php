<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Modelo de registro do banco

class Customer extends Model
{
    protected $fillable = [ 'nome', 'email', 'telefone', 'dt_nascimento'];
}
