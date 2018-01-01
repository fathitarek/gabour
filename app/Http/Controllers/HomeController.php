<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Website;

class HomeController extends Controller {

	public function __construct()
	{
			$this->middleware('auth');
	}
	
	public function index()
	{
		return view('welcome');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

    public function admin() {
        $websites = Website::oldest()->get();
        return view('Admin.index',compact('websites'));
    }
	 public function cvAdmin() {
         return view('Admin.ghabbour_commercial_vehicles.index',compact('website'));
	 }
    public function fusoAdmin() {
        return view('Admin.fuso.index',compact('website'));
    }
    public function volvoCeAdmin() {
        return view('Admin.volvo_ce.index',compact('website'));
    }
    public function volvoBusesAdmin() {
        return view('Admin.volvo_buses.index',compact('website'));
    }
    public function volvoTrucksAdmin() {
        return view('Admin.volvo_trucks.index',compact('website'));
    }

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
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
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
