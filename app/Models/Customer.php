<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [ 'nome', 'email', 'telefone', 'dt_nascimento'];
}
