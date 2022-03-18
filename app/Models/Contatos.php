<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $fillable = [
        'nome',
        'E-mail',
        'telefone',
        'messagem'
       
    ];

}
