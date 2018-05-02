<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urzadskarbowy extends Model
{
    protected $table = 'usadresy';
    function kasa() {
        
        return $this->belongsTo('App\Kasa','us_id');
    }
}
