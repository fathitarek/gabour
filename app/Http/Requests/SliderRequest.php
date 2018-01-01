<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SliderRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name' =>'required',
			'website_id' =>'required',
			'display_name' =>'required',
		];
	}
	public function messages()
		{
				return [
						'name.required' => 'Please provide a slider name',
						'website_id.required' => 'Please select the related website',
						'display_name.required' =>'Please provide a Display Name'
				];
		}

}
