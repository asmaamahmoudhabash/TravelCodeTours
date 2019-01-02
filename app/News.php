<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news';
    public $timestamps = false;
    protected $fillable = array('body_en', 'slug', 'image', 'body_ar', 'body_it', 'body_fr',
        'title_en', 'title_ar', 'title_fr', 'tag_id', 'title_it', 'published_at', 'user_id', 'tour_id', 'image', 'status',
        'meta_title', 'meta_description', 'meta_keyword', 'page_title',
    );


    public function setImageAttribute($image)
    {
        if ($image) {
            $dest = 'admin-assets/images/news/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['image'] = $name;
        }
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
//
//    public function comments()
//    {
//        return $this->hasMany('App\Comment');
//    }

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }

    public function tag()
    {
        return $this->belongsTo('App\Tag');
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