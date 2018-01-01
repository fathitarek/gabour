<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use PhpSpec\Formatter\Html\Template;

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
$router->get('/test',function(){
    if(DB::connection()->getDatabaseName())
    {
        echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }
});

Route::get('/', function(){
    return redirect('/ghabbour_commercial_vehicles/home');
});
Route::get('/test_comp', 'WelcomeController@testComp');
Route::post('/fuso/locations_ar','FusoPagesController@locations_ar');
Route::get('/fuso/locations_ar','FusoPagesController@locations_ar');
//General Admin
//Volvo FrontEnd
Route::post('/volvo_ce/locations','VolvoPagesController@locations');
Route::get('/volvo_ce/locations','VolvoPagesController@locations');

Route::post('/volvo_ce/locations_ar','VolvoPagesController@locations_ce_ar');
Route::get('/volvo_ce/locations_ar','VolvoPagesController@locations_ce_ar');

Route::post('/volvo_buses/locations_ar','VolvoPagesController@locations_buses_ar');
Route::get('/volvo_buses/locations_ar','VolvoPagesController@locations_buses_ar');


Route::post('/volvo_trucks/locations','VolvoPagesController@locations_trucks');
Route::get('/volvo_trucks/locations','VolvoPagesController@locations_trucks');
Route::post('/volvo_trucks/locations_ar','VolvoPagesController@locations_trucks_ar');
Route::get('/volvo_trucks/locations_ar','VolvoPagesController@locations_trucks_ar');

//volvo busses front-end
Route::post('/volvo_buses/locations','VolvoPagesController@locations_buses');
Route::get('/volvo_buses/locations','VolvoPagesController@locations_buses');


//Fuso FrontEnd
 Route::post('/fuso/locations','FusoPagesController@locations');
Route::get('/fuso/locations','FusoPagesController@locations');

//GCV FrontEnd
Route::post('/ghabbour_commercial_vehicles/locations','GcvPagesController@locations');
Route::get('/ghabbour_commercial_vehicles/locations','GcvPagesController@locations');

//GCV FrontEnd arabic
Route::post('/ghabbour_commercial_vehicles/locations_ar','GcvPagesController@locations_ar');
Route::get('/ghabbour_commercial_vehicles/locations_ar','GcvPagesController@locations_ar');
//General Admin
Route::get('/Admin', 'HomeController@admin');
Route::resource('/Admin/websites', 'WebsiteController');
Route::resource('/Admin/menu_template', 'MenuTemplateController');

//Websites Admin Panel
Route::get('/Admin/volvo_ce', 'HomeController@volvoCeAdmin');
Route::get('/Admin/volvo_buses', 'HomeController@volvoBusesAdmin');
Route::get('/Admin/volvo_trucks', 'HomeController@volvoTrucksAdmin');
Route::get('/Admin/fuso', 'HomeController@fusoAdmin');
Route::get('/Admin/ghabbour_commercial_vehicles', 'HomeController@cvAdmin');

//Menus
Route::get('/Admin/{selected_website}/menus', 'MenuController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/menus/create', 'MenuController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/menus/edit/{id}', 'MenuController@edit',compact('selected_website','id'));
Route::resource('/Admin/menus', 'MenuController');

//Menu Items
Route::get('/Admin/{selected_website}/menu_items', 'MenuItemController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/menu_items/create', 'MenuItemController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/menu_items/edit/{id}', 'MenuItemController@edit',compact('selected_website','id'));
Route::resource('/Admin/menu_items', 'MenuItemController');

//CV ADMIN PANEL
//$gabbour_commercial_vehicles="gabbour_commercial_vehicles";
Route::get('/Admin/{selected_website}/cities', 'CityController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/cities/create', 'CityController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/cities/edit/{id}', 'CityController@edit',compact('selected_website','id'));
Route::resource('/Admin/locations/cities', 'CityController');


Route::get('/Admin/{selected_website}/setting', 'SettingController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/setting/create', 'SettingController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/setting/edit/{id}', 'SettingController@edit',compact('selected_website','id'));
Route::resource('/Admin/setting', 'SettingController');

//category

Route::get('/Admin/{selected_website}/categories', 'CategoryController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/categories/create', 'CategoryController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/categories/edit/{id}', 'CategoryController@edit',compact('selected_website','id'));
Route::resource('/Admin/categories', 'CategoryController');

//product

Route::get('/Admin/{selected_website}/products', 'ProductController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/products/create', 'ProductController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/products/edit/{id}', 'ProductController@edit',compact('selected_website','id'));
Route::resource('/Admin/products', 'ProductController');

//similar_sections
Route::get('/Admin/{selected_website}/similar_sections', 'Similar_sectionsController@index',compact('selected_website'));

Route::get('/Admin/{selected_website}/similar_sections/create_the_benefits', 'Similar_sectionsController@create_the_benefits',compact('selected_website'));
Route::get('/Admin/{selected_website}/similar_sections/create_value_parts_leaflet_download', 'Similar_sectionsController@create_value_parts_leaflet_download',compact('selected_website'));
Route::get('/Admin/{selected_website}/similar_sections/create_genuine_accessories_leaflet_download', 'Similar_sectionsController@create_genuine_accessories_leaflet_download',compact('selected_website'));


