<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request
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

                    'title_en' => 'required',
                    'title_ar' => 'required',
                    'title_it' => 'required',
                    'title_fr' => 'required',
                    'slug' => 'required|unique:news,slug',
                    'body_en' => 'required',
                    'body_ar' => 'required',
                    'body_it' => 'required',
                    'body_fr' => 'required',
                    'image' => 'required|mimes:jpeg,bmp,png',

                  

                );
            }
            case 'PUT': {
                return array();
            }
            case 'PATCH': {
                return array(

                    'title_en' => 'required',
                    'title_ar' => 'required',
                    'title_it' => 'required',
                    'title_fr' => 'required',
                    'body_en' => 'required',
                    'body_ar' => 'required',
                    'body_it' => 'required',
                    'body_fr' => 'required',
                    'image' => 'mimes:jpeg,bmp,png',



                );
            }
        }
}
}
