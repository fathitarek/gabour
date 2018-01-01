<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PageRequest extends Request {

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
        return [
            'name' => 'required',
            'title' => 'required',
            'template_id' => 'required',
        ];
    }

//    public function messages() {
//        return [
//            'name.required' => 'Please provide a Name',
//            'path.required' => 'Please provide a Path',
//        ];
//    }

}
