<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    protected $table = 'user';
    protected $fillable = ['nama','email','password','no_telp','alamat','foto'];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function cart()
    {
        return $this->belongsToMany(Produk::class,'user_keranjang')->withPivot('qty');
    }
    public function wishlist()
    {
        return $this->belongsToMany(Produk::class,'user_wishlist');
    }
    public function order()
    {
        return $this->belongsToMany(Produk::class,'user_order')->withPivot('qty');
    }
}
    
