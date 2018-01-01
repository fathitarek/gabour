<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'message.required' => 'Message is required',
        ];
    }

}
