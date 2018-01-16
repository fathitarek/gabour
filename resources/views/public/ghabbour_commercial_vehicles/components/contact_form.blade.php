<form id="form1" name="form1" action="/ghabbour_commercial_vehicles/contact_us/send" method="post">
  <input name="_token" hidden value="{!! csrf_token() !!}" />
    <div class="btn-group col-sm-offset-2 col-sm-4">
      {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

            @if(count($page['contact_form']['special_listing_2_data']))

                <select name="website_id_en" id="website_id_en" class="btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <option value="">Please Select Website</option>
                     @foreach($page['contact_form']['special_listing_2_data'] as $index =>$website)
                        <option value="{{$website->id}}">{{$website->display_name_en}}</option>
                     @endforeach
                </select>
            @endif

            
             @if(count($page['contact_form']['special_listing_2_data']))

                <select style="display:none" name="website_id_ar" id="website_id_ar" class="btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <option value="">اختر الموقع</option>
                     @foreach($page['contact_form']['special_listing_2_data'] as $index =>$website)
                        <option value="{{$website->id}}">{{$website->display_name_ar}}</option>
                     @endforeach
                </select>
            @endif

{{--{!!Form::select('brand',[null=>'SELECT A BRAND']+--}}
       {{--$brands,null,--}}
       {{--['class'=> 'btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12','data-toggle'=>'dropdown', 'aria-haspopup' =>'true', 'aria-expanded'=>'false']) !!}--}}
{{--{!!Form::select('brand',[null=>'SELECT A BRAND']+--}}
       {{--$brands,null,--}}
       {{--['class'=> 'btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12','data-toggle'=>'dropdown', 'aria-haspopup' =>'true', 'aria-expanded'=>'false']) !!}--}}


<!--
      <select class="btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <option>SELECT A BRAND
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </option>
        <option>SELECT A BRAND
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </option>
    </select> -->
    </div>
  <div class="btn-group col-sm-4" id="city">

            @if(count($page['contact_form']['special_listing_1_data']))

                <select name="city_id_en" id="city_id_en" class="btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <option value="">Please Select City</option>
                     @foreach($page['contact_form']['special_listing_1_data'] as $index =>$city)
                        <option value="{{$city->id}}">{{$city->name_en}}</option>
                     @endforeach
                </select>
            @endif
            
             @if(count($page['contact_form']['special_listing_1_data']))

             <select style="display:none" name="city_id_ar" id="city_id_ar" class="btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <option value="">اختر المدينه</option>
                     @foreach($page['contact_form']['special_listing_1_data'] as $index =>$city)
                        <option value="{{$city->id}}">{{$city->name_ar}}</option>
                     @endforeach
                </select>
            @endif 
            
      {{--{!!Form::select('city',[null=>'CHOOSE A CITY']+--}}
                {{--$cities,null,--}}
                {{--['class'=> 'btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12','data-toggle'=>'dropdown', 'aria-haspopup' =>'true', 'aria-expanded'=>'false']) !!}--}}

      {{--{!!Form::select('city',[null=>'CHOOSE A CITY']+--}}
                {{--$cities,null,--}}
                {{--['class'=> 'btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12','data-toggle'=>'dropdown', 'aria-haspopup' =>'true', 'aria-expanded'=>'false']) !!}--}}


      <!-- <select class="btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <option>CHOOSE A CITY <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </option>
        <option>SELECT A BRAND <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </option>
    </select> -->

    </div>
<!-- <input name="name" type="text" class="col-sm-8 col-sm-offset-2 col-xs-12" id="name" placeholder="NAME"> -->
     {!!Form::text('name',null,['class'=> 'col-sm-8 col-sm-offset-2 col-xs-12','id'=>'name', 'placeholder'=>'NAME']) !!}
     {!! $errors->first('name', '<div class="error col-sm-8 col-sm-offset-2 col-xs-12">:message</div>')  !!}
     {!!Form::text('mobile',null,['class'=> 'col-sm-8 col-sm-offset-2 col-xs-12','id'=>'mobile', 'placeholder'=>'MOBILE']) !!}
     {!!Form::email('email',null,['class'=> 'col-sm-8 col-sm-offset-2 col-xs-12','id'=>'name3', 'placeholder'=>'E-MAIL']) !!}
     {!! $errors->first('email', '<div class="error col-sm-8 col-sm-offset-2 col-xs-12">:message</div>')  !!}
     {!!Form::text('message',null,['class'=> 'col-sm-8 col-sm-offset-2 col-xs-12','id'=>'message', 'placeholder'=>'MESSAGE']) !!}
     {!! $errors->first('message', '<div class="error col-sm-8 col-sm-offset-2 col-xs-12">:message</div>')  !!}
     {!!Form::hidden('website',$current_website->name,['class'=> 'form-control','value'=>$current_website->id]) !!}
     
      {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

     {!!Form::submit('submit',['class'=>'col-sm-3 col-sm-offset-7 col-xs-10 col-xs-offset-1','id'=>'submit','value'=>'SUBMIT']) !!}
    <!-- <input name="mobile" type="number" class="col-sm-8 col-sm-offset-2 col-xs-12" id="mobile" placeholder="MOBILE">
    <input name="email" type="email" class="col-sm-8 col-sm-offset-2 col-xs-12" id="name3" placeholder="E-MAIL">
    <input name="message" type="text" class="col-sm-8 col-sm-offset-2 col-xs-12" id="message" placeholder="MESSAGE">
    <input name="submit" type="submit" class="col-sm-3 col-sm-offset-7 col-xs-10 col-xs-offset-1" id="submit" value="SUBMIT"> -->
  </form>