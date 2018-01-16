<div class="row" id="mainNav">
        <div class="col-md-10 col-md-offset-1">
          <nav class="navbar navbar-default yamm">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar2" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->


<div class="collapse navbar-collapse" id="defaultNavbar2">
                <ul class="nav navbar-nav">
<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['main_menu']['special_listing_1_data'][0]->display_name}}</a>
    <ul class="dropdown-menu">
        <li>
            <div class="row noPaddingX">
                <div class="col-md-9 rightBorderX">
                    <h4>{{$page['main_menu']['component_data']['title_product']}}</h4>
                    <p>{{$page['main_menu']['component_data']['desc_product']}}</p>
                    <div class="row">
                        <div class="col-md-4">
                        @foreach($page['main_menu']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)
                          @if($menu_item->published==1)
                            <a href="{{$menu_item->url}}">
                                <div>
                                    <img src="/volvo_ce/images/menu_items/{{$menu_item->image_on}}" alt="Placeholder image">
                                    <span>{{$menu_item->name}} </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </div>
                            </a>

                        @if(($index+1)%3==0)
                            </div>
                        <div class="col-md-4">
                            @endif
                             @endif
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>

<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['main_menu']['special_listing_2_data'][0]->display_name}}</a>
    <ul class="dropdown-menu">
        <li>
            <div class="row noPaddingX">
                <div class="col-md-9 rightBorderX">
                    <h4>{{$page['main_menu']['component_data']['title_attachment']}}</h4>
                    <p>{{$page['main_menu']['component_data']['desc_attachment']}}</p>
                   <div class="row">
                        <div class="col-md-4">
                        @foreach($page['main_menu']['special_listing_2_data'][0]->menuItems as $index =>$menu_item)
                          @if($menu_item->published==1)
                            <a href="{{$menu_item->url}}">
                                <div>
                                    <img src="/volvo_ce/images/menu_items/{{$menu_item->image_on}}" alt="Placeholder image">
                                    <span>{{$menu_item->name}} </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </div>
                            </a>

                        @if(($index+1)%3==0)
                            </div>
                        <div class="col-md-4">
                            @endif
                            @endif
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['main_menu']['special_listing_3_data'][0]->display_name}}</a>
    <ul class="dropdown-menu">
        <li>
            <div class="row noPaddingX">
                @foreach($page['main_menu']['special_listing_3_data'][0]->menuItems as $index =>$menu_item)
                 @if($menu_item->published==1)
                <div class="rightBorderX col-md-3">
                    <img src="/volvo_ce/images/menu_items/{{$menu_item->image_on}}" alt="volvo" class="img-responsive">
                    <a href="{{$menu_item->url}}">
                        <h4>{{$menu_item->name}}<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                    </a>
                    <p>{{$menu_item->description}}</p>
                </div>
                  @endif
                @endforeach
            </div>
        </li>
    </ul>
</li>
<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['main_menu']['special_listing_4_data'][0]->display_name}}</a>
    <ul class="dropdown-menu">
        <li>
            <div class="row noPaddingX">
                <div class="col-md-9 rightBorderX">
                    <div class="row">
                        @foreach($page['main_menu']['special_listing_4_data'][0]->menuItems as $index =>$menu_item)
                        @if($menu_item->published==1)
                        <div class="col-md-4"><a href="{{$menu_item->url}}">
                                <h4>{{$menu_item->name}} <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                            </a>
                            <p>{{$menu_item->description}}</p>
                        </div>
                         @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
 {{--<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['main_menu']['special_listing_5_data'][0]->display_name}}</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                      {{--<li>--}}
                        {{--<div class="row noPaddingX">--}}
                          {{--<div class="col-md-9 rightBorderX">--}}
                            {{--<div class="row">--}}
                                {{--@foreach($page['main_menu']['special_listing_5_data'][0]->menuItems as $index =>$menu_item)--}}
                             {{--@if($menu_item->published==1)--}}
                                {{--<div class="col-md-4"><a href="{{$menu_item->url}}">--}}
                              {{--<h4>{{$menu_item->name}} <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>--}}
                              {{--</a>--}}
                                {{--<p>{{$menu_item->description}}</p>--}}
                               {{--</div>--}}
                             {{--@endif--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                      {{--</li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
 <li class="dropdown yamm-fw"><a id="locations" href="{{$page['main_menu']['special_listing_6_data'][0]->url}}"  role="button" aria-haspopup="true" aria-expanded="false">{{$page['main_menu']['special_listing_6_data'][0]->display_name}}</a></li>
 <li class="dropdown yamm-fw"><a href="{{$page['main_menu']['special_listing_7_data'][0]->url}}"  role="button" aria-haspopup="true" aria-expanded="false">{{$page['main_menu']['special_listing_7_data'][0]->display_name}}</a></li>
     </ul>
<!--       <ul class="nav navbar-nav navbar-right">
                  <li><a href="#" id="productSelector">Product Selector</a></li>
                </ul>-->
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
        </div>
      </div>