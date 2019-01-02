<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array(

        'slug', 'name_en', 'name_ar', 'meta_title', 'meta_description',
        'photo_alt', 'meta_keyword', 'page_title', 'name_it', 'name_fr', 'background', 'bg_title_en',
        'cat_title_en', 'bg_title_ar', 'bg_title_fr', 'bg_title_it', 'bg_desc_en', 'bg_desc_ar', 'bg_desc_fr',
        'bg_desc_it'


    );

    public function tours()
    {
        return $this->hasMany('App\Tour');
    }


    public function contact()
    {


        return $this->belongsTo('App\Contact');
    }


    public function setBackgroundAttribute($image)
    {
        if ($image) {
            $dest = 'admin-assets/images/category/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['background'] = $name;
        }
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