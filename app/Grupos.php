<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $table = 'grupos';
    protected $fillable = ['id_maestro', 'id_materia', 'aula'];
}
