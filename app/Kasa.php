<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Typkasy;

class Kasa extends Model
{
    protected $table = 'kasy';

    function firma() {
        return $this->belongsTo('App\Firma','firma_id');
    }

    function uslugi () {
        return $this->hasMany('App\Usluga');
    }

}
