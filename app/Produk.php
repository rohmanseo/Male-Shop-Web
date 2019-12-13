<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [];

    public function kategori()
{
    return $this->belongsTo(Kategori::class);
}
    public function warna()
{
    return $this->belongsToMany(Warna::class);
}
}
