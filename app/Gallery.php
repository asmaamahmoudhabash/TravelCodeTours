<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $table = 'gallery';
    public $timestamps = true;
    protected $fillable = array('mainphoto','title_en','title_ar','title_it','title_fr','','slug','background','tab_id', 'description_en', 'description_ar', 'description_fr', 'description_it', '', 'images', 'content_en', 'content_ar', 'content_fr', 'content_it', '', 'bg_desc', 'bg_desc_ar', 'bg_desc_it', 'bg_desc_fr', 'bg', 'bg_title_ar', 'bg_title_fr', 'bg_title_it', 'bg_title', 'background', 'photo_Alt_ar', 'photo_Alt_it', 'photo_Alt_fr', 'photo_Alt','images');

//    protected $appends = ['first_image'];


    public function tab()
    {


        return $this->belongsTo('App\Tab');
    }


    public function galleryphotoes()
    {
        return $this->hasMany('App\Galleryphoto');
    }

//    public function getFirstImageAttribute()
//    {
//
//
//        if ($this->galleryphotoes->first()) {
//            return $this->galleryphotoes->first();
//        }
//        return null;
//    }

    public function setBackgroundAttribute($image)
    {
        if ($image) {
            $dest = 'admin-assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['background'] = $name;
        }

    }


    public function setMainphotoAttribute($image)
    {
        if ($image) {
            $dest = 'admin-assets/images/gallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['mainphoto'] = $name;
        }

    }

    public function getImageAttribute($value)
    {
        $image = $this->images()->first();
        if ($image == null) {
            return null;
        }
        return $image->image;
    }



    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = $this->make_slug($value);
    }

    public function make_slug($string = null, $separator = "-")
    {
        if (is_null($string)) {
            return "";
        }
        // Remove spaces from the beginning and from the end of the string
        $string = trim($string);
        // Lower case everything
        // using mb_strtolower() function is important for non-Latin UTF-8 string | more info: http://goo.gl/QL2tzK
        $string = mb_strtolower($string, "UTF-8");;
        // Make alphanumeric (removes all other characters)
        // this makes the string safe especially when used as a part of a URL
        // this keeps latin characters and arabic charactrs as well
        $string = preg_replace("/[^a-z0-9_\s-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]/u", "", $string);
        // Remove multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        // Convert whitespaces and underscore to the given separator
        $string = preg_replace("/[\s_]/", $separator, $string);
        return $string;
    }




}