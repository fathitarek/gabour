<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Website;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller {

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
        $records = Menu::oldest()->where('website_id',$selected_website_id[0]['id'])->paginate(10);
        return view('Admin.'.$selected_website.'.menus.index', compact('records'));
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
        return view('Admin.'.$selected_website.'.menus.create', compact('selected_website_id'));
    }
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(MenuRequest $request)
    {
        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$request['website_id']);
        $request = setCheckbox($request, 'published');
        $input = $request->all();

        $menu = new Menu($input);
        Auth::user()->menus()->save($menu);
        flash('Component Template added successfully!');
        $selected_website = $menu->website->name;
        return redirect('/Admin/' . $selected_website . '/menus');
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
        $record = Menu::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        return view('Admin.'.$selected_website.'.menus.edit', compact('record', 'website'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(MenuRequest $request,$id)
    {
        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$request['website_id']);

        $menu = Menu::findOrFail($id);
        $menu = updateCheckbox($request, $menu, 'published');
        $input = $request->all();

        $menu->update($input);
        Auth::user()->menus()->save($menu);
        $selected_website=$menu->website->name;
        flash()->success('Menu Updated successfully!');
        return redirect('/Admin/'.$selected_website.'/menus');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id) {
        $record = Menu::findOrFail($id);
        flash()->success('Template deleted successfully!');
        $selected_website = $record->website->name;
        $record->delete();
        return redirect('/Admin/' . $selected_website . '/menus');
    }

}
