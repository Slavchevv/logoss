<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function upload(){
        return $this->hasMany('App\Upload');
    }
    public function admin(){
        return $this->hasOne('App\PAdmin');
    }
 /*   public function admin(){
        return $this->hasOne('App\PAdmin');
    }*/

    public function uploads()
    {
        return $this->belongsToMany('App\Upload', 'upload_user', 'upload_id', 'user_id');
    }
    public function points()
    {
        return $this->hasOne('App\Points');
    }


}
