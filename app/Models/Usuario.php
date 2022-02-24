<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = ['nombre1', 'nombre2', 'apellido1', 'apellido2', 'nick', 'password', 'rol'];
    // public function getRouteKeyName()
    // {
    //     return 'url';
    // }
}
