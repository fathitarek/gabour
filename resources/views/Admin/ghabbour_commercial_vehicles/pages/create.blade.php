@extends('Admin.'.$current_website->name.'.app')

@section('content')
<style>
    .edit_btn
        {
            width: 10%;
            float: left;
            margin-bottom: 10px;
            display: none!important;
        }
        div#slots_container::after {
            content: "";
            display: block;
            clear: both;
        }
</style>
<div class="bread-crumb"><p><a >{{$current_website->display_name_en}}  Pages</a> / <span>Add New</span></p></div>
    <hr/>

        {!!Form::open(['action'=>'PageController@index','files' => true])!!}
            @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English Name:'])
            @if ($errors->has('name'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('name') }}</div>
              @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'title','label'=>'Page Title:'])
              @if ($errors->has('title'))
              <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('title') }}
              </div>
              @endif

                <div class="form-group">
                  {!!Form::label('template_id','Page Template:')!!}
                  {!!Form::select('template_id',[null=>'Please Select Template']+$templates,null,['class'=> 'form-control','onChange'=>'fetchTemplateSlots()']) !!}
              </div>
              <div id="slots_container" ></div>

              @include('Admin.form_parcials.universal_text_field',['name'=>'keywords','label'=>'Keywords:'])
                @if ($errors->has('keywords'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('keywords') }}
                </div>
                @endif
                @include('Admin.form_parcials.universal_text_field',['name'=>'description','label'=>'Description:'])
                @if ($errors->has('description'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('description') }}
                </div>
                @endif
                {{--@include('Admin.form_parcials.universal_select_field',['name'=>'template_id','label'=>'Template:','default_option'=>'Please Select Template','list_items'=>$templates])--}}
                {{--@if ($errors->has('template_id'))--}}
                {{--<div class="error">--}}
                    {{--<i class="fa fa-times-circle"></i>--}}
                    {{--{{ $errors->first('template_id') }}--}}
                {{--</div>--}}
                {{--@endif--}}

              {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}


            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

        {!!Form::close()!!}
             <div class="form-group">
                  {!!Form::select('component_list_template',[null=>'Please Select Component'],null,['class'=> 'form-control col-sm-6','style'=>'display:block','id'=>'component_list_template']) !!}
              </div>
    {{--@include('errors.list') --}}

        <script>
           function pageOnload()
           {
                getComponents();
           }
        </script>
@endsection
