@extends('Admin.'.$current_website->name.'.app')

@section('content')
<style>
    .website_link
    {
        margin: 0px;
        border-right: #CCC thin solid;
        padding: 24px;
    }
</style>
    <h1>{{$current_website->display_name_en}} Admin Panel</h1>

    <article>
        {{--<ul>--}}

            {{--<li><a href="{{action('WebsiteController@index')}}">Websites</a></li>--}}
            {{--<li><a href="{{action('FusoPagesController@index')}}">Fuso Pages</a></li>--}}
            {{--<li><a href="{{action('SliderController@index')}}">Image Sliders</a></li>--}}
            {{--<li><a href="{{action('CityController@index')}}">City</a></li>--}}
            {{--<li><a href="{{action('LocationCategoryController@index')}}">Location Category</a></li>--}}
            {{--<li><a href="{{action('LocationItemController@index')}}">Location Item</a></li>--}}

        {{--</ul>--}}


    </article>


@endsection
