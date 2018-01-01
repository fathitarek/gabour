<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class WebsitesRequest extends Request {

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
		return [
			'display_name_en' =>'required',
			'display_name_ar' =>'required',
			'view_folder' =>'required',
			'html_includes' =>'required',
			'title_en' =>'required',
			'title_ar' =>'required',
			'meta_en' =>'required',
			'description_en' =>'required',
			'meta_ar' =>'required',
			'description_ar' =>'required',


		];
	}
	public function messages()
    {
        return [
            'display_name_en.required' => 'Please provide a website name in english',
						'display_name_ar.required' => 'Please provide a website name in arabic',
						'view_folder' =>'Please provide a view folder',
						'html_includes' =>'Please add the html includes',
						'title_en' =>'Please provide a title in english',
						'title_ar' =>'Please provide a title in arabic',
						'meta_en' =>'Please provide a meta key in english',
						'description_en' =>'Please provide a meta description in english',
						'meta_ar' =>'Please provide a meta key in arabic',
						'description_ar' =>'Please provide a meta description in english',
						'logo_en' =>'Please upload the arabic logo',
						'logo_ar' =>'Please upload the english logo'
        ];
    }

}
