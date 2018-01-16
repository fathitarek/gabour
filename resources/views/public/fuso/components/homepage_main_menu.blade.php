        <div id="HEADER_WRAP">
          <h1> <a href="/fuso/home"> <img class="pc_display" src="./PartsAccessories_files/NewLogo.png" alt="mitsubishifuso"> <img class="mb_display" src="./PartsAccessories_files/NewLogo.png" alt="mitsubishifuso"></a></h1>
          <div id="MOBILE_MENU_TRIGGER" class="mb_display"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html#"><img src="./PartsAccessories_files/img_hdr_menu.png" alt="Menu"></a></div>
          <div id="MENU_FIELD">
            <div id="MB_MENU_HEAD" class="clearfix mb_display">
              <div id="MOBILE_MENU_CLOSE"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html#"><img src="./PartsAccessories_files/img_hdr_menu_close.png" alt="Close"></a></div>
              <script src="./PartsAccessories_files/search_engine_zero.js.download"></script>
              <form action="http://www.mitsubishi-fuso.com/content/fuso/en/search_result.html" name="searchform" id="searchform">
                <dl class="clearfix">
                  <dt>
                    <input type="text" placeholder="Search" value="" id="keywords" name="keywords">
                  </dt>
                  <dd>
                    <input type="image" src="./PartsAccessories_files/null.gif" alt="" name="searchBtn2" id="searchBtn3">
                  </dd>
                </dl>
              </form>
              <script type="text/javascript" src="./PartsAccessories_files/brand"></script>
            </div>
            <div id="MENU_WRAPS">
                <nav>
                    <ul id="GLOBALMENU_FIELD">
                        {{--{{$page['homepage_main_menu']['special_listing_1_data'][0]->menuItems}}--}}
                        @foreach($page['homepage_main_menu']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)
                            @if($menu_item->menu_item_id==0)
                                @if(count($menu_item->menuItems))
                                        <li class="menu_all clearfix" id="{{$menu_item->name}}"> <a href="#" class="menu_all"> <img src="/fuso/images/menu_items/{{$menu_item->image_on}}" alt="{{$menu_item->display_name}}" class="p_gnv pc_display" data-pin-nopin="true" /> <span class="mb_icon mb_display"> <img src="./assets/mb_menu_products.png" alt="{{$menu_item->display_name}}" class="p_gnv" /></span> <span class="mb_txt mb_display">{{$menu_item->display_name}}</span></a>
                                            <ul class="submenu clearfix" style="display: none;">
                                                @foreach($menu_item->menuItems as $sub_index =>$sub_menu_item)
                                                    <li> <a href="{{$sub_menu_item->url}}" id="{{explode( '/', $sub_menu_item->url)[2]}}"> <img src="/fuso/images/menu_items/{{$sub_menu_item->image_on}}" alt="{{$sub_menu_item->display_name}}" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">{{$sub_menu_item->display_name}}</span></a></li>
                                                @endforeach


                                            </ul>
                                        </li>

                                @else
                                    <li class="gnv_jpnetwork menu_all clearfix pc_display"> <a href="{{$menu_item->url}}" class="menu_all"><img src="/fuso/images/menu_items/{{$menu_item->image_on}}" alt="{{$menu_item->display_name}}" class="p_gnv pc_display" /><span class="mb_icon mb_display"><img src="./assets/mb_menu_distributors.png" alt="{{$menu_item->display_name}}" class="p_gnv" /></span><span class="mb_txt mb_display">{{$menu_item->display_name}}</span></a></li>

                                @endif
                            @endif
                        @endforeach
                    </ul>
                </nav>
              <div id="MB_AREADETAIL" class="mb_display">
                <div class="block"></div>
              </div>
              <div id="MENU_LAST_AREA" class="mb_display"> </div>
            </div>
          </div>
          <div id="MB_DROP_DOWN" class="mb_display">
            <h2 id="MB_TITLE">Genuine Parts</h2>
            <ul id="DROP_LIST" style="display: none;">
              <li id="DROP_GL"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html">Global site</a></li>
              <li id="DROP_JP"><a href="http://www.mitsubishi-fuso.comindex.html">Japan site</a></li>
            </ul>
          </div>
        </div>

        <script>
            document.getElementById("{{$page->name}}").parentElement.parentElement.style="display: block";
            document.getElementById("{{$page->name}}").parentElement.parentElement.parentElement.className="menu_all clearfix selected";
        </script>