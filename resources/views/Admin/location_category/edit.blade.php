@extends('../../app')

@section('content')
<div class="bread-crumb"><p><a href="{{action('LocationCategoryController@index')}}">Location Category</a> / <span>Add New</span></p></div>
<hr/>

{!!Form::model($record,['method' =>'PATCH', 'action'=>['LocationCategoryController@update',$record->id],'files' => true])!!}

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



@include('Admin.form_parcials.published')
@include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])
{!!Form::close()!!}
{{--@include('errors.list') --}}


@endsection