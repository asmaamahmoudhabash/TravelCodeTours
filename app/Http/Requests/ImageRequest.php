<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ImageRequest extends Request
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

                    'tour_id' => 'required',
                     'image' => 'required|mimes:jpeg,bmp,png',

                );
            }
            case 'PUT': {
                return array();
            }
            case 'PATCH': {
                return array(

                    'tour_id' => 'required',
                    'image' => 'mimes:jpeg,bmp,png',
                
                );
            }
        }
}
}
