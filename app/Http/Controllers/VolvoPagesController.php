<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use Request;
use Illuminate\Support\Facades\Request;
use App\City;
use App\LocationCategory;
use App\LocationItem;
use Illuminate\Support\Facades\DB;
use App\Menu;
use App\Setting;
use App\ComponentData;
class VolvoPagesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
 public function locations(Request $request) {
        // print_r($request);
        $website = DB::table('websites')->where('name','volvo_ce')->first();
       // return $website;
       // print_r($website);
        $cities = DB::table('cities')->where('website_id', $website->id)->select('id', 'name_en')->get();
        $locationCategories = LocationCategory::oldest()->select('id', 'name_en')->get();
        $menu_products = Menu::latest()->where('website_id', $website->id)->where('name','PRODUCTS')->where('published', '1')->first();          
        $locationCategories = LocationCategory::oldest()->select('id', 'name_en')->get();
        $component = ComponentData::latest()->where('website_id', $website->id)->where('name','main_menu')->where('published', '1')->first();          
//return $component;
        $settings=Setting::latest()->where('website_id', $website->id)->where('published', '1')->first();

$component=json_decode($component['component_data']);
//return $component;

   $small_component = ComponentData::latest()->where('website_id', $website->id)->where('name','small_menu')->where('published', '1')->first();          
//return $small_component;
$small_component=json_decode($small_component['component_data']);
//return $small_component;
        $menu_attachments = Menu::latest()->where('website_id', $website->id)->where('name','ATTACHMENTS')->where('published', '1')->first();
        $menu_parts = Menu::latest()->where('website_id', $website->id)->where('name','PARTS')->where('published', '1')->first();
        $menu_services = Menu::latest()->where('website_id', $website->id)->where('name','SERVICES')->where('published', '1')->first();
        $menu_aboutus = Menu::latest()->where('website_id', $website->id)->where('name','ABOUT US')->where('published', '1')->first();
        $menu_locations = Menu::latest()->where('website_id', $website->id)->where('name','LOCATIONS')->where('published', '1')->first();
        $menu_contactus = Menu::latest()->where('website_id', $website->id)->where('name','CONTACT US')->where('published', '1')->first();

        $footer_menu = Menu::latest()->where('website_id',$website->id)->where('name','footer')->where('published', '1')->first();
        //print_r($footer_menu);
        
        if (!isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && !isset($_REQUEST['website_id']))  {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_ce.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
        }
        
        
         if ($_REQUEST['city_id']==null && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $location_category_id=$_REQUEST['location_category_id'];
            $locations = LocationItem::where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            
             return view('public.volvo_ce.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
        }
        
        
         if (isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $city_id=$_REQUEST['city_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('website_id', $website_id)->get();
           
             return view('public.volvo_ce.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
        }
        
        
        // ideal case
        if (isset($_REQUEST['city_id']) && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $city_id = $_REQUEST['city_id'];
            $location_category_id = $_REQUEST['location_category_id'];
            $website_id = $_REQUEST['website_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            // $locations = $locations[0];
            return view('public.volvo_ce.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
//             return $locations;
            // return $locations->lat;
        } else {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_ce.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
        }
        


       
    }

     public function locations_trucks(Request $request) {
        // print_r($request);
        $website = DB::table('websites')->where('name','volvo_trucks')->first();
       // return $website;
       // print_r($website);
        $cities = DB::table('cities')->where('website_id', $website->id)->select('id', 'name_en')->get();
        $locationCategories = LocationCategory::oldest()->select('id', 'name_en')->get();
        $component = ComponentData::latest()->where('website_id', $website->id)->where('name','main_menu')->where('published', '1')->first();          
//return $component;
        $settings=Setting::latest()->where('website_id', $website->id)->where('published', '1')->first();

$component=json_decode($component['component_data']);
//return $component->name;
        $menu_products = Menu::latest()->where('website_id', $website->id)->where('name','trucks')->where('published', '1')->first();          
        //return $menu_products;
        $menu_news = Menu::latest()->where('website_id', $website->id)->where('name','news')->where('published', '1')->first();
        $menu_services = Menu::latest()->where('website_id', $website->id)->where('name','services_trucks')->where('published', '1')->first();
        $menu_aboutus = Menu::latest()->where('website_id', $website->id)->where('name','about_us')->where('published', '1')->first();
        $menu_locations = Menu::latest()->where('website_id', $website->id)->where('name','dealer_locator')->where('published', '1')->first();
       // $menu_contactus = Menu::latest()->where('website_id', $website->id)->where('name','news')->where('published', '1')->first();

        $footer_menu = Menu::latest()->where('website_id',$website->id)->where('name','footer_trucks')->where('published', '1')->first();
        //print_r($footer_menu);
        
        if (!isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && !isset($_REQUEST['website_id']))  {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_trucks.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
         if ($_REQUEST['city_id']==null && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $location_category_id=$_REQUEST['location_category_id'];
            $locations = LocationItem::where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            
             return view('public.volvo_trucks.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
         if (isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $city_id=$_REQUEST['city_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('website_id', $website_id)->get();
           
             return view('public.volvo_trucks.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
        // ideal case
        if (isset($_REQUEST['city_id']) && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $city_id = $_REQUEST['city_id'];
            $location_category_id = $_REQUEST['location_category_id'];
            $website_id = $_REQUEST['website_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            // $locations = $locations[0];
            return view('public.volvo_trucks.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
//             return $locations;
            // return $locations->lat;
        } else {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_trucks.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        


       
    }
    
     public function locations_buses(Request $request) {
        // print_r($request);
        $website = DB::table('websites')->where('name','volvo_buses')->first();
       // return $website;
       // print_r($website);
        $cities = DB::table('cities')->where('website_id', $website->id)->select('id', 'name_en')->get();
        $locationCategories = LocationCategory::oldest()->select('id', 'name_en')->get();
        $component = ComponentData::latest()->where('website_id', $website->id)->where('name','main_menu')->where('published', '1')->first();          
//return $component;
        $settings=Setting::latest()->where('website_id', $website->id)->where('published', '1')->first();
//return $settings;
$component=json_decode($component['component_data']);
//return $component->name;
        $menu_offering = Menu::latest()->where('website_id', $website->id)->where('name','our_offering')->where('published', '1')->first();          
        //return $menu_products;
        $menu_news = Menu::latest()->where('website_id', $website->id)->where('name','News_Media')->where('published', '1')->first();
        $menu_services = Menu::latest()->where('website_id', $website->id)->where('name','parts_service')->where('published', '1')->first();
        $menu_aboutus = Menu::latest()->where('website_id', $website->id)->where('name','about_us_buses')->where('published', '1')->first();
        $menu_locations = Menu::latest()->where('website_id', $website->id)->where('name','location')->where('published', '1')->first();
        $menu_contactus = Menu::latest()->where('website_id', $website->id)->where('name','contact')->where('published', '1')->first();

        $footer_menu = Menu::latest()->where('website_id',$website->id)->where('name','footer_buses')->where('published', '1')->first();
        //print_r($footer_menu);
        
        if (!isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && !isset($_REQUEST['website_id']))  {
            $locations = null;
            
            return view('public.volvo_buses.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu','menu_offering','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
         if ($_REQUEST['city_id']==null && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $location_category_id=$_REQUEST['location_category_id'];
            $locations = LocationItem::where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();           
             return view('public.volvo_buses.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_offering','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
         if (isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $city_id=$_REQUEST['city_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('website_id', $website_id)->get();
           
             return view('public.volvo_buses.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_offering','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
        // ideal case
        if (isset($_REQUEST['city_id']) && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $city_id = $_REQUEST['city_id'];
            $location_category_id = $_REQUEST['location_category_id'];
            $website_id = $_REQUEST['website_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            // $locations = $locations[0];
            return view('public.volvo_buses.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_offering','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
//             return $locations;
            // return $locations->lat;
        } else {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_buses.locations', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_offering','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        


       
    }
    
    public function locations_trucks_ar(Request $request) {
        // print_r($request);
        $website = DB::table('websites')->where('name','volvo_trucks')->first();
       // return $website;
       // print_r($website);
        $cities = DB::table('cities')->where('website_id', $website->id)->select('id', 'name_ar')->get();
        $locationCategories = LocationCategory::oldest()->select('id', 'name_ar')->get();
        $component = ComponentData::latest()->where('website_id', $website->id)->where('name','arabic_main_menu')->where('published', '1')->first();          
//return $component;
        $settings=Setting::latest()->where('website_id', $website->id)->where('published', '1')->first();

$component=json_decode($component['component_data']);
//return $component->name;
        $menu_products = Menu::latest()->where('website_id', $website->id)->where('name','arabic_trucks')->where('published', '1')->first();          
        //return $menu_products;
        $menu_news = Menu::latest()->where('website_id', $website->id)->where('name','arabic_main_menu_news')->where('published', '1')->first();
        $menu_services = Menu::latest()->where('website_id', $website->id)->where('name','arabic__main_menu_service')->where('published', '1')->first();
        $menu_aboutus = Menu::latest()->where('website_id', $website->id)->where('name','arabic_about')->where('published', '1')->first();
        $menu_locations = Menu::latest()->where('website_id', $website->id)->where('name','arabic_location')->where('published', '1')->first();
       // $menu_contactus = Menu::latest()->where('website_id', $website->id)->where('name','news')->where('published', '1')->first();

        $footer_menu = Menu::latest()->where('website_id',$website->id)->where('name','arabic_footer_trucks')->where('published', '1')->first();
        //print_r($footer_menu);
        
        if (!isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && !isset($_REQUEST['website_id']))  {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_trucks.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
         if ($_REQUEST['city_id']==null && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $location_category_id=$_REQUEST['location_category_id'];
            $locations = LocationItem::where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            
             return view('public.volvo_trucks.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
         if (isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $city_id=$_REQUEST['city_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('website_id', $website_id)->get();
           
             return view('public.volvo_trucks.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
        // ideal case
        if (isset($_REQUEST['city_id']) && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $city_id = $_REQUEST['city_id'];
            $location_category_id = $_REQUEST['location_category_id'];
            $website_id = $_REQUEST['website_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            // $locations = $locations[0];
            return view('public.volvo_trucks.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
//             return $locations;
            // return $locations->lat;
        } else {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_trucks.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        


       
    }
    
     public function locations_ce_ar(Request $request) {
        // print_r($request);
        $website = DB::table('websites')->where('name','volvo_ce')->first();
       // return $website;
       // print_r($website);
        $cities = DB::table('cities')->where('website_id', $website->id)->select('id', 'name_ar')->get();
        $locationCategories = LocationCategory::oldest()->select('id', 'name_ar')->get();
        $menu_products = Menu::latest()->where('website_id', $website->id)->where('name','products_ar')->where('published', '1')->first();          
        $locationCategories = LocationCategory::oldest()->select('id', 'name_ar')->get();
        $component = ComponentData::latest()->where('website_id', $website->id)->where('name','main_menu_ar')->where('published', '1')->first();          
//return $component;
        $settings=Setting::latest()->where('website_id', $website->id)->where('published', '1')->first();

$component=json_decode($component['component_data']);
//return $component;

   $small_component = ComponentData::latest()->where('website_id', $website->id)->where('name','small_menu_ar')->where('published', '1')->first();          
//return $small_component;
$small_component=json_decode($small_component['component_data']);
//return $small_component;
        $menu_attachments = Menu::latest()->where('website_id', $website->id)->where('name','attachments_ar')->where('published', '1')->first();
        $menu_parts = Menu::latest()->where('website_id', $website->id)->where('name','parts_ar')->where('published', '1')->first();
        $menu_services = Menu::latest()->where('website_id', $website->id)->where('name','services_ar')->where('published', '1')->first();
        $menu_aboutus = Menu::latest()->where('website_id', $website->id)->where('name','about_ar')->where('published', '1')->first();
        $menu_locations = Menu::latest()->where('website_id', $website->id)->where('name','location_ar')->where('published', '1')->first();
        $menu_contactus = Menu::latest()->where('website_id', $website->id)->where('name','contact_ar')->where('published', '1')->first();

        $footer_menu = Menu::latest()->where('website_id',$website->id)->where('name','footer_ar')->where('published', '1')->first();
        //print_r($footer_menu);
        
        if (!isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && !isset($_REQUEST['website_id']))  {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_ce.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
        }
        
        
         if ($_REQUEST['city_id']==null && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $location_category_id=$_REQUEST['location_category_id'];
            $locations = LocationItem::where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            
             return view('public.volvo_ce.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
        }
        
        
         if (isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $city_id=$_REQUEST['city_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('website_id', $website_id)->get();
           
             return view('public.volvo_ce.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
        }
        
        
        // ideal case
        if (isset($_REQUEST['city_id']) && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $city_id = $_REQUEST['city_id'];
            $location_category_id = $_REQUEST['location_category_id'];
            $website_id = $_REQUEST['website_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            // $locations = $locations[0];
            return view('public.volvo_ce.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
//             return $locations;
            // return $locations->lat;
        } else {
            $locations = null;
            // print_r($locationCategories);
            return view('public.volvo_ce.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_products','menu_attachments','menu_parts','menu_services','menu_aboutus','menu_locations','menu_contactus','component','small_component','settings'));
        }
        


       
    }
    
     public function locations_buses_ar(Request $request) {
      
        $website = DB::table('websites')->where('name','volvo_buses')->first();
      
        $cities = DB::table('cities')->where('website_id', $website->id)->select('id', 'name_ar')->get();
        $locationCategories = LocationCategory::oldest()->select('id', 'name_ar')->get();
        $component = ComponentData::latest()->where('website_id', $website->id)->where('name','main_menu_ar')->where('published', '1')->first();          
//return $component;
$component=json_decode($component['component_data']);
//return $component->name;
        $settings=Setting::latest()->where('website_id', $website->id)->where('published', '1')->first();

        $menu_offering = Menu::latest()->where('website_id', $website->id)->where('name','our_offering_ar_bus')->where('published', '1')->first();          
        //return $menu_products;
        $menu_news = Menu::latest()->where('website_id', $website->id)->where('name','News_Media_ar_bus')->where('published', '1')->first();
        $menu_services = Menu::latest()->where('website_id', $website->id)->where('name','parts_service_ar_bus')->where('published', '1')->first();
        $menu_aboutus = Menu::latest()->where('website_id', $website->id)->where('name','about_us_buses')->where('published', '1')->first();
        $menu_locations = Menu::latest()->where('website_id', $website->id)->where('name','location_ar_bus')->where('published', '1')->first();
        $menu_contactus = Menu::latest()->where('website_id', $website->id)->where('name','contact_ar_bus')->where('published', '1')->first();

        $footer_menu = Menu::latest()->where('website_id',$website->id)->where('name','footer_ar_bus')->where('published', '1')->first();
        //print_r($footer_menu);
        
        if (!isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && !isset($_REQUEST['website_id']))  {
            $locations = null;
            
            return view('public.volvo_buses.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu','menu_offering','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
         if ($_REQUEST['city_id']==null && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $location_category_id=$_REQUEST['location_category_id'];
            $locations = LocationItem::where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();           
             return view('public.volvo_buses.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_offering','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
        }
        
        
         if (isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $city_id=$_REQUEST['city_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('website_id', $website_id)->get();
           
             return view('public.volvo_buses.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','footer_menu','menu_offering','menu_attachments','menu_news','menu_services','menu_aboutus','menu_locations','menu_contactus','component','settings'));
     

       
    }
     }
}
