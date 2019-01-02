<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdsRequest extends Request
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

                    'title' => 'required|min:3',
                    'title_ar' => 'required|min:3',
                    'title_fr' => 'required|min:3',
                    'title_it' => 'required|min:3',
                    'image' => 'required|image',
                  

                );
            }
            case 'PUT': {
                return array();
            }
            case 'PATCH': {
                return array(
                    'title' => 'required|min:3',
                    'title_ar' => 'required|min:3',
                    'title_fr' => 'required|min:3',
                    'title_it' => 'required|min:3',
//                    'image' => 'mimes:jpeg,bmp,png',
                
                );
            }
        }
}
}
