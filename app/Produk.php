<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    public function category()
    {
        return $this->belongsTo('App\Category','kategori_id');
    }
}
