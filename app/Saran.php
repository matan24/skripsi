<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Saran extends Model
{
    protected $table = 'saran';
    protected $fillable = ['nama', 'rt', 'alamat', 'no', 'saran'];
}
