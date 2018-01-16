@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a >{{$current_website->display_name_en}}  Similar Sections</a> / <span>Add New Genuine Accessories Leaflet Download </span></p></div>
    <hr/>

        {!!Form::open(['action'=>'Similar_sectionsController@index','files' => true])!!}
        
{{csrf_token()}}
            <!--    Title English       -->
            @include('Admin.form_parcials.universal_text_field',['name'=>'title_en','label'=>'English Display Title:'])
            @if ($errors->has('title_en'))
                <div class="error">
                 <i class="fa fa-times-circle"></i>
                 {{ $errors->first('title_en') }}
                </div>
             @endif
            <!--    Title Arabic       -->
            @include('Admin.form_parcials.universal_text_field',['name'=>'title_ar','label'=>'Arabic Display Title:'])
              @if ($errors->has('title_ar'))
                    <div class="error">
                    <i class="fa fa-times-circle"></i>
                    {{ $errors->first('title_ar') }}
                    </div>
              @endif
              
               <!--    Image English       -->

           @include('Admin.form_parcials.upload_field',['name'=>'image_en','label'=>'Image English:'])
                @if ($errors->has('image_en'))
                    <div class="error">
                      <i class="fa fa-times-circle"></i>
                      {{ $errors->first('image_en') }}
                    </div>
                @endif
           <!--    Image Arabic       -->
          @include('Admin.form_parcials.upload_field',['name'=>'image_ar','label'=>'Image Arabic:'])
            @if ($errors->has('image_ar'))
                <div class="error">
                    <i class="fa fa-times-circle"></i>
                    {{ $errors->first('image_ar') }}
                </div>
            @endif
           
          <!--    pdf English       -->
          @include('Admin.form_parcials.upload_field',['name'=>'pdf_en','label'=>'pdf English:'])
          @if ($errors->has('pdf_en'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('pdf_en') }}
          </div>
          @endif
          <!--    pdf Arabic       -->
           @include('Admin.form_parcials.upload_field',['name'=>'pdf_ar','label'=>'pdf Arabic:'])
          @if ($errors->has('pdf_ar'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('pdf_ar') }}
          </div>
          @endif
              {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

        {!!Form::hidden('category','genuine_accessories_leaflet_download',['id'=>'category']) !!}
            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
