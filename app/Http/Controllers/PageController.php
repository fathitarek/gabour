<?php

namespace App\Http\Controllers;

use App\ComponentTemplate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Template;
use App\Page;
use App\Http\Requests\PageRequest;
use App\Website;
use App\City;
use App\ComponentData;
//use App\City;

class PageController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['except' => ['publicPage']]);
    }


    public function publicDevPage(Request $request,$selected_website,$page)
    {
        $hidden_selected_website=Website::latest()->where('name', $selected_website)->get();
        $selected_website_id=$hidden_selected_website[0]->id;
        $page=Page::latest()->where('name', $page)->where('website_id',$selected_website_id)->first();
        $page_components = json_decode($page['components'], true);
        foreach ($page_components as $key => $value) {
            $page[$key] = ComponentData::findOrFail($value);
            $page[$key]['component_data'] = json_decode($page[$key]['component_data'], true);

            $page[$key]['component_template'] = ComponentTemplate::findOrFail($page[$key]['component_data']['component_template_id']);
        }
        $brands = Website::latest()->where('published','1')->lists('name','id');
        $cities = City::latest()->where('published','1')->lists('name_en','id');
//        return view('public.' . $selected_website . '.templates.' . $page->template->path, compact('page','brands','cities'));

            $component_template=ComponentTemplate::findOrFail($page[$key]['component_data']['component_template_id']);
            $page[$key]['component_template'] = $component_template;
            $match_this=[];
            foreach (json_decode($component_template['component_structure'], true) as $index => $fields) {
                if(starts_with($index,'special_listing')){
                    foreach($fields as $f_index => $field)
                    {
                        if(starts_with($f_index,'where')){
                            $match_this[$field[0]]=$field[1];
                        }
                    }
                    $model_name = $fields['model'];
                    $model_name = '\\App\\'.$model_name;
                    $$model_name=$model_name::oldest()->where($match_this)->get();
                    $page[$key][$index]= $match_this;
                    $page[$key][$index."_data"]= $$model_name;
                }
            }
        if((isset($request['m']))&&($request['m']!='')){
            $model_name = $request['m'];
            $model_name = '\\App\\'.$model_name;
            $$model_name=$model_name::oldest()->where($match_this)->get();
            $page[$model_name]= $$model_name;
        }
//        return $page;
//        return $page['homepage_middle_section'];
//        if(isset($request['sc'])){
//            $sc_name = '\\App\\'.$request['sc'];
//            $sc1= $sc_name::oldest()->first();
//        }
//        $page['sc']=$sc1;

        return $page;
//        return view('public.'.$selected_website.'.templates.'.$page->template->path,compact('page'));
    }

    public function publicPage($selected_website,$page){
        $hidden_selected_website=Website::latest()->where('name', $selected_website)->get();
        $selected_website_id=$hidden_selected_website[0]->id;
        $page=Page::latest()->where('name', $page)->where('website_id',$selected_website_id)->first();
        $page_components=json_decode($page['components'],true);
      // return $page;
        foreach ($page_components as $key => $value) {
            $page[$key] = ComponentData::findOrFail($value);
            $page[$key]['component_data'] = json_decode($page[$key]['component_data'], true);
            $component_template=ComponentTemplate::findOrFail($page[$key]['component_data']['component_template_id']);
            $page[$key]['component_template'] = $component_template;
            $match_this=[];
            foreach (json_decode($component_template['component_structure'], true) as $index => $fields) {
                if(starts_with($index,'special_listing')){
                    foreach($fields as $f_index => $field)
                    {
                        if(starts_with($f_index,'where')){
                            $match_this[$field[0]]=$field[1];
                        }
                    }
                    $model_name = $fields['model'];
                    $model_name = '\\App\\'.$model_name;
                    $$model_name=$model_name::oldest()->where($match_this)->get();
                    $page[$key][$index]= $match_this;
                    $page[$key][$index."_data"]= $$model_name;
                }
            }
        }
        if((isset($_REQUEST['m']))&&($_REQUEST['m']!='')){

            $model_name = $_REQUEST['m'];

            $model_name = '\\App\\'.$model_name;
            $$model_name=$model_name::oldest()->where('name',$_REQUEST['item'])->get();
            $page[$_REQUEST['m']]= $$model_name;
        }
//        return $page;
//        return $page['homepage_middle_section'];
//        return $page;
//        $matchThese = ['published' => '1', 'lang' => $lang];
////        $menus=Menu::oldest()->where($matchThese)->get();
//        return $page['home_slider']['special_listing_1_data'][0]->sliderItems;
        return view('public.'.$selected_website.'.templates.'.$page->template->path,compact('page'));


    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($selected_website) {
        $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $records = Page::oldest()->where('website_id', $selected_website_id[0]['id'])->paginate(10);
        return view('Admin.' . $selected_website . '.pages.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($selected_website) {
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $selected_website_id = $hidden_selected_website[0]->id;
        $templates = Template::latest()->where('published', '1')->where('website_id', $selected_website_id)->lists('name', 'id');
        $component_datas = ComponentData::latest()->where('published', '1')->where('website_id', $selected_website_id)->lists('name', 'id');
        return view('Admin.' . $selected_website . '.pages.create', compact('website', 'selected_website_id', 'templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PageRequest $request) {
        $request = setCheckbox($request, 'published');
        $input = $request->all();

        $components_index = 0;
        $components = [];

        foreach ($input as $key => $value) {
            if (starts_with($key, 'slot_name_')) {
                $slot_name = $input['slot_name_' . $components_index];
                $component_id = $input['component_name_' . $components_index];
                $components[$slot_name] = $component_id;

                $components_index++;
            }
        }
        $input['components'] = json_encode($components);
        $page = new Page($input);
        Auth::user()->pages()->save($page);
        flash('Page added successfully!');
        $selected_website = $page->website->name;
        return redirect('/Admin/' . $selected_website . '/pages');
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
    public function edit($selected_website, $id) {
        $record = Page::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $templates = Template::latest()->where('published', '1')->where('website_id', $record->website->id)->lists('name', 'id');
        return view('Admin.' . $selected_website . '.pages.edit', compact('record', 'website', 'templates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(PageRequest $request, $id) {
        $page = Page::findOrFail($id);
        $page = updateCheckbox($request, $page, 'published');
        $input = $request->all();
        $page->update($input);
        Auth::user()->pages()->save($page);
        $selected_website = $page->website->name;
        flash()->success('Page Updates successfully!');
        return redirect('/Admin/' . $selected_website . '/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $record = Page::findOrFail($id);
        flash()->success('Template deleted successfully!');
        $selected_website = $record->website->name;
        $record->delete();
        return redirect('/Admin/' . $selected_website . '/pages');
    }

}
