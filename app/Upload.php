<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function author(){
        return $this->belongsTo('App\Avtor', 'avtor_id');
    }
    public function category(){
        return $this->belongsToMany('App\Category');
    }
    public function users()
    {
        return $this->belongsToMany('App\User', 'upload_user', 'upload_id', 'user_id');
    }
}














