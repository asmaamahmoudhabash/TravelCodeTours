<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model 
{

    protected $table = 'tags';
    public $timestamps = true;
    protected $fillable = array('name_en','name_ar','name_it','name_fr');

    public function tours()
    {
        return $this->hasMany('App\Tour');
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }
    
}