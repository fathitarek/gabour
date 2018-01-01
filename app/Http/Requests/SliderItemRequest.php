<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SliderItemRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'slider_id' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please provide a english item name',
            'slider_id.required' => 'Please select the related slider'
        ];
    }

}
