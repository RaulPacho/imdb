<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pelicula extends Model
{
     static $fallo = false;
     protected $fillable = ['titulo','dir_id','act_id', 'descripcion'];  
}
