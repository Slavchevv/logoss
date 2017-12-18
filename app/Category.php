<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function uploads()
    {
        return $this->belongsToMany('App\Upload');
    }

    /*   public function downloads()
       {
           return $this->hasMany('App\Upload','category_upload','category_id','upload_id');
       }
   */
}
