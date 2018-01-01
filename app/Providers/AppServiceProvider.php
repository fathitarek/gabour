<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Website;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
//        $current_website=
        $request_url=\Request::url();
        $websites =  Website::latest()->where('published', '1')->get();
        $current_website='';
//        $arr=[];
        foreach ($websites as $index => $website) {
//            $arr[$index]=$website->name;
            if(strpos($request_url,$website->name)){

                $current_website=$website;
            }
        }
        view()->share('current_website',$current_website);
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
