@extends('../../app')

@section('content')
<div class="bread-crumb"><p><a href="{{action('CityController@index')}}">City</a> / <span>Add New</span></p></div>
<hr/>

{!!Form::model($record,['method' =>'PATCH', 'action'=>['CityController@update',$record->id],'files' => true])!!}
@include('Admin.form_parcials.universal_text_field',['name'=>'name_en','label'=>'English Display Name:'])
@if ($errors->has('name_en'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('name_en') }}</div>
@endif

@include('Admin.form_parcials.universal_text_field',['name'=>'name_ar','label'=>'Arabic Display Name:'])
@if ($errors->has('name_ar'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('name_ar') }}
</div>
@endif

@include('Admin.form_parcials.universal_select_field',['name'=>'website_id','label'=>'Web Site:','default_option'=>'Please Select Website','list_items'=>$website])
@if ($errors->has('website_id'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('website_id') }}
</div>
@endif

@include('Admin.form_parcials.published')
@include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])
{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
