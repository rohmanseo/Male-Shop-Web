<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Order extends Model
{
    protected $table = 'user_order';
    protected  $fillable = ['user_id','produk_id','qty'];
}
