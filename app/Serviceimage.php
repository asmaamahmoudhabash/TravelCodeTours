<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviceimage extends Model
{

    protected $table = 'serviceimages';
    public $timestamps = true;
    protected $fillable = array('service_id', 'image');





    public function service()
    {
        return $this->belongsTo('App\Service');
    }


    
    public function setImageAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/services/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['image'] = $name;
        }
    }



}