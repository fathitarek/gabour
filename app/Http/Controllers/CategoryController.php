<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Website;

class CategoryController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    protected function thisName() {
        return "CategoryController";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($selected_website) {
        $selected_website_id=Website::latest()->where('name',$selected_website)->get();
        $records = Category::oldest()->where('website_id',$selected_website_id[0]['id'])->paginate(10);
        return view('Admin.'.$selected_website.'.category.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($selected_website) {
        $selected_website_id=Website::latest()->where('name',$selected_website)->get();
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website=Website::latest()->where('name', $selected_website)->get();
        $category = Category::latest()->where('published', '1')->where('category_id', '!=', '0')->where('website_id', $selected_website_id[0]['id'])->lists('name', 'id');
        $selected_website_id=$hidden_selected_website[0]->id;
        return view('Admin.'.$selected_website.'.category.create', compact('website','selected_website_id','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CategoryRequest $request) {

        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$request['website_id']);
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        if( $input['category_id']==''){$input['category_id']=0;}


        $destination = public_path().'/'.$hidden_selected_website[0]->name.'/images/categories'; // upload path

        if(!is_null(Input::file('small_image'))){
            $file = Input::file('small_image')->getClientOriginalName();
            $input['small_image'] = $file;
            $file1 = Input::file('small_image');
            $uploadSuccess = $file1->move($destination, $file);
            if($uploadSuccess){
            }else {
                flash()->error( 'uploaded file failed','important');
                return redirect(action($this->thisName().'@create'));
            }
        }

        if(!is_null(Input::file('big_image'))){
            $file = Input::file('big_image')->getClientOriginalName();
            $input['big_image'] = $file;
            $file1 = Input::file('big_image');
            $uploadSuccess = $file1->move($destination, $file);
            if($uploadSuccess){
            }else {
                flash()->error( 'uploaded file failed','important');
                return redirect(action($this->thisName().'@create'));
            }
        }
        $category = new Category($input);


        Auth::user()->categories()->save($category);
        flash('Category added successfully!');
        $selected_website=$category->website->name;
        return redirect('/Admin/'.$selected_website.'/categories');
//        return $this->index($selected_website);
//        return redirect(action('CategoryController@index'))->with('selected_website',$selected_website);

//        return redirect()->action(
//            'CategoryController@index', ['selected_website',$selected_website]
//        );
    }

    public function show($id) {
        //
    }
    public function edit($selected_website,$id) {
        $selected_website_id=Website::latest()->where('name',$selected_website)->get();
        $record = Category::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $category = Category::latest()->where('published', '1')->where('website_id', $selected_website_id[0]['id'])->lists('name', 'id');
        return view('Admin.'.$selected_website.'.category.edit', compact('record', 'website','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryRequest $request, $id) {
        $category = Category::findOrFail($id);
        $category = updateCheckbox($request, $category, 'published');
        $input = $request->all();
        if( $input['category_id']==''){$input['category_id']=0;}
        $category->update($input);
        Auth::user()->categories()->save($category);
        $selected_website=$category->website->name;
        return redirect('/Admin/'.$selected_website.'/categories');
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
        $record = Category::findOrFail($id);
        flash()->success('Category deleted successfully!');
        $selected_website=$record->website->name;
        $record->delete();
        return redirect('/Admin/'.$selected_website.'/categories');
//        return $this->index($selected_website);
        //return redirect(action('CategoryController@index'));
    }

}
