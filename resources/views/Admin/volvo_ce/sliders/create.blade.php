@extends('Admin.'.$current_website->name.'.app')

@section('content')
<style>
form input[type="text"], select {
  width:400px !important;
}
</style>
<div class="bread-crumb"><p><a href="{{action('SliderController@index')}}">Sliders</a> / <span>Add New</span></p></div>
    <hr/>

        {!!Form::open(['action'=>'SliderController@index','files' => true])!!}
            @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'Name:'])
            @if ($errors->has('name'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('name') }}</div>
              @endif

               {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

            @include('Admin.form_parcials.universal_text_field',['name'=>'display_name','label'=>'Display Name:'])
              @if ($errors->has('display_name'))
              <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('display_name') }}
              </div>
              @endif

            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
