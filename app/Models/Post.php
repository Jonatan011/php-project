<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Definir las columnas que pueden ser llenadas
    protected $fillable = ['title', 'body'];
}
