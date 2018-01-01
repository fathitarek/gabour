<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use Request;
use Illuminate\Support\Facades\Request;
use App\City;
use App\Setting;
use App\LocationCategory;
use App\LocationItem;
use Illuminate\Support\Facades\DB;

class GcvPagesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function locations(Request $request) {
        // print_r($request);
        
        $website = DB::table('websites')->where('name', 'ghabbour_commercial_vehicles')->first();
        $cities = DB::table('cities')->where('website_id', $website->id)->select('id', 'name_en')->get();
        $menu = Menu::latest()->where('website_id', $website->id)->where('name','gcv_english_main_menu')->where('published', '1')->first();
        $footer_menu = Menu::latest()->where('website_id', $website->id)->where('name','gcv_english_footer_menu')->where('published', '1')->first();
       // return $footer_menu->menuItems;
        $settings=Setting::latest()->where('website_id', $website->id)->where('published', '1')->first();
      //  return $settings;
        $locationCategories = LocationCategory::oldest()->select('id', 'name_en')->get();
        // if (Request::method() == 'GET') {
        
        
        if (!isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && !isset($_REQUEST['website_id']))  {
            $locations = null;
            // print_r($locationCategories);
            return view('public.ghabbour_commercial_vehicles.locations', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
        }
        
        
         if ($_REQUEST['city_id']==null && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $location_category_id=$_REQUEST['location_category_id'];
            $locations = LocationItem::where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            
             return view('public.ghabbour_commercial_vehicles.locations', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
        }
        
        
         if (isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $city_id=$_REQUEST['city_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('website_id', $website_id)->get();
           
             return view('public.ghabbour_commercial_vehicles.locations', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
        }
        
        
        // ideal case
        if (isset($_REQUEST['city_id']) && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $city_id = $_REQUEST['city_id'];
            $location_category_id = $_REQUEST['location_category_id'];
            $website_id = $_REQUEST['website_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            // $locations = $locations[0];
            return view('public.ghabbour_commercial_vehicles.locations', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
           //  return $locations;
            // return $locations->lat;
        } else {
            $locations = null;
            // print_r($locationCategories);
            return view('public.ghabbour_commercial_vehicles.locations', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
        }
        


       
    }

    
    public function locations_ar(Request $request) {
        // print_r($request);
        
        $website = DB::table('websites')->where('name', 'ghabbour_commercial_vehicles')->first();
        $cities = DB::table('cities')->where('website_id', $website->id)->select('id', 'name_ar')->get();
        $menu = Menu::latest()->where('website_id', $website->id)->where('name','gcv_arabic_main_menu')->where('published', '1')->first();
        $footer_menu = Menu::latest()->where('website_id', $website->id)->where('name','gcv_arabic_footer_menu')->where('published', '1')->first();
       // return $footer_menu->menuItems;
        $settings=Setting::latest()->where('website_id', $website->id)->where('published', '1')->first();
        $locationCategories = LocationCategory::oldest()->select('id', 'name_ar')->get();
        // if (Request::method() == 'GET') {
        
        
        if (!isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && !isset($_REQUEST['website_id']))  {
            $locations = null;
            // print_r($locationCategories);
            return view('public.ghabbour_commercial_vehicles.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
        }
        
        
         if ($_REQUEST['city_id']==null && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $location_category_id=$_REQUEST['location_category_id'];
            $locations = LocationItem::where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            
             return view('public.ghabbour_commercial_vehicles.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
        }
        
        
         if (isset($_REQUEST['city_id']) && !isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $website_id=$_REQUEST['website_id'];
            $city_id=$_REQUEST['city_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('website_id', $website_id)->get();
           
             return view('public.ghabbour_commercial_vehicles.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
        }
        
        
        // ideal case
        if (isset($_REQUEST['city_id']) && isset($_REQUEST['location_category_id']) && isset($_REQUEST['website_id'])) {
            $city_id = $_REQUEST['city_id'];
            $location_category_id = $_REQUEST['location_category_id'];
            $website_id = $_REQUEST['website_id'];
            $locations = LocationItem::where('city_id', $city_id)->where('location_category_id', $location_category_id)->where('website_id', $website_id)->get();
            // $locations = $locations[0];
            return view('public.ghabbour_commercial_vehicles.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
           //  return $locations;
            // return $locations->lat;
        } else {
            $locations = null;
            // print_r($locationCategories);
            return view('public.ghabbour_commercial_vehicles.locations_ar', compact('cities', 'locationCategories', 'website', 'locations','menu','footer_menu','settings'));
        }
        


       
    }
}
