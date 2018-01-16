<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$page['parts_menu']['special_listing_1_data'][0]->display_name}}</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="row noPaddingX">
                            
                           @foreach($page['parts_menu']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)

                          <div class="rightBorderX col-md-3">       
                            <img src="/volvo_ce/images/menu_items/{{$menu_item->image_on}}" alt="volvo" class="img-responsive">
                            <a href="{{$menu_item->url}}">
                              <h4>{{$menu_item->name}}<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                            </a>
                            <p>{{$menu_item->description}}</p>
                          </div>
                           @endforeach
<!--                          <div class="rightBorderX col-md-3"> <img src="images/menu22.jpg" alt="volvo" class="img-responsive"> <a href="#">
                            <h4>Repair Parts <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                            </a>
                            <p>Volvo repair parts are a cost effective solution of giving a new lease of life to a hard working machine.</p>
                          </div>
                          <div class="rightBorderX col-md-3"> <img src="images/menu23.jpg" alt="volvo" class="img-responsive"> <a href="#">
                            <h4>Wear Parts <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                            </a>
                            <p>Volvo offers a wide range of wear parts that have been developed and tested for a large number of applications.</p>
                          </div>
                          <div class="rightBorderX col-md-3"> <img src="images/menu24.jpg" alt="volvo" class="img-responsive"> <a href="#" class="volvoGray margin-top">
                            <p><strong>Give your machine more bite</strong> </p>
                            </a>
                            <p>The self-sharpening Volvo Tooth System withstands high stress levels and is a result of our commitment to innovation.</p>
                          </div>-->
                        </div>
                      </li>
                    </ul>
                  </li>