<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $table='warna';
    protected $fillable=[];

    public function produk()
    {
        return $this->belongsToMany(Produk::class);
    }
}
