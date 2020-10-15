<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = ['nguoidung_id', 'product', 'type', 'price', 'time'];
}
