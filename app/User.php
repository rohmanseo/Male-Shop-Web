<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['nama','email','password','no_telp','alamat','foto','api_token'];
}
