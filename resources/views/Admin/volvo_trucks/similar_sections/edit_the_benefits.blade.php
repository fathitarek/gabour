@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a >{{$current_website->display_name_en}}  Similar Sections</a> / <span>Add New The benefits of Fuso Genuine Parts</span></p></div>
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
               <div>{!!$record->image_en ? '<img src="/'.$current_website->name.'/images/'.$record->image_en.'" height="40"/>':''!!}</div>
                @if ($errors->has('image_en'))
                    <div class="error">
                      <i class="fa fa-times-circle"></i>
                      {{ $errors->first('image_en') }}
                    </div>
                @endif
           <!--    Image Arabic       -->
          @include('Admin.form_parcials.upload_field',['name'=>'image_ar','label'=>'Image Arabic:'])
          <br>
                <div>{!!$record->image_ar ? '<img src="/'.$current_website->name.'/images/'.$record->image_ar.'" height="40"/>':''!!}</div>

            @if ($errors->has('image_ar'))
                <div class="error">
                    <i class="fa fa-times-circle"></i>
                    {{ $errors->first('image_ar') }}
                </div>
            @endif
           
          <!--    small_desc  English       -->
          @include('Admin.form_parcials.universal_text_field',['name'=>'small_desc_en','label'=>'Small Description English:'])
          @if ($errors->has('small_desc_en'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('small_desc_en') }}
          </div>
          @endif
          <!--    small_desc Arabic       -->
           @include('Admin.form_parcials.universal_text_field',['name'=>'small_desc_ar','label'=>'Small Description Arabic:'])
          @if ($errors->has('small_desc_ar'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('small_desc_ar') }}
          </div>
          @endif
          
          <!--    full_desc  English       -->
          @include('Admin.form_parcials.universal_textarea_field',['name'=>'full_desc_en','label'=>'Full Description English:'])
          @if ($errors->has('full_desc_en'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('full_desc_en') }}
          </div>
          @endif
          <!--    full_desc Arabic       -->
           @include('Admin.form_parcials.universal_textarea_field',['name'=>'full_desc_ar','label'=>'Full Description Arabic:'])
          @if ($errors->has('full_desc_ar'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('full_desc_ar') }}
          </div>
          @endif
          
          @include('Admin.form_parcials.universal_text_field',['name'=>'video','label'=>'VideoId:'])
            @if ($errors->has('video'))
                <div class="error">
                 <i class="fa fa-times-circle"></i>
                 {{ $errors->first('video') }}
                </div>
             @endif
          
              {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

        {!!Form::hidden('category','the_benefits',['id'=>'category']) !!}
            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
