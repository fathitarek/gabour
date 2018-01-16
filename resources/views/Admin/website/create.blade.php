@extends('../../app')

@section('content')
<div class="bread-crumb"><p><a href="{{action('WebsiteController@index')}}">Websites</a> / <span>Add New</span></p></div>
    <hr/>

        {!!Form::open(['action'=>'WebsiteController@index','files' => true])!!}
         @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'Name:'])
            
            @include('Admin.form_parcials.universal_text_field',['name'=>'display_name_en','label'=>'English Display Name:'])
            @if ($errors->has('display_name_en'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('display_name_en') }}</div>
              @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'display_name_ar','label'=>'Arabic Display Name:'])
              @if ($errors->has('display_name_ar'))
              <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('display_name_ar') }}
              </div>
              @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'view_folder','label'=>'View Folder:'])
              @if ($errors->has('view_folder'))
              <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('view_folder') }}
              </div>
              @endif

            @include('Admin.form_parcials.universal_textarea_field',['name'=>'html_includes','label'=>'HTML Includes:'])
            @if ($errors->has('html_includes'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('html_includes') }}
            </div>
            @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'title_en','label'=>'English Title:'])
            @if ($errors->has('title_en'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('title_en') }}
            </div>
            @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'title_ar','label'=>'Arabic Title:'])
            @if ($errors->has('title_ar'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('title_ar') }}
            </div>
            @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'meta_en','label'=>'English Meta Key:'])
             @if ($errors->has('meta_en'))
             <div class="error">
               <i class="fa fa-times-circle"></i>
               {{ $errors->first('meta_en') }}
             </div>
             @endif

            @include('Admin.form_parcials.universal_textarea_field',['name'=>'description_en','label'=>'English Meta Description:'])
            @if ($errors->has('description_en'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('description_en') }}
            </div>
            @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'meta_ar','label'=>'Arabic Meta Key:'])
            @if ($errors->has('meta_ar'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('meta_ar') }}
            </div>
            @endif

            @include('Admin.form_parcials.universal_textarea_field',['name'=>'description_ar','label'=>'Arabic Meta Description:'])
            @if ($errors->has('description_ar'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('description_ar') }}
            </div>
            @endif

            @include('Admin.form_parcials.upload_field',['name'=>'logo_en','label'=>'English Logo:'])
            @if ($errors->has('logo_en'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('logo_en') }}
            </div>
            @endif
            @include('Admin.form_parcials.upload_field',['name'=>'logo_ar','label'=>'Arabic Logo:'])
            @if ($errors->has('logo_ar'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('logo_ar') }}
            </div>
            @endif

            @include('Admin.form_parcials.url',['name'=>'facebook','label'=>'Facebook:'])
            @include('Admin.form_parcials.url',['name'=>'twitter','label'=>'Twitter:'])
            @include('Admin.form_parcials.url',['name'=>'instagram','label'=>'Instagram:'])
            @include('Admin.form_parcials.url',['name'=>'youtube','label'=>'Youtube:'])
            @include('Admin.form_parcials.url',['name'=>'linkedin','label'=>'LinkedIn:'])
            @include('Admin.form_parcials.url',['name'=>'google_plus','label'=>'Google+ Url:'])
            @include('Admin.form_parcials.url',['name'=>'pinterest','label'=>'Pinterest Url:'])

            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
