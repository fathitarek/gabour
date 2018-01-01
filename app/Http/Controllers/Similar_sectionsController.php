<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Similar_sectionsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Similar_sections;
use App\Website;
use File;
use League\Flysystem\Filesystem;

class Similar_sectionsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    protected function thisName() {
        return "Similar_sectionsController";
    }

    public function uploadFile($field_name, $destination) {
        if (!is_null(Input::file($field_name))) {
            $file = Input::file($field_name)->getClientOriginalName();

            $input[$field_name] = $file;

            $file1 = Input::file($field_name);

            $uploadSuccess = $file1->move($destination, $file);
            return $file;
        } else {
            return 0;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($selected_website) {
        $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $records = Similar_sections::oldest()->where('website_id', $selected_website_id[0]['id'])->orderBy('category','desc')->paginate(12);
        return view('Admin.' . $selected_website . '.similar_sections.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create_the_benefits($selected_website) {
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
        return view('Admin.' . $selected_website . '.similar_sections.create_the_benefits', compact('website', 'selected_website_id'));
    }

    public function create_value_parts_leaflet_download($selected_website) {
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
        return view('Admin.' . $selected_website . '.similar_sections.create_value_parts_leaflet_download', compact('website', 'selected_website_id'));
    }

    public function create_genuine_accessories_leaflet_download($selected_website) {
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
        return view('Admin.' . $selected_website . '.similar_sections.create_genuine_accessories_leaflet_download', compact('website', 'selected_website_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Similar_sectionsRequest $request) {
     // return   UploadedFile::getMaxFilesize();
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $hidden_selected_website = searchForEloquentRecord(new Website(), 'id', $input['website_id']);
        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/images'; // upload path
        $image_en = $this->uploadFile('image_en', $destination);
        $image_ar = $this->uploadFile('image_ar', $destination);
        $pdf_en = $this->uploadFile('pdf_en', $destination);
        $pdf_ar = $this->uploadFile('pdf_ar', $destination);
        $similar_sections = new Similar_sections($input);
        if (gettype($image_en) == 'string' && gettype($image_ar) == 'string') {
            if (gettype($pdf_en) == 'string') { $similar_sections['pdf_en'] = $pdf_en;}
            if (gettype($pdf_ar) == 'string') { $similar_sections['pdf_ar'] = $pdf_ar;}

            // $input['image_en']=$image_en;
            $similar_sections['image_en'] = $image_en;
            $similar_sections['image_ar'] = $image_ar;
            Auth::user()->similar_sections()->save($similar_sections);
            flash('Similar Section added successfully!');
            $selected_website = $similar_sections->website->name;
            return redirect('/Admin/' . $selected_website . '/similar_sections');
        } else {
            flash()->error('uploaded file failed', 'important');
            return redirect('/Admin/' . $selected_website . '/similar_sections');
            //return "false";
        }
        
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
    /*

     * public function edit($selected_website,$id) {
      $record = City::findOrFail($id);
      $selected_website = $record->website->name;
      $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
      return view('Admin.'.$selected_website.'.city.edit', compact('record', 'website'));
      }
     *      */
    public function ay($selected_website, $id) {
        $record = Similar_sections::findOrFail($id);
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
    }

    public function edit_the_benefits($selected_website, $id) {
        //$this->ay($selected_website, $id);
        $record = Similar_sections::findOrFail($id);
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
        return view('Admin.' . $selected_website . '.similar_sections.edit_the_benefits', compact('record', 'selected_website_id'));
    }

    public function edit_value_parts_leaflet_download($selected_website, $id) {
        $record = Similar_sections::findOrFail($id);
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
        return view('Admin.' . $selected_website . '.similar_sections.edit_value_parts_leaflet_download', compact('record', 'selected_website_id'));
    }

    public function edit_genuine_accessories_leaflet_download($selected_website, $id) {
        $record = Similar_sections::findOrFail($id);
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
        return view('Admin.' . $selected_website . '.similar_sections.edit_genuine_accessories_leaflet_download', compact('record', 'selected_website_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Similar_sectionsRequest $request, $id) {
        $similar_sections = Similar_sections::findOrFail($id);
        $similar_sections = updateCheckbox($request, $similar_sections, 'published');
        $input = $request->all();
        $hidden_selected_website = searchForEloquentRecord(new Website(), 'id', $input['website_id']);
        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/images'; // upload path
        
        
        if(!is_null(Input::file('image_en'))){
        $image_en = $this->uploadFile('image_en', $destination);
       // return $similar_sections['image_en'].$image_en ;
        if (gettype($image_en) == 'string'){$input['image_en'] = $image_en;}
        }
        if(!is_null(Input::file('image_ar'))){
          $image_ar = $this->uploadFile('image_ar', $destination);
         if (gettype($image_ar) == 'string'){$input['image_ar'] = $image_ar;}
        }
        if(!is_null(Input::file('pdf_en'))){
        $pdf_en = $this->uploadFile('pdf_en', $destination);
         if (gettype($pdf_en) == 'string'){$input['pdf_en'] = $image_en;}
        }
        if(!is_null(Input::file('pdf_ar'))){
        $pdf_ar = $this->uploadFile('pdf_ar', $destination);
         if (gettype($pdf_ar) == 'string'){$input['pdf_ar'] = $pdf_ar;}
        }
        //$similar_sections = new Similar_sections($input);
        
        
//        if (gettype($image_en) == 'string' && gettype($image_ar) == 'string') {
//            if (gettype($pdf_en) == 'string') { $similar_sections['pdf_en'] = $pdf_en;}
//            if (gettype($pdf_ar) == 'string') { $similar_sections['pdf_ar'] = $pdf_ar;}
//        
//            // $input['image_en']=$image_en;
//            $similar_sections['image_en'] = $image_en;
//            $similar_sections['image_ar'] = $image_ar;
//        }
        
        
        //return $similar_sections;
        $similar_sections->update($input);
       // Auth::user()->similar_sections()->save($similar_sections);
        $selected_website = $similar_sections->website->name;
            return redirect('/Admin/' . $selected_website . '/similar_sections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $record = Similar_sections::findOrFail($id);
        flash()->success('Similar sections deleted successfully!');
        $selected_website = $record->website->name;
        $record->delete();
        return redirect('/Admin/' . $selected_website . '/similar_sections');
    }

}
