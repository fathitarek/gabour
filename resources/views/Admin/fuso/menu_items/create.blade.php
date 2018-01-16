@extends('Admin.'.$current_website->name.'.app')

@section('content')
<div class="bread-crumb"><p><a >{{$current_website->display_name_en}}  Menu Item</a> / <span>Add New</span></p></div>
    <hr/>

        {!!Form::open(['action'=>'MenuItemController@index','files' => true])!!}


            @include('Admin.form_parcials.universal_select_field',['name'=>'menu_id','label'=>'Menu:','default_option'=>'Please Select Menu','list_items'=>$menus])
            @if ($errors->has('menu_id'))
            <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('menu_id') }}
            </div>
            @endif
              @include('Admin.form_parcials.universal_select_field',['name'=>'menu_item_id','label'=>'Menu Item:','default_option'=>'Please Select Menu Item','list_items'=>$menu_items])
                @if ($errors->has('menu_item_id'))
                <div class="error">
                    <i class="fa fa-times-circle"></i>
                    {{ $errors->first('menu_item_id') }}
                </div>
                @endif
            @include('Admin.form_parcials.universal_text_field',['name'=>'name','label'=>'English Name:'])
            @if ($errors->has('name'))
            <div class="error">
              <i class="fa fa-times-circle"></i>
              {{ $errors->first('name') }}</div>
              @endif

            @include('Admin.form_parcials.universal_text_field',['name'=>'display_name','label'=>'Display Name:'])
              @if ($errors->has('display_name'))
              <div class="error">
                <i class="fa fa-times-circle"></i>
                {{ $errors->first('display_name') }}
              </div>
              @endif
               @include('Admin.form_parcials.universal_text_field',['name'=>'url','label'=>'URL:'])
                @if ($errors->has('url'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('url') }}
                </div>
                @endif

                @include('Admin.form_parcials.universal_textarea_field',['name'=>'description','label'=>'Description:'])
                @if ($errors->has('description'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('description') }}
                </div>
                @endif
                @include('Admin.form_parcials.upload_field',['name'=>'image_on','label'=>'Image On:'])
                  @if ($errors->has('image_on'))
                  <div class="error">
                    <i class="fa fa-times-circle"></i>
                    {{ $errors->first('image_on') }}
                  </div>
                  @endif

                  @include('Admin.form_parcials.upload_field',['name'=>'image_off','label'=>'Image Off:'])
                @if ($errors->has('image_off'))
                <div class="error">
                  <i class="fa fa-times-circle"></i>
                  {{ $errors->first('image_off') }}
                </div>
                @endif

              {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}


            @include('Admin.form_parcials.published')
            @include('Admin.form_parcials.submit_btn',['submit_btn_text'=>'Add'])

        {!!Form::close()!!}

    {{--@include('errors.list') --}}


@endsection
