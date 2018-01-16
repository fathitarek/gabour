@extends('Admin.'.$current_website->name.'.app')

@section('content')
<?php
$component_template_id=null;

if(isset($_REQUEST['component_template_id'])&&($_REQUEST['component_template_id']!=''))
{
    $component_template_id=$_REQUEST['component_template_id'];

}


?>
<script>

    function renderFormFields(){
        var url = '/Admin/{{$current_website->name}}/component_datas/create';
        var params= 'component_template_id='+document.getElementById('component_template_id').value;
        window.location.href=url+'?'+params;
    }
</script>
<div class="bread-crumb"><p><a >{{$current_website->display_name_en}}  Template</a> / <span>Add New</span></p></div>
    <hr/>

        {!!Form::open(['action'=>'ComponentDataController@index','files' => true])!!}
        {{--@include('Admin.form_parcials.universal_select_field',['name'=>'component_template_id','label'=>'Component Template:','default_option'=>'Please Select Component Template','list_items'=>$component_templates])--}}

        <div class="form-group">
            {!!Form::label('component_template_id','Component Template:')!!}
            {!!Form::select('component_template_id',[null=>'Please Select Component Template']+$component_templates,$component_template_id,['class'=> 'form-control','onChange'=>'renderFormFields()']) !!}
        </div>
        @if ($errors->has('component_template_id'))
        <div class="error">
            <i class="fa fa-times-circle"></i>
            {{ $errors->first('component_template_id') }}
        </div>
        @endif

        @if(isset($selected_component_template)&&($selected_component_template!=''))
            @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English Name:'])
            @if ($errors->has('name'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('name') }}</div>
            @endif
            {{--@include('Admin.form_parcials.universal_text_field',['name'=>'slot_name','label'=>'Slot Name:'])--}}
            @foreach(json_decode($selected_component_template['component_structure']) as $index => $field)

             @if(starts_with($index,'field'))
                 <?php
                    $parameters=[];
                    foreach($field as $f_index => $value){
                        $parameters[$f_index]=$value;
                   }
                ?>
                @include('Admin.components_parcials.'.$parameters['type'],$parameters)
             @endif

            @endforeach
            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])
        @endif


        {{--@include('Admin.form_parcials.universal_textarea_field',['name'=>'component_structure','label'=>'Component Structure:'])--}}
        {{--@if ($errors->has('component_structure'))--}}
        {{--<div class="error">--}}
          {{--<i class="fa fa-times-circle"></i>--}}
          {{--{{ $errors->first('component_structure') }}--}}
        {{--</div>--}}
        {{--@endif--}}
        {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

        {!!Form::close()!!}
    @include('errors.list')


@endsection
