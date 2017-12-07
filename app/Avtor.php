<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avtor extends Model
{
    public function author(){
        return $this->hasMany('App\Upload');
    }
}
