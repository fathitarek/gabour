@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a > {{$current_website->display_name_en}} Location Item</a> / <span>Edit</span></p></div>
    <hr/>

      {!!Form::model($record,['method' =>'PATCH', 'action'=>['LocationItemController@update',$record->id],'files' => true])!!}

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

@include('Admin.form_parcials.universal_text_field',['name'=>'address_en','label'=>'address_en:'])
@if ($errors->has('address_en'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('address_en') }}
</div>
@endif

@include('Admin.form_parcials.universal_text_field',['name'=>'address_ar','label'=>'address_ar:'])
@if ($errors->has('address_ar'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('address_ar') }}
</div>
@endif

@include('Admin.form_parcials.universal_text_field',['name'=>'fax','label'=>'fax:'])
@if ($errors->has('fax'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('fax') }}
</div>
@endif
@include('Admin.form_parcials.universal_text_field',['name'=>'phone','label'=>'phone:'])
@if ($errors->has('phone'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('phone') }}
</div>
@endif
@include('Admin.form_parcials.universal_text_field',['name'=>'email','label'=>'email:'])
@if ($errors->has('email'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('email') }}
</div>
@endif



@include('Admin.form_parcials.universal_select_field',['name'=>'location_category_id','label'=>'location  Category:','default_option'=>'Please Select Category','list_items'=>$location_category])
@if ($errors->has('location_category_id'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('location_category_id') }}
</div>
@endif



@include('Admin.form_parcials.universal_select_field',['name'=>'city_id','label'=>'City:','default_option'=>'Please Select city','list_items'=>$city])
@if ($errors->has('city_id'))
<div class="error">
    <i class="fa fa-times-circle"></i>
    {{ $errors->first('city_id') }}
</div>
@endif
            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
