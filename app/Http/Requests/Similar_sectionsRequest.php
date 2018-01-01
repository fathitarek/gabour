<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Similar_sectionsRequest extends Request {

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
        /*return [
            'image_en' => 'required|mimes:jpeg,png',
            'image_ar' => 'required|mimes:jpeg,png',
            'title_en' => 'required',
            'title_ar' => 'required',
            'category'=>'required',
            'pdf_en'=>'mimes:pdf',
            'pdf_ar'=>'mimes:pdf',
            'website_id' => 'required',
        ];
        */
          switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                 return [
            'image_en' => 'required|mimes:jpeg,png',
            'image_ar' => 'required|mimes:jpeg,png',
            'title_en' => 'required',
            'title_ar' => 'required',
            'category'=>'required',
            'pdf_en'=>'mimes:pdf|max:10000',
            'pdf_ar'=>'mimes:pdf|max:10000',
            'website_id' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                 return [
            //'image_en' => 'required|mimes:jpeg,png',
           // 'image_ar' => 'required|mimes:jpeg,png',
            'title_en' => 'required',
            'title_ar' => 'required',
            'category'=>'required',
            'pdf_en'=>'mimes:pdf|max:5000',
            'pdf_ar'=>'mimes:pdf|max:5000',
            'website_id' => 'required',
        ];
            }
            default:break;
        }
	
    }
    
    public function messages() {
        return [
            'image_en.required' => 'Please provide a Image in english [png, jpeg]',
            'image_ar.required' => 'Please provide a Image in arabic [png, jpeg]',
            'title_en.required' => 'Please provide a Title in english',
            'title_ar.required' => 'Please provide a Title in arabic',
        ];
    }

}
