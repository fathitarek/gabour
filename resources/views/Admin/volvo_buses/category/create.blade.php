@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a href="{{action('CategoryController@index')}}">Category</a> / <span>Add New</span></p></div>
    <hr/>

    {!!Form::open(['action'=>'CategoryController@index','files' => true])!!}
            @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English  Name:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'display_name','label'=>'English Display Name:'])
            @include('Admin.form_parcials.universal_select_field',['name'=>'category_id','label'=>'Category:','default_option'=>'Please Select Category','list_items'=>$category])
            @include('Admin.form_parcials.upload_field',['name'=>'small_image','label'=>'Small Image:'])
            @include('Admin.form_parcials.upload_field',['name'=>'big_image','label'=>'Big Image:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'text_title_en','label'=>'English Text Title:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'text_title_ar','label'=>'Arabic Text Title:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'text_en','label'=>'English Text:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'text_ar','label'=>'Arabic Text:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'youtube_id','label'=>'Youtube Video ID:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'youtube_title_en','label'=>'Youtube Video English Title:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'youtube_title_ar','label'=>'Youtube Video Arabic Title:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'youtube_text_en','label'=>'Youtube Video English Text:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'youtube_text_ar','label'=>'Youtube Video Arabic Text:'])


            @include('Admin.form_parcials.published')
            {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

    {!!Form::close()!!}
@endsection
