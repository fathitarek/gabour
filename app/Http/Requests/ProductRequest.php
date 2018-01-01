<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
        /*  return [
          'title' => 'required',
          'model' => 'required',
          'note' => 'required',
          'link' => 'required',
          'image' => 'required|mimes:jpeg,png',
          'website_id' => 'required',
          ]; */

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'title' => 'required',
                        'model' => 'required',
                        'image' => 'required|mimes:jpeg,png',
                        'website_id' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'title' => 'required',
                        'model' => 'required',
                        'website_id' => 'required',
                    ];
                }
            default:break;
        }
    }

    public function messages() {
        return [
            'title.required' => 'Please provide a  title ',
            'model.required' => 'Please provide a model',
            'note.required' => 'Please provide a  note',
            'link.required' => 'Please provide a link',
            'image.required' => 'Please provide a image [png, jpeg]',
          //  'categgory.required' => 'Please provide a link',
        ];
    }

}
