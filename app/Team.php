<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model 
{

    protected $table = 'teams';
    public $timestamps = true;
    protected $fillable = array('image', 'name_en','name_ar','name_it','name_fr','job_title_ar', 
        'job_title_en','job_title_fr','job_title_it','description_ar', 'description_fr','description_it',
        'description_en','fb','tw','skype','google_plus',
         'image_alt_en','image_alt_ar',
        'image_alt_fr','image_alt_it', '','','','',
    
    );

    public function setImageAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/team/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['image'] = $name;
        }
    }

}