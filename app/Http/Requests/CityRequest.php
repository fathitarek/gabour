<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CityRequest extends Request {

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
        ];
    }

    public function messages() {
        return [
            'name_en.required' => 'Please provide a city name in english',
            'name_ar.required' => 'Please provide a city name in arabic',
        ];
    }

}
