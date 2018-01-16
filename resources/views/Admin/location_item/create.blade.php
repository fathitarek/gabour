@extends('../../app')

@section('content')
<div class="bread-crumb"><p><a href="{{action('LocationItemController@index')}}">Location Item</a> / <span>Add New</span></p></div>
<hr/>

{!!Form::open(['action'=>'LocationItemController@index','files' => true])!!}
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

@include('Admin.form_parcials.universal_text_field',['name'=>'lat','label'=>'latitude:'])
@if ($errors->has('lat'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('lat') }}
</div>
@endif

@include('Admin.form_parcials.universal_text_field',['name'=>'long','label'=>'longitude:'])
@if ($errors->has('long'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('long') }}
</div>
@endif

@include('Admin.form_parcials.universal_select_field',['name'=>'location_category_id','label'=>'location  Category:','default_option'=>'Please Select Category','list_items'=>$location_category])
@if ($errors->has('location_category_id'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('location_category_id') }}
</div>
@endif

@include('Admin.form_parcials.universal_select_field',['name'=>'website_id','label'=>'Web Site:','default_option'=>'Please Select Website','list_items'=>$website])
@if ($errors->has('website_id'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('website_id') }}
</div>
@endif
 @include('Admin.form_parcials.universal_select_field',['name'=>'city_id','label'=>'City:','default_option'=>'Please Select City','list_items'=>$city])
@if ($errors->has('city_id'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('city_id') }}
</div>
@endif
@include('Admin.form_parcials.published')
@include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
