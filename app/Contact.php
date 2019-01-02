<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model 
{

    protected $table = 'contacts';
    public $timestamps = true;
    protected $fillable = array('cat_id','first_name','last_name','comment','email','seen');


    public function categories(){
        
      return  $this->hasMany('App\Category');
    }


   

}