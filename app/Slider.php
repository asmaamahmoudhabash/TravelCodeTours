<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model 
{

    protected $table = 'sliders';
    public $timestamps = true;
    protected $fillable = array('image', 'title_en','title_ar','title_fr','title_it',
        'body_en','body_ar','body_fr','body_it','image_alt_en','image_alt_ar',
        'image_alt_fr','image_alt_it','status','sub_title_en','sub_title_ar',
        'sub_title_en','sub_title_fr','sub_title_it',);


    public function setImageAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/slider/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['image'] = $name;

        }
    }

}