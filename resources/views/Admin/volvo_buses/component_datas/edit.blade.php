@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a>{{$current_website->display_name_en}}   Page</a> / <span>Edit</span></p></div>
<hr/>

{!!Form::model($record,['method' =>'PATCH', 'action'=>['ComponentDataController@update',$record->id],'files' => true])!!}

        <div class="form-group">
            {!!Form::label('component_template_id','Component Template:')!!}
            {!!Form::select('component_template_id',[null=>'Please Select Component Template']+$component_templates,null,['class'=> 'form-control','onChange'=>'renderFormFields()']) !!}
        </div>
        @if ($errors->has('component_template_id'))
        <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('component_template_id') }}
        </div>
        @endif
 @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English Name:'])
    @if ($errors->has('name'))
    <div class="error">
      <i class="fa fa-times-circle"></i>
      {{ $errors->first('name') }}</div>
      @endif

    @foreach(json_decode($record->componentTemplate['component_structure']) as $index => $field)

             @if(starts_with($index,'field'))
                 <?php
                    $parameters=[];
                    foreach($field as $f_index => $value){
                        $parameters[$f_index]=$value;
                   }
                   if(isset(json_decode($record['component_data'],true)[$field->name])){
                       $parameters['value']=json_decode($record['component_data'],true)[$field->name];
                   }
                   else{
                       $parameters['value']='';

                   }

                   //print_r($parameters);
                ?>
                @include('Admin.components_parcials.'.$parameters['type'],$parameters)
             @endif

    @endforeach
    {{--@include('Admin.form_parcials.universal_textarea_field',['name'=>'component_data','label'=>'Component Data:'])--}}
                        {{--@if ($errors->has('component_data'))--}}
                        {{--<div class="error">--}}
                          {{--<i class="fa fa-times-circle"></i>--}}
                          {{--{{ $errors->first('component_data') }}--}}
                        {{--</div>--}}
                        {{--@endif--}}
                      {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

    @include('Admin.form_parcials.published')
    @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Update'])
{!!Form::close()!!}

{{--@include('errors.list') --}}


@endsection
