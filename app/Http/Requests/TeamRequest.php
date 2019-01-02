<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TeamRequest extends Request
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

                    'job_title_en' => 'required|min:3',
                    'image' => 'required|mimes:jpeg,bmp,png',
                    'name_en' => 'required|min:3',
                    'description_en' => 'required',
                  


                  

                );
            }
            case 'PUT': {
                return array();
            }
            case 'PATCH': {
                return array(

                    'job_title_en' => 'required|min:3',
                    'image' => 'mimes:jpeg,bmp,png',
                    'name_en' => 'required|min:3',
                    'description_en' => 'required',
                
                
                );
            }
        }
}
}
