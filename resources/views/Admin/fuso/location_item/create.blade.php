@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a > {{$current_website->display_name_en}} Location Item</a> / <span>Add New</span></p></div>
<hr/>

{!!Form::open(['action'=>'LocationItemController@index','files' => true])!!}
@include('Admin.form_parcials.universal_text_field',['name'=>'name_en','label'=>'English Display Name:'])
@include('Admin.form_parcials.universal_text_field',['name'=>'name_ar','label'=>'Arabic Display Name:'])
@include('Admin.form_parcials.universal_text_field',['name'=>'lat','label'=>'latitude:'])
@include('Admin.form_parcials.universal_text_field',['name'=>'long','label'=>'longitude:'])
@include('Admin.form_parcials.universal_text_field',['name'=>'address_en','label'=>'address_en:'])
@include('Admin.form_parcials.universal_text_field',['name'=>'address_ar','label'=>'address_ar:'])
@include('Admin.form_parcials.universal_text_field',['name'=>'fax','label'=>'fax:'])
@include('Admin.form_parcials.universal_text_field',['name'=>'phone','label'=>'phone:'])
@include('Admin.form_parcials.universal_text_field',['name'=>'email','label'=>'email:'])
@include('Admin.form_parcials.universal_select_field',['name'=>'location_category_id','label'=>'location  Category:','default_option'=>'Please Select Category','list_items'=>$location_category])
@include('Admin.form_parcials.universal_select_field',['name'=>'city_id','label'=>'City:','default_option'=>'Please Select City','list_items'=>$city])

{!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}


@include('Admin.form_parcials.published')
@include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
