<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestros extends Model
{
    protected $table = 'maestros';

    protected $fillable = ['nombre'];
}
