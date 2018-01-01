<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SettingRequest extends Request {

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
            'text_en' => 'required',
            'text_ar' => 'required',
            'img_en' => 'mimes:jpeg,png',
            'img_ar' => 'mimes:jpeg,png',
        ];
    }

    public function messages() {
        return [
            'text_en.required' => 'Please provide a Text name in english',
            'text_ar.required' => 'Please provide a Text name in arabic',
        ];
    }

}
