<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class receita extends Model
{
    // codigo realizar insert dos alunos
    protected $fillable = [
        'NOME', 
        'VALOR', 
    ];

    // campo de data de nascimento, usado no update
    protected $dates = ['DATA'];

    // codigo para realizar update
    protected $guarded = [];
}
