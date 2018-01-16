
                  <li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['attachment_menu']['special_listing_1_data'][0]->display_name}}</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="row noPaddingX">
                          <div class="col-md-9 rightBorderX">
                            <h4>{{$page['attachment_menu']['component_data']['title']}}</h4>
                            <p>{{$page['attachment_menu']['component_data']['desc']}}</p>
                            <div class="row">
                                 @foreach($page['attachment_menu']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)

                              <div class="col-md-4">
                                   @if(($index+1)%3!=0)
                                  
                                  <a href="{{$menu_item->url}}">
                                <div><img src="/volvo_ce/images/menu_items/{{$menu_item->image_on}}" alt="Placeholder image"> <span>{{$menu_item->name}}</span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                </a> 
                                   @else
                                   <div class="col-md-4">
                                   
                                  
                                  <a href="{{$menu_item->url}}">
                                <div><img src="/volvo_ce/images/menu_items/{{$menu_item->image_on}}" alt="Placeholder image"> <span>{{$menu_item->name}}</span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                </a> 
                                   </div>
                                   @endif
<!--                                  <a href="#">
                                  <div><img src="images/menu14.jpg" alt="Placeholder image"> <span>Compact Wheel Loaders </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                  </a> <a href="#">
                                    <div><img src="images/menu17.jpg" alt="Placeholder image"> <span>ABG Tracked Pavers </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                  </a>-->
                              
                              </div>
                                 @endforeach
                                
<!--                                
                              <div class="col-md-4"> <a href="#">
                                <div><img src="images/menu11.jpg" alt="Placeholder image"> <span>Wheeled Excavators </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                </a> <a href="#">
                                  <div><img src="images/menu15.jpg" alt="Placeholder image"> <span>Large Wheel Loaders </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                  </a> <a href="#">
                                    <div><img src="images/menu17.jpg" alt="Placeholder image"> <span>ABG Wheeled Pavers </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                  </a> </div>
                              <div class="col-md-4"> <a href="#">
                                <div><img src="images/menu12.jpg" alt="Placeholder image"> <span>Crawler Excavators </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                </a> <a href="#">
                                  <div><img src="images/menu16.jpg" alt="Placeholder image"> <span>Skid Steer Loaders </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                                </a> </div>-->
                            </div>
                          </div>
<!--                          <div class="col-md-3">
                            <h4>Hydraulic breakers</h4>
                            <p>Consistent impact frequency and power ensure productivity on any job site.</p>
                            <a href="#">Volvo hydraulic breakers <span class="glyphicon glyphicon-menu-right
						"></span></a><br>
                            </div>-->
                        </div>
                      </li>
                    </ul>
</li>