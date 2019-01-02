<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{

    protected $table = 'tours';
    public $timestamps = true;
    protected $fillable = array('id',

        'place_en', 'place_ar', 'place_fr', 'place_it',
        'price',
        'taxes_fees_en', 'taxes_fees_ar',
        'type_en', 'type_ar', 'type_fr', 'type_it',
        'air_line_en', 'air_line_fr', 'air_line_ar', 'air_line_it',
        'fare_en', 'fare_ar', 'fare_it', 'fare_fr',
        'cancelation_en',
        'change_en',
        'base_fare_en', 'base_fare_ar',
        'seats_paggages_en', 'seats_paggages_ar', 'seats_paggages_it', 'seats_paggages_fr',
        'inflight_features_en', 'inflight_features_ar', 'inflight_features_fr', 'inflight_features_it',
        'continent_id', 'category_id', 'tag_id',
        'vedio', 'slug', 'lat', 'has_offer', 'lon',
        'description_en', 'description_ar', 'description_it', 'description_fr',
        'adults', 'Kids',
        'start_date_en', 'final_date_en',
        'offer_en',
        'background',
        'bg_title_en', 'bg_title_fr', 'bg_title_it', 'bg_title_ar',
        'bg_desc_en', 'bg_desc_ar', 'bg_desc_fr', 'bg_desc_it',
        'meta_title', 'meta_description', 'meta_keyword', 'page_title',

        'short_cut_en','short_cut_fr','short_cut_it','short_cut_ar',

    );


    protected $appends = ['image'];

    public function continent()
    {
        return $this->belongsTo('App\Continent');
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function getImageAttribute($value)
    {
        $image = $this->images()->first();
        if ($image == null) {
            return null;
        }
        return $image->image;
    }


    //background image
    public function setBackgroundAttribute($image)
    {
        if ($image) {
            $dest = 'admin-assets/images/tours/';
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