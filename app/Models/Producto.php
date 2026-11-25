<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Producto extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'productos';
    protected $fillable = ['nombre', 'precio', 'stock'];
}