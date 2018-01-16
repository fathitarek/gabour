@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a href="{{action('ProductController@index')}}">Product</a> / <span>Add New</span></p></div>
    <hr/>

        {!!Form::open(['action'=>'ProductController@index','files' => true])!!}
            @include('Admin.form_parcials.universal_text_field',['name'=>'title','label'=>'English  Name:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'title_ar','label'=>'Arabic  Name:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'model','label'=>'Model:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'note','label'=>'Note:'])
            @include('Admin.form_parcials.universal_text_field',['name'=>'link','label'=>'Link:'])
            @include('Admin.form_parcials.upload_field',['name'=>'pdf','label'=>'Pdf:'])

               @include('Admin.form_parcials.upload_field',['name'=>'image','label'=>'Image:'])
          @if ($errors->has('image'))
          <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('image') }}
          </div>
          @endif
          <br>
          <label> Categories :</label>
          <select name="category_id" required="required">
             <option value=""> Please Select Category</option>

        @foreach($categories as $category)

        
        <option value="{{$category->id}}"> {{$category->name}}</option>
          <br>
          @endforeach
          </select>

              
            {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}
            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
