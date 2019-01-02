<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class MainRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
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
            

                    );
                }
            case 'PUT': {
                    return array(
                        'logo' => 'image',
                        'bg' => 'image','email'=>'email',
                        'photo' => 'mimes:jpeg,bmp,png',
                                                 'aboutusphoto' => 'mimes:jpeg,bmp,png',



                         );
                }
            case 'PATCH': {
                    return array(
                        'name' => 'required|min:3',
                        'username' => 'required|min:3',
                        'password' => 'confirmed|min:4',
                        'email' => 'required|email|unique:admins,email,' . $this->route('admin'),
                        'address' => 'required',
                        'address_ar' => 'required',
                        'image' => 'mimes:jpeg,bmp,png',
                         'logo' => 'mimes:jpeg,bmp,png',
                        'phone' => 'required|numeric|digits_between:5,15|unique:admins,phone,' . $this->route('admin'),
                        'status' => 'required',
                        'aboutusphoto' => 'mimes:jpeg,bmp,png',
                        'contact_bg' => 'image',


                    );
                }
        }
    }

}
