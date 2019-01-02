<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'main';
    public $timestamps = false;
    protected $fillable = array(
       
        'aboutus_desc_en','aboutus_desc_ar','aboutus_desc_fr','aboutus_desc_it',
        'aboutus_en','aboutus_ar','aboutus_fr','aboutus_it',
        'aboutuswelcome_en','aboutuswelcome_it','aboutuswelcome_fr','aboutuswelcome_ar',
        'address_en','address_it','address_ar','address_fr',
        'footerdescription_en','footerdescription_fr','footerdescription_it','footerdescription_ar',
        'aboutuswho_en','aboutuswho_ar','aboutuswho_fr','aboutuswho_it',
        'aboutuswhat_en','aboutuswhat_ar','aboutuswhat_fr','aboutuswhat_it',
        'footerlogo','footerlogoar','footerlogoit','footerlogofr',
        'headerlogo','headerlogoar ','headerlogofr','headerlogoit ',
        'fax','fax_ar',
        'phone','phone_ar',

        
        
        
        'photo_alt',
        'aboutusbg',
        'aboutusimage',
        'membership',
        'title_en','title_ar','title_fr','title_it',
        
        'services',
        'services_ar',
        'projects',
        'contactbg',
        'contactus',
        'contact_bg_title_en','contact_bg_title_it','contact_bg_title_ar','contact_bg_title_fr',

        'apple',
        'mobile',
        'fb',
        'linkedin',
        'tw',
        'be',
        'yt',
        'gp',
        'rss',
        'pin',
        'ins',
        'apple',
        'icloud',
        'skype',
        'email',
       
        'meta_description_en','meta_description_fr','meta_description_ar','meta_description_it',
        'meta_keyword_en','meta_keyword_fr','meta_keyword_it','meta_keyword_ar',
        'meta_title_en','meta_title_ar','meta_title_it','meta_title_fr',
        'business_num',
        'lon',
        'lat',
        'blogbg',
        'blog_title_en','blog_title_fr','blog_title_it','blog_title_ar',
        'blog_desc_en','blog_desc_fr','blog_desc_it','blog_desc_ar',
        'gallerybg',
        'gallery_title_en','gallery_title_ar','gallery_title_it','gallery_title_fr',
        'departments_num',
        'mail_to',
        'insurance_num',
        'categorybg',
        'cat_bg_title_en','cat_bg_title_ar','cat_bg_title_fr','cat_bg_title_it',
        'cat_bg_desc_en','cat_bg_desc_ar','cat_bg_desc_fr','cat_bg_desc_it',
        'information_desc', 
        'information_desc_ar',
        'contactbg','map'
    
    
    );


    /**
     * [setImageAttribute]
     * @return [uplode and create or update one image to service] [to user]
     */



    // footer logo images
    public function setFooterlogoAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['footerlogo'] = $name;
        }
    }

    public function setFooterlogoarAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['footerlogoar'] = $name;
        }
    }


    public function setFooterlogoitAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['footerlogoit'] = $name;
        }
    }

    public function setFooterlogofrAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['footerlogofr'] = $name;
        }
    }









//  ====================  header logo====================

    public function setHeaderlogoAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['headerlogo'] = $name;

        }

    }

    public function setHeaderlogoarAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['headerlogoar'] = $name;

        }

    }


    public function setHeaderlogoitAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['headerlogoit'] = $name;

        }



    }



    public function setHeaderlogofrAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['headerlogofr'] = $name;

        }


    }

//    =============================================================

//category background

    public function setCategorybgAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['categorybg'] = $name;
        }
    }


//    =====================================================================

//blog background
    public function setBlogbgAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['blogbg'] = $name;
        }
    }


//=========================================================================

//contact background


    public function setContactbgAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['contactbg'] = $name;
        }
    }


//=========================================================================



//gallery background


    public function setGallerybgAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/photo/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['gallerybg'] = $name;
        }
    }


//=========================================================================
   
    public function setAboutusbgAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/aboutgallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['aboutusbg'] = $name;
        }
    }
    public function setAboutusimageAttribute($image) {
        if ($image) {
            $dest = 'admin-assets/images/aboutgallery/';
            $name = str_random(6) . '_' . $image->getClientOriginalName();
            $image->move($dest, $name);
            $this->attributes['aboutusimage'] = $name;
        }
    }
    
     

}
