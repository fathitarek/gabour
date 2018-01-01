<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Setting;
use App\Website;
use File;
class SettingController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    protected function thisName() {
        return "SettingController";
    }
/*
    public function uploadFile($field_name, $destination) {
        if (!is_null(Input::file($field_name))) {
            $file = Input::file($field_name)->getClientOriginalName();
            $input[$field_name] = $file;
            $file1 = Input::file($field_name);
            $uploadSuccess =$file1->move($destination, $file);           
          //$uploadSuccess = $file1->move($destination, $file);
            return $file;
        } else {
            return false;
        }
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($selected_website) {
        $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $records = Setting::oldest()->where('website_id', $selected_website_id[0]['id'])->paginate(10);
        return view('Admin.' . $selected_website . '.setting.index', compact('records'));
    }




    public function edit($selected_website, $id) {
        $record = Setting::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        return view('Admin.' . $selected_website . '.setting.edit', compact('record', 'website'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(SettingRequest $request, $id) {
        $setting = Setting::findOrFail($id);
        $setting = updateCheckbox($request, $setting, 'published');
        $input = $request->all();
        // $setting = update($input);
      //  return $request->img_en;
        $hidden_selected_website = searchForEloquentRecord(new Website(), 'id', $input['website_id']);
        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/images'; // upload path
       // $img_en = $this->uploadFile('img_en', $destination);
       // $img_ar = $this->uploadFile('img_ar', $destination);

        /* if(!is_null(Input::file('img_en'))){
          $img_en = $this->uploadFile('img_en', $destination);


          } */

      /*  if (!is_null(Input::file('img_ar'))) {

            if (gettype($img_ar) == 'string') {
                $img_ar = $this->uploadFile('img_ar', $destination);
                // $setting['img_en'] = $img_en;
                $setting['img_ar'] = $img_ar;
            }
        }*/

        /*if (!is_null(Input::file('img_en'))) {

            if (gettype($img_en) == 'string') {
                $img_en = $this->uploadFile('img_en', $destination);
                $setting['img_en'] = $img_en;
                //$setting['img_ar'] = $img_ar;
            }
        }*/

        /* if (gettype($img_en) == 'string' && gettype($img_ar) == 'string') {

          $setting['img_en'] = $img_en;
          $setting['img_ar'] = $img_ar;
          } */

//        if (!is_null(Input::file('img_en'))) {
//            $file = Input::file('img_en')->getClientOriginalName();
//            $input['img_en'] = $file;
//            $file1 = Input::file('img_en');
//            $uploadSuccess = $file1->move($destination, $file);
//            if ($uploadSuccess) {
//                
//            } else {
//                flash()->error('uploaded file failed', 'important');
//        return redirect('/Admin/' . $selected_website . '/setting');
//            }
//        }
        
        if(!is_null(Input::file('img_en'))){
        $img_en = uploadFile('img_en', $destination);
       // return $similar_sections['image_en'].$image_en ;
        if (gettype($img_en) === 'string'){$input['img_en'] = $img_en;}
        }
        
         if(!is_null(Input::file('img_ar'))){
        $img_ar = uploadFile('img_ar', $destination);
       // return $similar_sections['image_en'].$image_en ;
        if (gettype($img_ar) === 'string'){$input['img_ar'] = $img_ar;}
        }
        
     /*   
        if (!is_null(Input::file('img_ar'))) {
            $file = Input::file('img_ar')->getClientOriginalName();
            $input['img_ar'] = $file;
            $file1 = Input::file('img_ar');
            $uploadSuccess = $file1->move($destination, $file);
            if ($uploadSuccess) {
                
            } else {
                flash()->error('uploaded file failed', 'important');
        return redirect('/Admin/' . $selected_website . '/setting');
            }
        }
        */
        
        
        Auth::user()->settings()->save($setting);
        $setting->update($input);
        flash('Seeting edited successfully!');
        $selected_website = $setting->website->name;
        return redirect('/Admin/' . $selected_website . '/setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $record = Setting::findOrFail($id);
        flash()->success('Setting deleted successfully!');
        $selected_website = $record->website->name;
        $record->delete();
        return redirect('/Admin/' . $selected_website . '/setting');
//        return $this->index($selected_website);
        //return redirect(action('CityController@index'));
    }

}
