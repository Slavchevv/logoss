<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function author(){
        return $this->belongsTo('App\Avtor');
    }
    public function category(){
        return $this->belongsToMany('App\Category');
    }
}
