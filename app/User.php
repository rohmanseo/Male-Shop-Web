<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['nama','email','password','no_telp','alamat','foto','api_token'];

    public function keranjang()
    {
        return $this->belongsToMany(Produk::class,'user_keranjang');
    }
    public function wishlist()
    {
        return $this->belongsToMany(Produk::class,'user_wishlist');
    }
}
    
