@extends('Admin/admin_template')

@section('content')
{{--{{$category}}--}}
    <h1>Edit Settings:</h1>
    <hr/>

        {!!Form::model($record,['method' =>'PATCH', 'action'=>['SettingsController@update',$record->id]])!!}

            @include('Admin.form_parcials.global_title_en')

            @include('Admin.form_parcials.global_title_ar')

            @include('Admin.form_parcials.universal_textarea_field',['name'=>'google_analytics','label'=>'Google Analytics:'])


            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Edit Settings'])
        {!!Form::close()!!}

        @include('errors.list')

@endsection


<?php
/**
 * Created by PhpStorm.
 * User: Ahmed Waly
 * Date: 12/28/2015
 * Time: 4:05 PM
 */
 ?>