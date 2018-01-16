@extends('../app')

@section('content')
    <h1>Admin Panel</h1>

    <article>
        <ul>

             <li><a href="{{action('WebsiteController@index')}}">Websites</a></li>
            <li><a href="{{action('FusoPagesController@index')}}">Fuso Pages</a></li>
            <li><a href="{{action('SliderController@index')}}">Image Sliders</a></li>
            {{--<li><a href="{{action('MenusController@index')}}">Menus</a></li>--}}
            {{--<li><a href="{{action('MenuItemsController@index')}}">Menu Items</a></li>--}}
            {{--<hr/>--}}
            {{--<li><a href="{{action('CategoriesController@index')}}">Categories</a></li>--}}
            {{--<li><a href="{{action('DriveConfigurationsController@index')}}">Drive Configurations</a></li>--}}
            {{--<li><a href="{{action('FuelTypesController@index')}}">Fuel Types</a></li>--}}
            {{--<hr/>--}}
            {{--<li><a href="{{action('CarController@index')}}">Cars</a></li>--}}
            {{--<hr/>--}}
            {{--<li><a href="{{action('SettingsController@index')}}">Settings</a></li>--}}
        </ul>
    </article>


@endsection
