<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usluga extends Model
{
    function kasa () {
        return $this->belongsTo('App\Kasa','kasa_id');
    }
}
