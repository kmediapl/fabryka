<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Typkasy;

class Kasa extends Model
{
    protected $table = 'kasy';
    protected $fillable = ['nazwa_kasy', 'firma_id','nr_fabryczny','nr_unikatowy','nazwa_lok','miejscowosc_lok','ulica_lok','typ_kasy',];

    function firma() {
        return $this->belongsTo('App\Firma','firma_id');
    }

    function uslugi () {
        return $this->hasMany('App\Usluga');
    }

}
