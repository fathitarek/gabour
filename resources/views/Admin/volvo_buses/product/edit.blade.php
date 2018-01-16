@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a href="{{action('ProductController@index')}}">Product</a> / <span>Add New</span></p></div>
<hr/>

{!!Form::model($record,['method' =>'PATCH', 'action'=>['ProductController@update',$record->id],'files' => true])!!}
            @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'name:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'title','label'=>'Title:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'title_ar','label'=>'Arabic Title:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'title2','label'=>'Title2:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'display_name','label'=>'Display Name:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'model','label'=>'Model:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'note','label'=>'Note:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'link','label'=>'Link:'])
            @include('Admin.form_parcials.upload_field',['name'=>'image','label'=>'Image:'])
            @include('Admin.form_parcials.upload_field',['name'=>'big_image','label'=>'Big Image:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'text_title_en','label'=>'English Text Title:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'text_title_ar','label'=>'Arabic Text Title:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'text_en','label'=>'English Text:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'text_ar','label'=>'Arabic Text:'])
            @include('Admin.form_parcials.upload_field',['name'=>'pdf','label'=>'PDF:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'youtube_id','label'=>'Youtube Video ID:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'youtube_title_en','label'=>'Youtube Video English Title:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'youtube_title_ar','label'=>'Youtube Video Arabic Title:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'description_en','label'=>'English Description:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'description_ar','label'=>'Arabic Description:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'short_description_en','label'=>'English Short Description:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'short_description_ar','label'=>'Arabic Short Description:'])
            @include('Admin.form_parcials.universal_textarea_field',['name'=>'product_specs','label'=>'Product Specs:'])
            <label> Categories :</label>
            <select name="category_id" required="required">
                <option value="" > Please Select Category</option>

                @foreach($categories as $category)
                <?php if($category->id == $record->category_id){?>
                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                <?php }else{?>
                <option value="{{$category->id}}" > {{$category->name}}</option>

            <br>
        <?php } ?>
          @endforeach
          </select>
{!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}
@include('Admin.form_parcials.published')
@include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])
{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
