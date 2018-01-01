<?php

/**
 * Auther : Fathi Tarek
 * Date 27-4-2017
 * description:  location category in maps such as:showrooms
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LocationCategory;
use Illuminate\Http\Request;
use App\Http\Requests\LocationCategoryRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;

class LocationCategoryController extends Controller {

     public function __construct(){
        $this->middleware('auth');
    }
    
    protected function thisName() {
        return "LocationCategoryController";
    }

    protected function thisDisplayName() {
        return "Location Category";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $records = LocationCategory::oldest()->get();
        return view('Admin.location_category.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('Admin.location_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(LocationCategoryRequest $request) {
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $location_category = new LocationCategory($input);
        Auth::user()->locationCategories()->save($location_category);
        flash('LocationCategory added successfully!');
        return redirect(action('LocationCategoryController@index'));
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
    public function edit($id) {
        $record = LocationCategory::findOrFail($id);
        return view('Admin.location_category.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(LocationCategoryRequest $request, $id) {
        $location_category = LocationCategory::findOrFail($id);
        $location_category = updateCheckbox($request, $location_category, 'published');
        $input = $request->all();
        $location_category->update($input);
        Auth::user()->locationCategories()->save($location_category);
        return redirect(action($this->thisName() . '@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $record = LocationCategory::find($id);
        $record->delete();
        flash()->success('Location Category deleted successfully!');
        return redirect(action('LocationCategoryController@index'));
    }

    /*
      Export to Excel sheet

     */

    public function export() {
        $records = LocationCategory::oldest()->get();

        foreach ($records as $record) { //Loop for get User Name
            //Find User record in table User
            $user_name = User::findOrFail($record['user_id']);
            $record['user_id'] = $user_name->name;   //  get username from record
        }
        //return $records;
        $data = array();
        $date = date('Y-m-d');
        $filename = $this->thisDisplayName() . '_' . $date;
        $sheetname = $date;
        exportToExcel($records, $filename, $sheetname);
    }

    public function import(Request $request) {
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $location = new LocationCategory();
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
        return redirect(action($this->thisName() . '@index'));
    }

}
