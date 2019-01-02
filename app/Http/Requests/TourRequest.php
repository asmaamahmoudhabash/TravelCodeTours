<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TourRequest extends Request
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
//        dd( $this->id);
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return array();
            }
            case 'POST': {
                return array(







                   'short_cut_en'=>'required|max:100',
                    'short_cut_ar'=>'required|max:100',
                    'short_cut_fr'=>'required|max:100',
                    'short_cut_it'=>'required|max:100',
                    'inflight_features_en' => 'required',
                    'inflight_features_ar' => 'required',
                    'inflight_features_fr' => 'required',
                    'inflight_features_it' => 'required',
                    'place_en' => 'required',
                    'slug' => 'required|unique:tours',
                    'place_ar' => 'required',
                    'price' => 'required',
                    'taxes_fees_en' => 'required',

                    'type_en' => 'required',
                    'type_ar' => 'required',
                    'type_fr' => 'required',
                    'type_it' => 'required',
                    'air_line_en' => 'required',
                    'air_line_fr' => 'required',
                    'air_line_ar' => 'required',
                    'air_line_it' => 'required',
                    'fare_ar' => 'required',
                    'fare_en' => 'required',
                    'fare_fr' => 'required',
                    'fare_it' => 'required',
                    'has_offer' => 'required',
                    'category_id' => 'required',
                    'tag_id' => 'required',
                    'vedio' => 'required',
                    'cancelation_en' => 'required',
                    'change_en' => 'required',
                    'seats_paggages_ar' => 'required',
                    'seats_paggages_en' => 'required',
                    'seats_paggages_fr' => 'required',
                    'seats_paggages_it' => 'required',
                    'base_fare_en' => 'required',
                    'description_en' => 'required',
                    'description_ar' => 'required',
                    'description_it' => 'required',
                    'description_fr' => 'required',
                    'start_date_en' => 'required',
                    'final_date_en' => 'required',
                    'Kids' => 'required',
                    'adults' => 'required',
                    'meta_title'=>'required',
                    'meta_description'=>'required',
                    'meta_keyword'=>'required',
                    'page_title'=>'required',
                    'background'=>'image',




                );
            }
            case 'PUT': {
                return array();
            }
            case 'PATCH': {
                return array(
                    
              
                    'inflight_features_en' => 'required',
                    'inflight_features_ar' => 'required',
                    'inflight_features_fr' => 'required',
                    'inflight_features_it' => 'required',
                    'place_en' => 'required',
                    'place_ar' => 'required',
                    'price' => 'required',
                    'taxes_fees_en' => 'required',
                    'type_en' => 'required',
                    'type_ar' => 'required',
                    'type_fr' => 'required',
                    'type_it' => 'required',
                    'air_line_en' => 'required',
                    'air_line_fr' => 'required',
                    'air_line_ar' => 'required',
                    'air_line_it' => 'required',
                    'fare_ar' => 'required',
                    'fare_en' => 'required',
                    'fare_fr' => 'required',
                    'fare_it' => 'required',
                    'has_offer' => 'required',
                    'category_id' => 'required',
                    'tag_id' => 'required',
                    'vedio' => 'required',
                    'cancelation_en' => 'required',
                    'change_en' => 'required',
                    'seats_paggages_ar' => 'required',
                    'seats_paggages_en' => 'required',
                    'seats_paggages_fr' => 'required',
                    'seats_paggages_it' => 'required',
                    'base_fare_en' => 'required',
                    'description_en' => 'required',
                    'description_ar' => 'required',
                    'description_it' => 'required',
                    'description_fr' => 'required',
                    'start_date_en' => 'required',
                    'final_date_en' => 'required',
                    'Kids' => 'required',
                    'adults' => 'required',
                    'meta_title'=>'required',
                    'meta_description'=>'required',
                    'meta_keyword'=>'required',
                    'page_title'=>'required',
                    'background'=>'image',







                );
            }
        }
}
}
