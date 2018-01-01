<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\WebsitesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Website;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class WebsiteController extends Controller {

	public function index()
	{
		$records = Website::latest()->orderBy('id')->get();
		return view('Admin.website.index',compact('records'));
	}

	protected function  thisName(){
			return "WebsiteController";
	}

	public function create()
	{
		return view('Admin.website.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(WebsitesRequest $request)
	{

		$request = setCheckbox($request,'published');
		$input   = $request->all();
		$destination = public_path().'/images'; // upload path

		if(!is_null(Input::file('logo_en'))){
				$file = Input::file('logo_en')->getClientOriginalName();
				$input['logo_en'] = $file;
				$file1 = Input::file('logo_en');
				$uploadSuccess = $file1->move($destination, $file);
				if($uploadSuccess){
				}else {
						flash()->error( 'uploaded file failed','important');
						return redirect(action($this->thisName().'@create'));
				}
		 }
		 if(!is_null(Input::file('logo_ar'))){
 				$file = Input::file('logo_ar')->getClientOriginalName();
 				$input['logo_ar'] = $file;
 				$file2 = Input::file('logo_ar');
 				$uploadSuccess = $file2->move($destination, $file);
 				if($uploadSuccess){
 				}else {
 						flash()->error( 'uploaded file failed','important');
 						return redirect(action('WebsiteController@create'));
 				}
 		 }
			$website = new Website($input);
			Auth::user()->websites()->save($website);
			flash('Website added successfully!');
			return redirect(action('WebsiteController@index'));
	}

	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$record = Website::findOrFail($id);
		return view('Admin.website.edit',compact('record'));
	}

	public function update(WebsitesRequest $request,$id)
	{
		$website = Website::findOrFail($id);
		$website = updateCheckbox($request,$website,'published');
		$input   = $request->all();
		$destination = public_path().'/images'; // upload path

		if(!is_null(Input::file('logo_en'))){
				$file = Input::file('logo_en')->getClientOriginalName();
				$input['logo_en'] = $file;
				$file1 = Input::file('logo_en');
				$uploadSuccess = $file1->move($destination, $file);
				if($uploadSuccess){
				}else {
						flash()->error( 'uploaded file failed','important');
						return redirect(action($this->thisName().'@create'));
				}
		 }
		 if(!is_null(Input::file('logo_ar'))){
				$file = Input::file('logo_ar')->getClientOriginalName();
				$input['logo_ar'] = $file;
				$file2 = Input::file('logo_ar');
				$uploadSuccess = $file2->move($destination, $file);
				if($uploadSuccess){
				}else {
						flash()->error( 'uploaded file failed','important');
						return redirect(action($this->thisName().'@create'));
				}
		 }
      $website->update($input);
			Auth::user()->websites()->save($website);
			//flash('Website updated successfully!');
			  return redirect(action($this->thisName().'@index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function destroy($id)
//	{
//		$record = Website::find($id);
//		$record->delete();
//		flash()->success('Website deleted successfully!');
//		return redirect(action('WebsiteController@index'));
//	}

}
