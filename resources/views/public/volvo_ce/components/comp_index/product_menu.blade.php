<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['product_menu']['special_listing_1_data'][0]->display_name}}</a>
    <ul class="dropdown-menu">

        <li>
            <div class="row noPaddingX">
                <div class="col-md-9 rightBorderX">
                    <h4>{{$page['product_menu']['component_data']['title']}}</h4>
                    <p>{{$page['product_menu']['component_data']['desc']}}</p>
                    <div class="row">
                        @foreach($page['product_menu']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)

                        <div class="col-md-4" >
                            @if(($index+1)%3!=0)
                            <a href="{{$menu_item->url}}">
                                <div>
                                    <img src="/volvo_ce/images/menu_items/{{$menu_item->image_on}}" alt="Placeholder image">
                                    <span>{{$menu_item->name}} </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </div>
                            </a>
                           
                            @else
                            
                            <div class="col-md-4">
                                <a href="{{$menu_item->url}}">
                                    <div>
                                        <img src="/volvo_ce/images/menu_items/{{$menu_item->image_on}}" alt="Placeholder image">
                                        <span>{{$menu_item->name}} </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    </div>
                                </a>
                            </div>
                            @endif
                        </div>
                                                  
                        @endforeach 
                    </div>
                </div>
                <!--                        <div class="col-md-3">
                                          <h4>Other offerings</h4>
                                          <p>From tailor-made Special Application Solutions to rental and used equipment, find out more about what we offer.</p>
                                                                  <a href="#">Used Equipment<span class="glyphicon glyphicon-menu-right
                                                                "></span></a><br>
                                                                <a href="#">National Rental Accounts <span class="glyphicon glyphicon-menu-right"></span></a><br>
                                                                <a href="#">Special Application Solutions <span class="glyphicon glyphicon-menu-right"></span></a>						<br>
                                                                <a href="#">Other Products <span class="glyphicon glyphicon-menu-right
                                                                "></span></a><br>
                                                                <a href="#">Merchandise <span class="glyphicon glyphicon-menu-right
                                                                "></span></a> </div>-->
            </div>
        </li>
    </ul>
</li>