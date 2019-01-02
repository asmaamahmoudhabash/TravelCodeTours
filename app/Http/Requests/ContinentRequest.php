<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContinentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return array();
            }
            case 'POST': {
                return array(

                    'name_en' => 'required|min:3',
                    'name_ar' => 'required|min:3',
                    'name_fr' => 'required|min:3',
                    'name_it' => 'required|min:3',
                    'image_alt_en' => 'required',
                    'image_alt_ar' => 'required',
                    'image_alt_fr' => 'required',
                    'image_alt_it' => 'required',
                    'image' => 'required|mimes:jpeg,bmp,png',
                  


                  

                );
            }
            case 'PUT': {
                return array();
            }
            case 'PATCH': {
                return array(

                    'name_en' => 'required|min:3',
                    'name_ar' => 'required|min:3',
                    'name_fr' => 'required|min:3',
                    'name_it' => 'required|min:3',
                    'image_alt_en' => 'required',
                    'image_alt_ar' => 'required',
                    'image_alt_fr' => 'required',
                    'image_alt_it' => 'required',
                    'image' => 'mimes:jpeg,bmp,png',
                   
                
                );
            }
        }
}
}
