<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model

{
    protected $fillable = ['nome', 'vida', 'experiencia','level'];
}

