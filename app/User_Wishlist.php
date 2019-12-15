<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Wishlist extends Model
{
    protected $table = 'user_wishlist';
    protected  $fillable = ['user_id','produk_id'];
}
