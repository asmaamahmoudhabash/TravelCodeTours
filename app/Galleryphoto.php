<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galleryphoto extends Model 
{

    protected $table = 'galleryphotoes';
    public $timestamps = true;
    protected $fillable = array('gallery_id', 'image');





    public function gallery()
    {
        return $this->belongsTo('App\Gallery');
    }


    
    public function setImageAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['image'] = $name;
        }
    }



}