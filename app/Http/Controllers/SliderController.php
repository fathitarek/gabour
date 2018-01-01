<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SliderRequest;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Website;
use App\SliderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($selected_website) {

			$selected_website_id = Website::latest()->where('name',$selected_website)->get();
			$records = Slider::oldest()->where('website_id',$selected_website_id[0]['id'])->paginate(10);
			return view('Admin.'.$selected_website.'.sliders.index', compact('records'));
		}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	 public function create($selected_website) {
			 $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
			 $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();

			 $selected_website_id = $hidden_selected_website[0]->id;
			 return view('Admin.'.$selected_website.'.sliders.create', compact('website','selected_website_id'));
	 }

	public function store(SliderRequest $request)
	{
			$request = setCheckbox($request,'published');
			$input   = $request->all();
			print_r($input);
			//exit;
			$slider  = new Slider($input);
			Auth::user()->sliders()->save($slider);
			flash('Slider added successfully!');
			$selected_website = $slider->website->name;
			return redirect('/Admin/'.$selected_website.'/sliders');
	}

	public function show($id)
	{
		//
	}

	public function edit($selected_website,$id)
	{
    $record = Slider::findOrFail($id);
		$selected_website = $record->website->name;
		$website = Website::latest()->where('published', '1')->lists('title_en', 'id');

    $slider_items = SliderItem::latest()
		                            ->where('published','1')
																->where('slider_id', '=', $id)
																->lists('name','id');

    return view('Admin.'.$selected_website.'.sliders.edit', compact('record', 'website'));
	}

	public function update(SliderRequest $request,$id)
	{
		$slider  = Slider::findOrFail($id);
		$slider  = updateCheckbox($request,$slider,'published');
		$input   = $request->all();
		$slider->update($input);
		Auth::user()->sliders()->save($slider);
	  $selected_website = $slider->website->name;
		//flash('Slider updated successfully!');
		return redirect('/Admin/'.$selected_website.'/sliders');
	}

	public function destroy($id)
	{
		$record = Slider::find($id);
                 $selected_website = $record->website->name;
		$record->delete();
		flash()->success('Slider deleted successfully!');
		//return redirect(action('SliderController@index'));
                return redirect('/Admin/' . $selected_website . '/sliders');

	}

}
