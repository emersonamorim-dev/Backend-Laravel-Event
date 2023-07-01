<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class Stock extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'stocks';

    protected $fillable = ['symbol', 'price', 'quantity'];

    // Você pode adicionar mais métodos e lógica relacionada ao Model aqui, se necessário.
}
