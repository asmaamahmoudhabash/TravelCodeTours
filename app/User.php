<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_en', 'email', 'password','type','name_ar','name_it','name_fr',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setPasswordAttribute($date) {
        if (isset($date) && !empty($date)) {

            $this->attributes['password'] = bcrypt($date);
        }
    }



    public function news()
    {
        return $this->hasMany('App\News');
    }


   
}

