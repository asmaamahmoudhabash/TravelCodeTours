<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GalleryRequest extends Request
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

                    'photo_Alt_en' => 'required|min:3',
                    'slug' => 'required|unique:gallery,slug',

                    'mainphoto' => 'required|image'

                );
            }
            case 'PUT': {
                return array();
            }
            case 'PATCH': {
                return array(

                    'photo_Alt_en' => 'required|min:3',
                    
                     'mainphoto' => 'image',
                
                );
            }
        }
}
}
