<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
    protected $table = 'firmy';

    function kasy(){
        return $this->hasMany('App\Kasa');
    }
}
