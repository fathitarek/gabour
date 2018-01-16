@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a href="{{action('CategoryController@index')}}">Category</a> / <span>Add New</span></p></div>
<hr/>

{!!Form::model($record,['method' =>'PATCH', 'action'=>['CategoryController@update',$record->id],'files' => true])!!}
                @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English  Name:'])
                @include('Admin.form_parcials.universal_text_field',['name'=>'display_name','label'=>'English Display Name:'])
                @include('Admin.form_parcials.universal_text_field',['name'=>'display_name_ar','label'=>'Arabic Display Name:'])
                 @include('Admin.form_parcials.universal_select_field',['name'=>'category_id','label'=>'Category:','default_option'=>'Please Select Category','list_items'=>$category])
{!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}
@include('Admin.form_parcials.published')
@include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])
{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
