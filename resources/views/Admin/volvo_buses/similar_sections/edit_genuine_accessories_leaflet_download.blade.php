@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a >{{$current_website->display_name_en}}  Similar Sections</a> / <span>Add New Genuine Accessories Leaflet Download </span></p></div>
    <hr/>

            {!!Form::model($record,['method' =>'PATCH', 'action'=>['Similar_sectionsController@update',$record->id],'files' => true])!!}
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
                      <br>
                      <div>{!!$record->image_en ? '<img  src="/'.$current_website->name.'/images/'.$record->image_en.'" height="40"/>':''!!}</div>

                @if ($errors->has('image_en'))
                    <div class="error">
                      <i class="fa fa-times-circle"></i>
                      {{ $errors->first('image_en') }}
                    </div>
                @endif
           <!--    Image Arabic       -->
          @include('Admin.form_parcials.upload_field',['name'=>'image_ar','label'=>'Image Arabic:'])
                     <br>
                     <div>{!!$record->image_ar ? '<img   src="/'.$current_website->name.'/images/'.$record->image_ar.'" height="40"/>':''!!}</div>

            @if ($errors->has('image_ar'))
                <div class="error">
                    <i class="fa fa-times-circle"></i>
                    {{ $errors->first('image_ar') }}
                </div>
            @endif
           
          <!--    pdf English       -->
          @include('Admin.form_parcials.upload_field',['name'=>'pdf_en','label'=>'pdf English:'])
           <br>
           <div>{!!$record->pdf_en ? '<a   target="_blank" href="/'.$current_website->name.'/images/'.$record->pdf_en.'" height="40">'.$record->pdf_en. '</a>':''!!}</div>

          @if ($errors->has('pdf_en'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('pdf_en') }}
          </div>
          @endif
          <!--    pdf Arabic       -->
           @include('Admin.form_parcials.upload_field',['name'=>'pdf_ar','label'=>'pdf Arabic:'])
            <br>
            <div>{!!$record->pdf_ar ? '<a  target="_blank" href="/'.$current_website->name.'/images/'.$record->pdf_ar.'" height="40">'.$record->pdf_ar. '</a>':''!!}</div>

          @if ($errors->has('pdf_ar'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('pdf_ar') }}
          </div>
          @endif
              {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

        {!!Form::hidden('category','genuine_accessories_leaflet_download',['id'=>'category']) !!}
            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}

@endsection