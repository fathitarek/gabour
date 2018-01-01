<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LocationItem;
use App\LocationCategory;
use App\Website;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\LocationItemRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\City;

class LocationItemController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    protected function thisName() {
        return "LocationItemController";
    }

    protected function thisDisplayName() {
        return "Location Item";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($selected_website) {
        $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $records = LocationItem::oldest()->where('website_id', $selected_website_id[0]['id'])->paginate(10);
        return view('Admin.' . $selected_website . '.location_item.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($selected_website) {
      //  return $selected_website;
     $website_id=   Website::latest()->where('name', $selected_website)->lists('id');
        //name_en act as text ,id act as value
    // return $website_id[0];
        $location_category = LocationCategory::latest()->where('published', '1')->lists('name_en', 'id');
        $city = City::latest()->where('published', '1')->where('website_id', $website_id[0])->lists('name_en', 'id');
        //return $city;
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();

        $selected_website_id = $hidden_selected_website[0]->id;

        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');

        return view('Admin.' . $selected_website . '.location_item.create', compact('location_category', 'website', 'selected_website_id', 'city'));
    }

    /**
     * Store a newly created resource in storage.

     * @return Response
     */
    public function store(LocationItemRequest $request) {
       // return $request;
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        //return $input;
        $location_item = new LocationItem($input);
        Auth::user()->locationItems()->save($location_item);
        flash('Location Item added successfully!');
        $selected_website = $location_item->website->name;

        //return redirect(action('LocationItemController@index'));
        return redirect('/Admin/' . $selected_website . '/locationsItem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($selected_website,$id) {
        $record = LocationItem::findOrFail($id);
        $selected_website=$record->website->name;
        $location_category = LocationCategory::latest()->where('published', '1')->lists('name_en', 'id');
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $city = City::latest()->where('published', '1')->lists('name_en', 'id');

        return view('Admin.'.$selected_website.'.location_item.edit', compact('record', 'location_category', 'website', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(LocationItemRequest $request, $id) {
        $location_item = LocationItem::findOrFail($id);
        $location_item = updateCheckbox($request, $location_item, 'published');
        $input = $request->all();
//        return $input;
        $location_item->update($input);
        Auth::user()->locationItems()->save($location_item);
         $selected_website=$location_item->website->name;

       // return redirect(action($this->thisName() . '@index'));
        return redirect('/Admin/'.$selected_website.'/locationsItem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $record = LocationItem::find($id);
        $selected_website = $record->website->name;
        $record->delete();
        flash()->success('Location Item deleted successfully!');
        return redirect('/Admin/' . $selected_website . '/locationsItem');
    }

    /*
      Export to Excel sheet

     */

    public function export($selected_website) {

        // $records="ah";
        // $breaks = array("<br />","<br>","<br/>");
        //->where('name', $selected_website)
            $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $records = LocationItem::oldest()->where('website_id', $selected_website_id[0]->id)->get();
        foreach ($records as $record) {
            $website_name = Website::findOrFail($record['website_id']);  //Find Website record in table Website
            $record['website_id'] = $website_name->title_en; //  get website name  from record

            $LocationCategory_name = LocationCategory::findOrFail($record['location_category_id']);  //Find LocationCategory record in table LocationCategory
            $record['location_category_id'] = $LocationCategory_name->name_en; //  get LocationCategory name from record

            $City_name = City::findOrFail($record['city_id']);  //Find City record in table LocationCategory
            $record['city_id'] = $City_name->name_en; //  get LocationCategory name from record

            $user_name = User::findOrFail($record['user_id']);  //Find User record in table User
            $record['user_id'] = $user_name->name;  //  get username from record
        }
        $data = array();
        $date = date('Y-m-d');
        $filename = $this->thisDisplayName() . '_' . $date;
        $sheetname = $date;
        exportToExcel($records, $filename, $sheetname);
    }

    public function import($selected_website,Request $request) {

        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $location = new LocationItem();

        $destination = public_path() . '/excel_imported_files'; // upload path
        if (!is_null(Input::file('file'))) {
            $file = Input::file('file')->getClientOriginalName();
            $input['file'] = $file;
            $file1 = Input::file('file');
            $uploadSuccess = $file1->move($destination, $file);

            if ($uploadSuccess) {
                importExcelFile($destination, $file, $location, $this->thisName());
            } else {
                flash()->error('uploaded file failed', 'important');
                return redirect(action($this->thisName() . '@index'));
            }
        }
        flash()->success('Records updated successfully!');
        //return redirect(action($this->thisName() . '@index'));
                return redirect('/Admin/' . $selected_website . '/locationsItem');

    }

}
