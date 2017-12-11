<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avtor extends Model
{
    public function uploads(){
        return $this->hasMany('App\Upload');
    }
}
