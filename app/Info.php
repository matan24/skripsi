<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'informasi';
    protected $fillable = ['judul', 'isi', 'waktu'];
}
