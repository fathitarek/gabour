@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a>{{$current_website->display_name_en}}   Menu</a> / <span>Edit</span></p></div>
<hr/>

{!!Form::model($record,['method' =>'PATCH', 'action'=>['MenuController@update',$record->id],'files' => true])!!}
 @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English Name:'])
             @if ($errors->has('name'))
             <div class="error">
               <i class="fa fa-times-circle"></i>
               {{ $errors->first('name') }}</div>
               @endif

             @include('Admin.form_parcials.universal_text_field',['name'=>'display_name','label'=>'Display Name:'])
               @if ($errors->has('display_name'))
               <div class="error">
                 <i class="fa fa-times-circle"></i>
                 {{ $errors->first('display_name') }}
               </div>
               @endif
                @include('Admin.form_parcials.universal_text_field',['name'=>'url','label'=>'URL:'])
                 @if ($errors->has('url'))
                 <div class="error">
                   <i class="fa fa-times-circle"></i>
                   {{ $errors->first('url') }}
                 </div>
                 @endif

                  @include('Admin.form_parcials.universal_textarea_field',['name'=>'description','label'=>'Description:'])
                 @if ($errors->has('description'))
                 <div class="error">
                   <i class="fa fa-times-circle"></i>
                   {{ $errors->first('description') }}
                 </div>
                 @endif

               {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}


             @include('Admin.form_parcials.published')
    @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])
{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
