@extends('Admin.'.$current_website->name.'.app')

@section('content')

<div class="bread-crumb"><p><a >{{$current_website->display_name_en}}  Template</a> / <span>Add New</span></p></div>
    <hr/>

        {!!Form::open(['action'=>'TemplateController@index','files' => true])!!}
            @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English Name:'])
            @if ($errors->has('name'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('name') }}</div>
              @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'path','label'=>'View Path:'])
              @if ($errors->has('path'))
              <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('path') }}
              </div>
              @endif

              @include('Admin.form_parcials.universal_textarea_field',['name'=>'includes','label'=>'Includes:'])
                @if ($errors->has('includes'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('includes') }}
                </div>
                @endif
                @include('Admin.form_parcials.universal_textarea_field',['name'=>'footer_includes','label'=>'Footer Includes:'])
                @if ($errors->has('footer_includes'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('footer_includes') }}
                </div>
                @endif
                <!-- description AR Field -->
                <div class="form-group">
                {!! Form::label('slots', 'Slots:') !!}
                {!!Form::text('slots',null,['class'=> 'form-control','data-role'=>'tagsinput']) !!}
                </div>

                 {{--@include('Admin.form_parcials.universal_textarea_field',['name'=>'slots','label'=>'Slots:'])--}}
                {{--@if ($errors->has('slots'))--}}
                {{--<div class="error">--}}
                  {{--<i class="fa fa-times-circle"></i>--}}
                  {{--{{ $errors->first('slots') }}--}}
                {{--</div>--}}
                {{--@endif--}}
              {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}


            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
