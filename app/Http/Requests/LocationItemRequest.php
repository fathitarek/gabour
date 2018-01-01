<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LocationItemRequest extends Request {

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
        return [
            'name_en' => 'required',
            'name_ar' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'address_en' => 'required',
            'address_ar' => 'required',
            'city_id' => 'required',
            'location_category_id' => 'required',
        ];
    }

    public function messages() {
        return [
            'name_en.required' => 'Please provide a location category  in english',
            'name_ar.required' => 'Please provide a location category in arabic',
            'lat.required' => 'Please provide a latitude',
            'long.required' => 'Please provide a longitude',
            'address_en.required' => 'Please provide a address_en',
            'address_ar.required' => 'Please provide a address_ar',
            'website_id.required' => 'Please provide a website ',
            'location_category_id.required' => 'Please provide a location category',
        ];
    }

}
