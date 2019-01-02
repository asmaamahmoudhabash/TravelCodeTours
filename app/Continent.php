<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model 
{

    protected $table = 'continents';
    public $timestamps = true;
    protected $fillable = array('name_en','name_ar','name_fr','name_it', 'image','image_alt_ar','image_alt_en','image_alt_it','image_alt_fr',
    
    
    );

    public function tours()
    {
        return $this->hasMany('App\Tour');
    }


    public function setImageAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/continent/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['image'] = $name;
        }
    }


}