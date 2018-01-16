<footer class="row">
    <div class="col-sm-10 col-sm-offset-1">
        
        <ul class="nav navbar-nav navbar-right">
            @foreach($page['footer_menu']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)
                @if($menu_item->menu_item_id==0)
                    @if(count($menu_item->menuItems))
            <li><a href="{{$menu_item->url}}">{{$menu_item->display_name}}</a>
            <ul class="nav navbar-nav navbar-right">
                                @foreach($menu_item->menuItems as $sub_index =>$sub_menu_item)
                                <li class="submenuFooter"><a href="{{$sub_menu_item->url}}" >{{$sub_menu_item->display_name}}</a></li>
                                @endforeach
                            </ul></li>
            @else
                        <li><a href="{{$menu_item->url}}">{{$menu_item->display_name}}</a></li>
                    @endif
                @endif
            @endforeach
        </ul>
    </div>
    <div  id="mh"class="col-sm-5 col-sm-offset-1 mortimerHarvey col-xs-6">All Rights Reserved 2017</div>
    <div class="right col-sm-5 mortimerHarvey col-xs-6">Website by <a href="http://mortimerharvey.com/" target="_blank">Mortimer Harvey</a></div>
    <div class="row"> </div>
</footer>