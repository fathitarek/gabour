<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\ComponentTemplate;
use App\ComponentData;
use App\Http\Requests\ComponentTemplateRequest;
use App\Website;

class ComponentDataController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function listComponentDatas(Request $request,$selected_website){
        $selected_website_id=Website::latest()->where('name',$selected_website)->get();
        $records = ComponentData::oldest()->where('website_id',$selected_website_id[0]['id'])->get();
//        $splitted = explode(",", $records[0]['slots']);
        if($request->ajax()) {
            return [
                'component_datas' => $records
            ];
        }
        return [
            'component_datas' => $records
        ];
    }
    public function index($selected_website)
    {
        $selected_website_id=Website::latest()->where('name',$selected_website)->get();
        $records = ComponentData::oldest()->where('website_id',$selected_website_id[0]['id'])->paginate(10);
        return view('Admin.'.$selected_website.'.component_datas.index', compact('records','component_templates'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
		//


    public function create($selected_website,Request $request) {
        $website=new Website();
        $hidden_selected_website=searchForEloquentRecord($website,'name',$selected_website);
        $selected_component_template='';
        if(isset($request['component_template_id'])&&($request['component_template_id']!='')){
            $selected_component_template=ComponentTemplate::findOrFail($request['component_template_id']);
        }
        $component_templates = ComponentTemplate::oldest()->where('website_id',$hidden_selected_website[0]['id'])->where('published', '1')->lists('name', 'id');
        $selected_website_id=$hidden_selected_website[0]->id;
        return view('Admin.'.$selected_website.'.component_datas.create', compact('selected_website_id','component_templates','selected_component_template'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $website=new Website();
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$input['website_id']);
        foreach($input as $key => $value){
            if(starts_with($key,'file')){

                $destination = public_path().'/'.$hidden_selected_website[0]['name'].'/uploads'; // upload path
                if(!is_null(Input::file($key))){
                    $filename = Input::file($key)->getClientOriginalName();
                    $input[$key]=$filename;
                    $file = Input::file($key);
                    $uploadSuccess = $file->move($destination, $filename);
                    if($uploadSuccess){

                    }
                    else {
                        flash()->error( 'uploaded file failed','important');
                        return redirect(action('ComponentDataController@create'));
                    }
                }
//                $slot_name=$input['slot_name_'.$components_index];
//                $component_id=$input['component_name_'.$components_index];
//                $components[$slot_name]=$component_id;
//                $components_index++;
            }
        }


        $component_data = new ComponentData($input);
        $component_data['component_data']=json_encode($input);
        Auth::user()->componentDatas()->save($component_data);
        flash('Component Data added successfully!');
        $selected_website = $component_data->website->name;
        return redirect('/Admin/' . $selected_website . '/component_datas');
		//
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
        $record = ComponentData::findOrFail($id);

        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $component_templates = ComponentTemplate::oldest()->where('website_id',$record->website->id)->where('published', '1')->lists('name', 'id');
        $selected_website_id=$record->website->id;
        return view('Admin.'.$selected_website.'.component_datas.edit', compact('record', 'website','templates','selected_website_id','component_templates'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request ,$id)
	{
		//
        $website=new Website();
        $component_data = ComponentData::findOrFail($id);
        $component_data = updateCheckbox($request, $component_data, 'published');
        $input = $request->all();
        $hidden_selected_website=searchForEloquentRecord($website,'id',$input['website_id']);
        foreach($input as $key => $value){
            if(starts_with($key,'file')){

                $destination = public_path().'/'.$hidden_selected_website[0]['name'].'/uploads'; // upload path
                if(!is_null(Input::file($key))){
                    $filename = Input::file($key)->getClientOriginalName();
                    $input[$key]=$filename;
                    $file = Input::file($key);
                    $uploadSuccess = $file->move($destination, $filename);
                    if($uploadSuccess){

                    }
                    else {
                        flash()->error( 'uploaded file failed','important');
                        return redirect(action('ComponentDataController@create'));
                    }
                }
//                $slot_name=$input['slot_name_'.$components_index];
//                $component_id=$input['component_name_'.$components_index];
//                $components[$slot_name]=$component_id;
//                $components_index++;
            }
        }
        $input['component_data']="";
//        $component_data->update($input);
//        return json_encode($input);
        $component_data->update($input);
        $component_data->component_data=json_encode($input);
//        return  $component_data->component_data;
        Auth::user()->componentDatas()->save($component_data);

        $selected_website=$component_data->website->name;
        flash()->success('Component Data  Updates successfully!');
        return redirect('/Admin/'.$selected_website.'/component_datas');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $record = ComponentData::findOrFail($id);
        flash()->success('Component Data  deleted successfully!');
        $selected_website=$record->website->name;
        $record->delete();
        return redirect('/Admin/'.$selected_website.'/component_datas');
	}

}
