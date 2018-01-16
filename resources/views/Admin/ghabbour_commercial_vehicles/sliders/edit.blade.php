@extends('Admin.'.$current_website->name.'.app')

@section('content')
<style>
form input[type="text"], select {
  width:400px !important;
}
.show_items{
  font-size: 22px;
}
</style>
<div class="bread-crumb"><p><a href="/Admin/{{$current_website->name}}/sliders">{{$current_website->display_name_en}}  Sliders</a> / <span>Update Slider</span></p></div>
  <hr/>

    {!!Form::model($record,['method' =>'PATCH', 'action'=>['SliderController@update',$record->id],'files' => true])!!}
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
            {{-- {{action('SliderItemController@show',$record->id)}} --}}
             <hr/>
             <br/>
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])

        {!!Form::close()!!}
    {{--@include('errors.list') --}}

@endsection
