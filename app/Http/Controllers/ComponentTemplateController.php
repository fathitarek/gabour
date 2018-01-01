<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\ComponentTemplate;
use App\Http\Requests\ComponentTemplateRequest;
use App\Website;

class ComponentTemplateController extends Controller {

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
        $records = ComponentTemplate::oldest()->where('website_id',$selected_website_id[0]['id'])->paginate(10);
        return view('Admin.'.$selected_website.'.component_templates.index', compact('records'));
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
        return view('Admin.'.$selected_website.'.component_templates.create', compact('selected_website_id'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(ComponentTemplateRequest $request)
    {
        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$request['website_id']);
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $destination = public_path().'/'.$hidden_selected_website[0]->name.'/images/components_previews'; // upload path

        if(!is_null(Input::file('preview'))){
            $file = Input::file('preview')->getClientOriginalName();
            $input['preview'] = $file;
            $file1 = Input::file('preview');
            $uploadSuccess = $file1->move($destination, $file);
            if($uploadSuccess){
            }else {
                flash()->error( 'uploaded file failed','important');
                return redirect(action($this->thisName().'@create'));
            }
        }

        $component_template = new ComponentTemplate($input);
        Auth::user()->componentTemplates()->save($component_template);
        flash('Component Template added successfully!');
        $selected_website = $component_template->website->name;
        return redirect('/Admin/' . $selected_website . '/component_templates');
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
        $record = ComponentTemplate::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        return view('Admin.'.$selected_website.'.component_templates.edit', compact('record', 'website'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ComponentTemplateRequest $request,$id)
	{
        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$request['website_id']);

        $component_template = ComponentTemplate::findOrFail($id);
        $component_template = updateCheckbox($request, $component_template, 'published');
        $input = $request->all();

        $destination = public_path().'/'.$hidden_selected_website[0]->name.'/images/components_previews'; // upload path

        if(!is_null(Input::file('preview'))){
            $file = Input::file('preview')->getClientOriginalName();
            $input['preview'] = $file;
            $file1 = Input::file('preview');
            $uploadSuccess = $file1->move($destination, $file);
            if($uploadSuccess){
            }else {
                flash()->error( 'uploaded file failed','important');
                return redirect(action($this->thisName().'@create'));
            }
        }
        $component_template->update($input);
        Auth::user()->componentTemplates()->save($component_template);
        $selected_website=$component_template->website->name;
        flash()->success('Template Updates successfully!');
        return redirect('/Admin/'.$selected_website.'/component_templates');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
