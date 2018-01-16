 <li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['services_menu']['special_listing_1_data'][0]->display_name}}</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="row noPaddingX">
                          <div class="col-md-9 rightBorderX">
                            
                            <div class="row">
                                @foreach($page['services_menu']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)
                              <div class="col-md-4"><a href="#">
                              <h4>{{$menu_item->name}} <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                              </a>
                                <p>{{$menu_item->description}}</p>
                               </div>
                                @endforeach
<!--                              <div class="col-md-4"><a href="#">
                                <h4>Customer Support Agreements <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                                </a>
                                <p>With four agreements to choose from, you can pick the best package to suit your needs.</p>
                              </div>
                              <div class="col-md-4"><a href="#">
                                <h4>Mobile Van <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                                </a>
                                <p>With four agreements to choose from, you can pick the best package to suit your needs.</p>
                              </div>-->
                            </div>
                          </div>
<!--                          <div class="col-md-3"><img src="images/volvo103.jpg" alt="volvo" class="img-responsive"><a href="#" class="volvoGray margin-top">
                          <p><strong>Give your machine more bite</strong></p>
                          </a>
                            <p>The self-sharpening Volvo Tooth System withstands high stress levels and is a result of our commitment to innovation.</p>
                            <a href="#">Volvo hydraulic breakers <span class="glyphicon glyphicon-menu-right"></span></a><br>
                          </div>-->
                        </div>
                      </li>
                    </ul>
                  </li>