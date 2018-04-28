<?php

namespace App;

use App\Typkasy;
use Illuminate\Database\Eloquent\Model;

class Typykas extends Model
{
    protected $table = 'typy_kas';

    function kasa () {
        return $this->belonsTo('App\Kasa', 'kasa_id');
    }
}
