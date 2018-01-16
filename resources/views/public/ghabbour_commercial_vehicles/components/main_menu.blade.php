<nav class="navbar navbar-default navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="tel: 19216" class="navbar-brand hidden-sm hidden-md hidden-lg" id="hotlineMobile"> <img src="/{{$current_website->name}}/assets/hotline.png" alt="" width="100" height="35" /></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand logoX" href="/"> <img src="/{{$current_website->name}}/assets/logo.png" alt="" width="118" height="54" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="topFixedNavbar1">
            <ul class="nav navbar-nav">

            @foreach($page['main_menu']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)
                @if($menu_item->menu_item_id==0)
                    @if(count($menu_item->menuItems))
                         <li class="dropdown"> <a href="{{$menu_item->url}}"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menu_item->display_name}}&nbsp;<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                            <ul class="dropdown-menu row">
                                @foreach($menu_item->menuItems as $sub_index =>$sub_menu_item)
                                             @if($sub_menu_item->published==1)

                                <li><a href="{{$sub_menu_item->url}}" >{{$sub_menu_item->display_name}}</a></li>
                                                @endif

                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="{{$menu_item->url}}" id="">{{$menu_item->display_name}}</a></li>
                    @endif
                @endif
            @endforeach

            </ul>
            <ul class="nav navbar-nav navbar-right" id="hotlineMenu">
                <li id="languageX"> <a id="arabic" href="/ghabbour_commercial_vehicles/home_ar">AR </a>/<a id="english" href="/ghabbour_commercial_vehicles/home" class="activeX"> EN</a> </li>
                <li class="hidden-xs">
                    <a href="tel: 19216" id="hotlineX"> <img src="/{{$current_website->name}}/assets/hotline.png" width="100" height="35" alt="" /></a>
                </li>
            </ul>
            {{--<form class="navbar-form navbar-right" id="menuSearch" role="search">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="text" class="form-control transparent-input" placeholder="Search...">--}}
                    {{--<span class="input-group-btn">--}}
            {{--<button class="btn searchIcon" type="submit"> <img src="/{{$current_website->name}}/assets/searchIcon.png" alt=""/> </button>--}}
          {{--</span> </div>--}}
                {{--<!-- /input-group -->--}}
            {{--</form>--}}
        </div>
        <!-- /.navbar-collapse -->
        <!-- /.container-fluid -->
    </nav>
    <script>
        document.getElementById("{{$page->name}}").className="activeX";
    </script>

    {{--{{$page['main_menu']['special_listing_1_data'][0]->menuItems}}--}}
   