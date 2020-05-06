<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Cart extends Model
{
    protected $table = 'user_keranjang';
    protected $fillable = ['user_id','produk_id','qty'];
}
