@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a>{{$current_website->display_name_en}}   Template</a> / <span>Edit</span></p></div>
<hr/>

{!!Form::model($record,['method' =>'PATCH', 'action'=>['ComponentTemplateController@update',$record->id],'files' => true])!!}
 @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English Name:'])
    @if ($errors->has('name'))
    <div class="error">
      <i class="fa fa-times-circle"></i>
      {{ $errors->first('name') }}</div>
      @endif

    @include('Admin.form_parcials.universal_text_field',['name'=>'path','label'=>'View Path:'])
      @if ($errors->has('path'))
      <div class="error">
        <i class="fa fa-times-circle"></i>
        {{ $errors->first('path') }}
      </div>
      @endif

      @include('Admin.form_parcials.upload_field',['name'=>'preview','label'=>'Component Preview:'])
      {{--@if ($errors->has('preview'))--}}
      @if($record->preview)
         <img src="/{{$current_website->name}}/images/components_previews/{{$record->preview}}" width="350"/>
        @else
      <div class="error">
        <i class="fa fa-times-circle"></i>
        {{ $errors->first('preview') }}
      </div>
      @endif

      @include('Admin.form_parcials.universal_textarea_field',['name'=>'component_structure','label'=>'Component Structure:'])
        @if ($errors->has('component_structure'))
        <div class="error">
          <i class="fa fa-times-circle"></i>
          {{ $errors->first('component_structure') }}
        </div>
        @endif
                      {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

    @include('Admin.form_parcials.published')
    @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])
{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
