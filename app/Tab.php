<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{

    protected $table = 'tabs';
    public $timestamps = true;
    protected $fillable = array('name_en','name_ar','name_it','name_fr');

    public function photoes()
    {
        return $this->hasMany('App\Gallery');

    }

}