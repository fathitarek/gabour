<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MenuItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Website;
use App\Menu;
use Illuminate\Http\Request;

class MenuItemController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index($selected_website)
    {
        $selected_website_id=Website::latest()->where('name',$selected_website)->get();
        $records = MenuItem::oldest()->where('website_id',$selected_website_id[0]['id'])->paginate(10);
        return view('Admin.'.$selected_website.'.menu_items.index', compact('records'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create($selected_website) {
        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'name',$selected_website);
        $selected_website_id=$hidden_selected_website[0]->id;
        $menus = Menu::latest()->where('published', '1')->where('website_id',$selected_website_id)->lists('display_name', 'id');
        $menu_items = MenuItem::latest()->where('published', '1')->where('website_id',$selected_website_id)->lists('display_name', 'id');
        return view('Admin.'.$selected_website.'.menu_items.create', compact('selected_website_id','menus','menu_items'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$request['website_id']);
        $request = setCheckbox($request, 'published');
        $input = $request->all();

        $destination = public_path().'/'.$hidden_selected_website[0]->name.'/images/menu_items'; // upload path

        if(!is_null(Input::file('image_on'))){
            $file = Input::file('image_on')->getClientOriginalName();
            $input['image_on'] = $file;
            $file1 = Input::file('image_on');
            $uploadSuccess = $file1->move($destination, $file);
            if($uploadSuccess){
            }else {
                flash()->error( 'uploaded file failed','important');
                return redirect(action($this->thisName().'@create'));
            }
        }

        if(!is_null(Input::file('image_off'))){
            $file = Input::file('image_off')->getClientOriginalName();
            $input['image_off'] = $file;
            $file1 = Input::file('image_off');
            $uploadSuccess = $file1->move($destination, $file);
            if($uploadSuccess){
            }else {
                flash()->error( 'uploaded file failed','important');
                return redirect(action($this->thisName().'@create'));
            }
        }
        $menu_item = new MenuItem($input);
        Auth::user()->componentTemplates()->save($menu_item);
        flash('Menu Item added successfully!');
        $selected_website = $menu_item->website->name;
        return redirect('/Admin/' . $selected_website . '/menu_items');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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
    public function edit($selected_website,$id) {
        $record = MenuItem::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $menus = Menu::latest()->where('published', '1')->where('website_id',$record->website->id)->lists('display_name', 'id');
        $menu_items = MenuItem::latest()->where('published', '1')->where('website_id',$record->website->id)->lists('display_name', 'id');
        return view('Admin.'.$selected_website.'.menu_items.edit', compact('record', 'website','menus','menu_items'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(Request $request,$id)
    {
        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$request['website_id']);

        $menu_item = MenuItem::findOrFail($id);
        $menu_item = updateCheckbox($request, $menu_item, 'published');
        $input = $request->all();
        $destination = public_path().'/'.$hidden_selected_website[0]->name.'/images/menu_items'; // upload path

        if(!is_null(Input::file('image_on'))){
            $file = Input::file('image_on')->getClientOriginalName();
            $input['image_on'] = $file;
            $file1 = Input::file('image_on');
            $uploadSuccess = $file1->move($destination, $file);
            if($uploadSuccess){
            }else {
                flash()->error( 'uploaded file failed','important');
                return redirect(action($this->thisName().'@create'));
            }
        }

        if(!is_null(Input::file('image_off'))){
            $file = Input::file('image_off')->getClientOriginalName();
            $input['image_off'] = $file;
            $file1 = Input::file('image_off');
            $uploadSuccess = $file1->move($destination, $file);
            if($uploadSuccess){
            }else {
                flash()->error( 'uploaded file failed','important');
                return redirect(action($this->thisName().'@create'));
            }
        }
        $menu_item->update($input);
        Auth::user()->menuItems()->save($menu_item);
        $selected_website=$menu_item->website->name;
        flash()->success('Menu Item Updated successfully!');
        return redirect('/Admin/'.$selected_website.'/menu_items');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id) {
        $record = MenuItem::findOrFail($id);
        flash()->success('Template deleted successfully!');
        $selected_website = $record->website->name;
        $record->delete();
        return redirect('/Admin/' . $selected_website . '/menu_items');
    }

}
