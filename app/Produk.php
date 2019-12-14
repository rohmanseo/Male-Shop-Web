<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'nama', 'harga', 'foto', 'diskripsi', 'kategori_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Kategori','kategori_id');
    }
}
