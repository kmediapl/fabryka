<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usluga extends Model
{
    protected $table = 'uslugi';
    function kasa () {
        return $this->belongsTo('App\Kasa','kasa_id');
    }
}
