@extends('../app')

@section('content')
<style>
    .website_link
    {
        margin: 0px;
        border-right: #CCC thin solid;
        padding: 24px;
    }
</style>
    <h1>Admin Panel</h1>

    <article>
        {{--<ul>--}}

            {{--<li><a href="{{action('WebsiteController@index')}}">Websites</a></li>--}}
            {{--<li><a href="{{action('FusoPagesController@index')}}">Fuso Pages</a></li>--}}
            {{--<li><a href="{{action('SliderController@index')}}">Image Sliders</a></li>--}}
            {{--<li><a href="{{action('CityController@index')}}">City</a></li>--}}
            {{--<li><a href="{{action('LocationCategoryController@index')}}">Location Category</a></li>--}}
            {{--<li><a href="{{action('LocationItemController@index')}}">Location Item</a></li>--}}

        {{--</ul>--}}

         @if(count($websites))
                    @foreach($websites as $website)
                    <a href="/Admin/{{$website->view_folder}}" class="website_link"><img  src="/images/{{$website->logo_en}}" alt=""/></a>
                    @endforeach
               @endif
    </article>


@endsection
