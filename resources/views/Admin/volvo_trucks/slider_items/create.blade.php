@extends('Admin.'.$current_website->name.'.app')

@section('content')
<style>
form input[type="text"], select {
  width:400px !important;
}
</style>
<div class="bread-crumb"><p>
  <a href="/Admin/{{$current_website->name}}/sliders">Slider Items</a> / <span>Add New</span></p></div>
    <hr/>

        {!!Form::open(['action'=>'SliderItemController@index','files' => true])!!}
           {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

            @include('Admin.form_parcials.universal_select_field',['list_items'=>$sliders,'name'=>'slider_id','label'=>'Related Slider:','default_option'=>'Please Select the related Slider'])
            @if ($errors->has('slider_id'))
              <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('slider_id') }}
              </div>
             @endif

          @include('Admin.form_parcials.upload_field',['name'=>'img','label'=>'Image:'])
          @if ($errors->has('img'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('img') }}
          </div>
          @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'Name:'])
            @if ($errors->has('name'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('name') }}</div>
              @endif
 @include('Admin.form_parcials.universal_text_field',['name'=>'youtube_id','label'=>'youtube_id:'])
            @if ($errors->has('youtube_id'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('youtube_id') }}</div>
              @endif

              @include('Admin.form_parcials.universal_text_field',['name'=>'title','label'=>'English Title:'])
              @if ($errors->has('title'))
              <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('title') }}</div>
                @endif

              {{--@include('Admin.form_parcials.universal_text_field',['name'=>'title_ar','label'=>'Arabic Title:'])--}}
                                    {{--@if ($errors->has('title_ar'))--}}
                                    {{--<div class="error">--}}
                                      {{--<i class="fa fa-times-circle"></i>--}}
                                      {{--{{ $errors->first('title_ar') }}</div>--}}
                                      {{--@endif--}}

                @include('Admin.form_parcials.universal_summary_field',['name'=>'caption','label'=>'English Caption:'])
                @if ($errors->has('caption'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('caption') }}</div>
                  @endif

                {{--@include('Admin.form_parcials.universal_summary_field',['name'=>'caption_ar','label'=>'Arabic Caption:'])--}}
                {{--@if ($errors->has('caption_ar'))--}}
                {{--<div class="error">--}}
                  {{--<i class="fa fa-times-circle"></i>--}}
                  {{--{{ $errors->first('caption_ar') }}</div>--}}
                  {{--@endif--}}

                @include('Admin.form_parcials.universal_text_field',['name'=>'url','label'=>'English Url:'])
                @if ($errors->has('url'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('url') }}</div>
                  @endif

              {{--@include('Admin.form_parcials.universal_text_field',['name'=>'url_ar','label'=>'Arabic Url:'])--}}
              {{--@if ($errors->has('url_ar'))--}}
              {{--<div class="error">--}}
                {{--<i class="fa fa-times-circle"></i>--}}
                {{--{{ $errors->first('url_ar') }}</div>--}}
                {{--@endif--}}

            @include('Admin.form_parcials.universal_text_field',['name'=>'url_title','label'=>'English Url Title:'])
            @if ($errors->has('url_title'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('url_title') }}</div>
              @endif

            {{--@include('Admin.form_parcials.universal_text_field',['name'=>'url_title_ar','label'=>'Arabic Url Title:'])--}}
            {{--@if ($errors->has('url_title_ar'))--}}
            {{--<div class="error">--}}
              {{--<i class="fa fa-times-circle"></i>--}}
              {{--{{ $errors->first('url_title_ar') }}</div>--}}
              {{--@endif--}}



            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
