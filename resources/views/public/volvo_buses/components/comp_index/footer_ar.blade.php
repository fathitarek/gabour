<div class="row footer">
    <div class="col-md-10 col-md-offset-1">
        <div class="row footerMega">
            @foreach($page['footer_ar']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)
            @if($menu_item->menu_item_id==0)
            @if(count($menu_item->menuItems))
            <div class="col-md-3">
                <h5>{{$menu_item->display_name}}</h5>
                @foreach($menu_item->menuItems as $sub_index =>$sub_menu_item)
@if($sub_menu_item->published==1)
                @if($sub_menu_item->display_name =='Facebook')
                <a href="{{$sub_menu_item->url}}"><i class="fa  fa-facebook-square"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-left"></span></a>
                @elseif($sub_menu_item->display_name=='Twitter')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-twitter"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-left"></span></a>
                @elseif($sub_menu_item->display_name=='Google+')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-google-plus"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-left"></span></a>
                @elseif($sub_menu_item->display_name=='Youtube')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-youtube-play"></i>  {{$sub_menu_item->display_name}}<span class="glyphicon glyphicon-menu-left"></span></a>
                @elseif($sub_menu_item->display_name=='LinkedIn')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-linkedin"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-left"></span></a>
            @elseif($sub_menu_item->display_name=='Pinterest')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-pinterest"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-left"></span></a>
           @elseif($sub_menu_item->display_name=='Flickr')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-flickr"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-left"></span></a>
           
                @else
            <a href="{{$sub_menu_item->url}}">{{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-left"></span></a>
            @endif
             @endif
            @endforeach
            
        </div>
            @endif 
            @endif
            @endforeach 
        </div>


        
    </div>
<div class="col-md-10 col-md-offset-1 footerBlack">
            <a href="#">www.volvogroup.com </a>
            |
            <a href="/volvo_buses/contact_us_ar"> Contact Us</a>
         </div>
        <div class="col-md-10 col-md-offset-1 text-center volvoCopyright">
            <img src="images/logoVolvo.png" alt="volvo">   Copyright AB Volvo 2017
        </div>
      </div>
