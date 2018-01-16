@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a>{{$current_website->display_name_en}}   Setsting</a> / <span>Edit</span></p></div>
<hr/>

{!!Form::model($record,['method' =>'PATCH', 'action'=>['SettingController@update',$record->id],'files' => true])!!}
             
             @include('Admin.form_parcials.universal_text_field',['name'=>'text_en','label'=>'English Text:'])
             @if ($errors->has('text_en'))
             <div class="error">
               <i class="fa fa-times-circle"></i>
               {{ $errors->first('text_en') }}</div>
               @endif

             @include('Admin.form_parcials.universal_text_field',['name'=>'text_ar','label'=>'Arabic Text:'])
               @if ($errors->has('text_ar'))
               <div class="error">
                 <i class="fa fa-times-circle"></i>
                 {{ $errors->first('text_ar') }}
               </div>
               @endif
                @include('Admin.form_parcials.universal_text_field',['name'=>'google_analytics','label'=>'Google Analytics:'])
                 @if ($errors->has('google_analytics'))
                 <div class="error">
                   <i class="fa fa-times-circle"></i>
                   {{ $errors->first('google_analytics') }}
                 </div>
                 @endif

                
                 @include('Admin.form_parcials.upload_field',['name'=>'img_en','label'=>'Image English:'])
                 @if($record->img_en)
         <img src="/{{$current_website->name}}/images/{{$record->img_en}}" width="350"/>
         @endif
                   @if ($errors->has('img_en'))
                   <div class="error">
                     <i class="fa fa-times-circle"></i>
                     {{ $errors->first('img_en') }}
                   </div>
                   @endif

                   @include('Admin.form_parcials.upload_field',['name'=>'img_ar','label'=>'Image Arabic:'])
                    @if($record->img_ar)
         <img src="/{{$current_website->name}}/images/{{$record->img_ar}}" width="350"/>
         @endif
                 @if ($errors->has('img_ar'))
                 <div class="error">
                   <i class="fa fa-times-circle"></i>
                   {{ $errors->first('img_ar') }}
                 </div>
                 @endif

               {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}


             @include('Admin.form_parcials.published')
    @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])
{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
