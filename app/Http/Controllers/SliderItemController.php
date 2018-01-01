<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SliderItemRequest;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Website;
use App\SliderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class SliderItemController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function index($selected_website) {

        $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $sliders = Slider::where('published', '1')->where('website_id', $selected_website_id[0]['id'])->get();
        return view('Admin.' . $selected_website . '.slider_items.index', compact('sliders'));
    }

    public function create($selected_website) {
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
        $sliders = Slider::latest()->where('published', '1')->where('website_id', $selected_website_id)->lists('display_name', 'id');
        return view('Admin.' . $selected_website . '.slider_items.create', compact('sliders', 'website', 'selected_website_id'));
    }

    public function store(SliderItemRequest $request) {

        $website = new Website();
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $hidden_selected_website = searchForEloquentRecord($website, 'id', $input['website_id']);
        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/images'; // upload path

        if (!is_null(Input::file('img'))) {
            $file = Input::file('img')->getClientOriginalName();
            $input['img'] = $file;
            $file1 = Input::file('img');
            $uploadSuccess = $file1->move($destination, $file);
            if ($uploadSuccess) {
                
            } else {
                flash()->error('uploaded file failed', 'important');
                return redirect(action('SliderItemController@create'));
            }
        }
        $item = new SliderItem($input);
        Auth::user()->sliderItems()->save($item);
        flash('Slider Item added successfully!');
        $selected_website = $hidden_selected_website[0]->name;
        return redirect('/Admin/' . $selected_website . '/slider_items');
    }

    public function show($selected_website, $sid) {
        $slider = Slider::find($sid);
        $selected_website = $slider->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $slider_items = SliderItem::where('published', '1')
                        ->where('slider_id', $sid)->get();

        return view('Admin.' . $selected_website . '.slider_items.show', compact('slider', 'slider_items', 'website'));
    }

    public function edit($selected_website, $id) {
        $sliders = Slider::latest()->where('published', '1')->lists('name', 'id');
        $record = SliderItem::findOrFail($id);

        return view('Admin.' . $selected_website . '.slider_items.edit', compact('record', 'sliders'));
    }

    public function update(SliderItemRequest $request, $id) {
        $website = new Website();
        $item = SliderItem::findOrFail($id);
        $item = updateCheckbox($request, $item, 'published');
        $input = $request->all();
        $hidden_selected_website = searchForEloquentRecord($website, 'id', $input['website_id']);
        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/images'; // upload path


        if (!is_null(Input::file('img'))) {
            $file = Input::file('img')->getClientOriginalName();
            $input['img'] = $file;
            $file2 = Input::file('img');
            $uploadSuccess = $file2->move($destination, $file);
            if ($uploadSuccess) {
                
            } else {
                flash()->error('uploaded file failed', 'important');
                return redirect(action('SliderItemController@create'));
            }
        }
//		  $slider = $item->slider->name;
        $selected_website = $item->website->name;
        $item->update($input);
        Auth::user()->sliderItems()->save($item);
        //flash('Website updated successfully!');
        return redirect('/Admin/' . $selected_website . '/slider_items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $record = SliderItem::find($id);
        $selected_website = $record->website->name;
        $record->delete();
        flash()->success('Item deleted successfully!');
        return redirect('/Admin/' . $selected_website . '/slider_items');
    }

}