Route::get('/Admin/{selected_website}/similar_sections/edit_the_benefits/{id}','Similar_sectionsController@edit_the_benefits',compact('selected_website','id'));
Route::get('/Admin/{selected_website}/similar_sections/edit_value_parts_leaflet_download/{id}','Similar_sectionsController@edit_value_parts_leaflet_download',compact('selected_website','id'));
Route::get('/Admin/{selected_website}/similar_sections/edit_genuine_accessories_leaflet_download/{id}','Similar_sectionsController@edit_genuine_accessories_leaflet_download',compact('selected_website','id'));



//Route::get('/Admin/{selected_website}/similar_sections/edit/{id}', 'Similar_sectionsController@edit',compact('selected_website','id'));
Route::resource('/Admin/similar_sections', 'Similar_sectionsController');

//Templates
Route::get('/Admin/{selected_website}/templates', 'TemplateController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/templates/create', 'TemplateController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/templates/edit/{id}', 'TemplateController@edit',compact('selected_website','id'));
Route::resource('/Admin/templates', 'TemplateController');


//Component Templates
Route::get('/Admin/{selected_website}/component_templates', 'ComponentTemplateController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/component_templates/create', 'ComponentTemplateController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/component_templates/edit/{id}', 'ComponentTemplateController@edit',compact('selected_website','id'));
Route::resource('/Admin/component_templates', 'ComponentTemplateController');



//Component Data
Route::get('/Admin/{selected_website}/component_datas/list', 'ComponentDataController@listComponentDatas',compact('selected_website'));
Route::get('/Admin/{selected_website}/component_datas', 'ComponentDataController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/component_datas/create', 'ComponentDataController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/component_datas/edit/{id}', 'ComponentDataController@edit',compact('selected_website','id'));
Route::resource('/Admin/component_datas', 'ComponentDataController');

//Pages
Route::get('/Admin/{selected_website}/pages', 'PageController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/pages/create', 'PageController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/pages/edit/{id}', 'PageController@edit',compact('selected_website','id'));
Route::resource('/Admin/pages', 'PageController');


//sliders
Route::get('Admin/{selected_website}/sliders', 'SliderController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/sliders/create', 'SliderController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/sliders/edit/{id}', 'SliderController@edit',compact('selected_website','id'));
Route::resource('Admin/sliders', 'SliderController');

//slider_items
Route::get('Admin/{selected_website}/slider_items', 'SliderItemController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/slider_items/create', 'SliderItemController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/slider_items/edit/{id}', 'SliderItemController@edit',compact('selected_website','id'));
Route::get('Admin/{selected_website}/slider_items/show/{id}', 'SliderItemController@show',compact('selected_website','id'));
Route::resource('Admin/slider_items', 'SliderItemController');

Route::get('/Admin/{selected_website}/locationsItem', 'LocationItemController@index',compact('selected_website'));
Route::get('/Admin/{selected_website}/locationsItem/create', 'LocationItemController@create',compact('selected_website'));
Route::get('/Admin/{selected_website}/locationsItem/edit/{id}', 'LocationItemController@edit',compact('selected_website','id'));
Route::get('/Admin/{selected_website}/locationsItem/export','LocationItemController@export',compact('selected_website'));
Route::post('Admin/{selected_website}/locationsItem/import','LocationItemController@import',compact('selected_website'));

Route::resource('/Admin/locationsItem', 'LocationItemController');



//FUSO ADMIN PANEL
//$fuso="fuso";
//Route::get('/Admin/fuso/cities/create', 'CityController@create',compact('fuso'));
//Route::get('/Admin/fuso/cities/edit', 'CityController@edit',compact('fuso'));

//Route::resource('/Admin/cities', 'CityController');


//VOLVO ADMIN PANEL
//$volvo="volvo";
//Route::get('/Admin/{volvo}/cities/create', 'CityController@create');
//Route::get('/Admin/volvo/cities/edit', 'CityController@edit',compact('volvo'));


Route::get('/Admin/locationsCategory/export','LocationCategoryController@export');
Route::post('Admin/locationsCategory/import','LocationCategoryController@import');
Route::resource('/Admin/locationsCategory', 'LocationCategoryController');

Route::resource('/Admin/locationsItem', 'LocationItemController');



Route::get('/Admin/{selected_website}/contacts', 'ContactController@index',compact('selected_website'));
Route::post('/{selected_website}/contact_us/send','ContactController@store');
Route::post('/{selected_website}/contact_us_ar/send','ContactController@store_ar');

Route::resource('/Admin/contacts', 'ContactController');

// Route::get('/Admin/pages/{variable_name}', function($variable_name){
//
//     $app = app();
//     $controller = $app->make('\App\Http\Controllers'.'\\'.$variable_name.'PagesController');
//     return $controller->callAction('index', $parameters = array());
// });

// Route::get('/about/classes/{theArt}/{$theSubject}', function($theArt,$theSubject){
//   return "<h2>Welcome to {$theArt} in {$theSubject}</h2>";
// });

//The Father of All Routes


Route::get('/{selected_website}/{page}','PageController@publicPage',compact('selected_website','page'));

Route::get('/Dev/{selected_website}/{page}','PageController@publicDevPage',compact('selected_website','page'));
Route::get('/{selected_website}/{page}','PageController@publicPage',compact('selected_website','page'));

