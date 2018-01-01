<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Template;
use App\Http\Requests\TemplateRequest;
use App\Website;

class TemplateController extends Controller {


    public function __construct() {
        $this->middleware('auth');
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function fetchTemplateSlots(Request $request,$id){
        if($request->ajax()) {
            $records = Template::oldest()->where('id',$id)->get();
            return [
                'slots' => $records
            ];
        }
        $records = Template::oldest()->where('id',$id)->get();
        return $records;
    }
    public function index($selected_website)
	{
        $selected_website_id=Website::latest()->where('name',$selected_website)->get();
        $records = Template::oldest()->where('website_id',$selected_website_id[0]['id'])->paginate(10);
        return view('Admin.'.$selected_website.'.templates.index', compact('records'));
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
        return view('Admin.'.$selected_website.'.templates.create', compact('website','selected_website_id'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(TemplateRequest $request)
    {
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $template = new Template($input);
        Auth::user()->templates()->save($template);
        flash('Template added successfully!');
        $selected_website = $template->website->name;
        return redirect('/Admin/' . $selected_website . '/templates');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request,$id)
	{
        $records = Template::select('slots')->where('id',$id)->get();
        $splitted = explode(",", $records[0]['slots']);
        if($request->ajax()) {
            return [
                'slots' => $splitted
            ];
        }
        return $splitted;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($selected_website,$id) {
        $record = Template::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        return view('Admin.'.$selected_website.'.templates.edit', compact('record', 'website'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(TemplateRequest $request, $id) {
        $template = Template::findOrFail($id);
        $template = updateCheckbox($request, $template, 'published');
        $input = $request->all();
        $template->update($input);
        Auth::user()->templates()->save($template);
        $selected_website=$template->website->name;
        flash()->success('Template Updates successfully!');
        return redirect('/Admin/'.$selected_website.'/templates');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $record = Template::findOrFail($id);
        flash()->success('Template deleted successfully!');
        $selected_website=$record->website->name;
        $record->delete();
        return redirect('/Admin/'.$selected_website.'/templates');
	}

}
