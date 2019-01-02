<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model 
{

    protected $table = 'images';
    public $timestamps = true;
    protected $fillable = array('tour_id', 'image');





    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }


    
    public function setImageAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/image/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['image'] = $name;
        }
    }



}