<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model 
{

    protected $table = 'ads';
    public $timestamps = true;
    protected $fillable = array('title','title_ar','title_fr','title_it', 'image', 'content');

    public function setImageAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/ads/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['image'] = $name;
        }
    }

}