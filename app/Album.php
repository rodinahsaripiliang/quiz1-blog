<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
     protected $table = 'album';
    protected $fillable = ['alamat_pengirim','no_hp'];
}
