<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ServiceRequest extends Request
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


                    'slug' => 'required|unique:services,slug',
                    'meta_title'=>'required',
                    'meta_description'=>'required',
                    'meta_keyword'=>'required',
                    'page_title'=>'required',
                  

                );
            }
            case 'PUT': {
                return array();
            }
            case 'PATCH': {
                return array(


                    'meta_title'=>'required',
                    'meta_description'=>'required',
                    'meta_keyword'=>'required',
                    'page_title'=>'required',
                
                );
            }
        }
}
}
