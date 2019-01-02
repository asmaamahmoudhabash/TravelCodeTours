<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('help_en','slug','phone_ar','help_ar','help_fr','help_it','name_en','name_ar','name_it','name_fr', 'phone_en', 'mail_us', 'description_en','description_ar','description_it','description_fr', 'images', 
        'bg_title_en','bg_title_ar','bg_title_it','bg_title_fr', 'title_en','title_ar','title_it','title_fr', 
        'title_details_ar','title_details_fr','title_details_it','title_details_en','background',
    'meta_title','meta_description','meta_keyword','page_title',
    
    );




//================================


    public function images()
    {
        return $this->hasMany('App\Serviceimage');
    }






    public function setBackgroundAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/services/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['background'] = $name;
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