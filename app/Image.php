<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function author(){

        return $this->belongsTo('App\Avtor', 'avtor_id');

    }
}
