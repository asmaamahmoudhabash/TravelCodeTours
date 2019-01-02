<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
    public function rules()
    {
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
                    'slug' => 'required|unique:categories,slug',
                    'meta_title' => 'required',
                    'meta_description' => 'required',
                    'meta_keyword' => 'required',
                    'page_title' => 'required',
                    'background' => 'image',
                    'bg_title_en' => 'max:60',
                    'bg_title_ar' => 'max:60',
                    'bg_title_fr' => 'max:60',
                    'bg_title_it' => 'max:60',
                    'bg_desc_en' => 'max:100',
                    'bg_desc_it' => 'max:100',
                    'bg_desc_fr' => 'max:100',
                    'bg_desc_ar' => 'max:100',





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
                    'slug' => 'required',
                    'meta_title' => 'required',
                    'meta_description' => 'required',
                    'meta_keyword' => 'required',
                    'page_title' => 'required',
                    'background' => 'image',
                    'bg_title_en' => 'max:60',
                    'bg_title_ar' => 'max:60',
                    'bg_title_fr' => 'max:60',
                    'bg_title_it' => 'max:60',
                    'bg_desc_en' => 'max:100',
                    'bg_desc_it' => 'max:100',
                    'bg_desc_fr' => 'max:100',
                    'bg_desc_ar' => 'max:100',



                );
            }
        }
    }
}
