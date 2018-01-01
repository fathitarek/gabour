<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\City;
use App\Website;

class CityController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    protected function thisName() {
        return "CityController";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($selected_website) {
        $selected_website_id=Website::latest()->where('name',$selected_website)->get();
        $records = City::oldest()->where('website_id',$selected_website_id[0]['id'])->paginate(10);
        return view('Admin.'.$selected_website.'.city.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($selected_website) {
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website=Website::latest()->where('name', $selected_website)->get();

        $selected_website_id=$hidden_selected_website[0]->id;
        return view('Admin.'.$selected_website.'.city.create', compact('website','selected_website_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CityRequest $request) {
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $city = new City($input);
        Auth::user()->cities()->save($city);
        flash('City added successfully!');
        $selected_website=$city->website->name;
        return redirect('/Admin/'.$selected_website.'/cities');
//        return $this->index($selected_website);
//        return redirect(action('CityController@index'))->with('selected_website',$selected_website);

//        return redirect()->action(
//            'CityController@index', ['selected_website',$selected_website]
//        );
    }

    public function show($id) {
        //
    }
    public function edit($selected_website,$id) {
        $record = City::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        return view('Admin.'.$selected_website.'.city.edit', compact('record', 'website'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(CityRequest $request, $id) {
        $city = City::findOrFail($id);
        $city = updateCheckbox($request, $city, 'published');
        $input = $request->all();
        $city->update($input);
        Auth::user()->cities()->save($city);
        $selected_website=$city->website->name;
        return redirect('/Admin/'.$selected_website.'/cities');
//        return $this->index($selected_website);
//        return redirect(action($this->thisName() . '@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $record = City::findOrFail($id);
        flash()->success('City deleted successfully!');
        $selected_website=$record->website->name;
        $record->delete();
        return redirect('/Admin/'.$selected_website.'/cities');
//        return $this->index($selected_website);
        //return redirect(action('CityController@index'));
    }

}
