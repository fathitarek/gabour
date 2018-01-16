{{--{{$page['carosel_product']['special_listing_1_data'][0]}}--}}

<div class="row" id="carouselProduct">
        <div class="col-md-10 col-md-offset-1">
          <div class="carousel slide text-center" id="myCarousel" data-type="multi" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
            <?php
                $category_index=0;
            ?>
             @foreach($page['carosel_product']['special_listing_1_data'] as $index =>$category)
                @if($category->published==1)
                @if(!starts_with($category->name,'attachment'))

                        @if($category->category_id==0)
                            @if($category_index==0)
                              <div class="item active">
                                <div class="col-md-2 col-sm-6 col-xs-12"><a href="/volvo_ce/category?m=Category&item={{$category->name}}"><img src="/{{$current_website->name}}/images/categories/{{$category->small_image}}" class="img-responsive" alt="volvo"> <span>{{$category->display_name}} </span></a></div>
                                </div>
                            <?php
                                $category_index++;
                            ?>

                            @else
                                <div class="item">
                                    <div class="col-md-2 col-sm-6 col-xs-12"><a href="/volvo_ce/category?m=Category&item={{$category->name}}"><img src="/{{$current_website->name}}/images/categories/{{$category->small_image}}" class="img-responsive" alt="volvo"> <span>{{$category->display_name}}</span></a></div>
                                </div>

                            @endif
                        @endif
                    @endif
                @endif
              @endforeach
              {{--<div class="item">--}}
                {{--<div class="col-md-2 col-sm-6 col-xs-12"><a href="{{$page['carosel_product']['component_data']['link2']}}"><img src="/{{$current_website->name}}/uploads/{{$page['carosel_product']['component_data']['file2']}}" class="img-responsive" alt="volvo"> <span>{{$page['carosel_product']['component_data']['title2']}}</span></a></div>--}}
              {{--</div>--}}
              {{--<div class="item">--}}
                {{--<div class="col-md-2 col-sm-6 col-xs-12"><a href="{{$page['carosel_product']['component_data']['link3']}}"><img src="/{{$current_website->name}}/uploads/{{$page['carosel_product']['component_data']['file3']}}" class="img-responsive" alt="volvo"> <span>{{$page['carosel_product']['component_data']['title3']}}</span></a></div>--}}
              {{--</div>--}}
              {{--<div class="item">--}}
                {{--<div class="col-md-2 col-sm-6 col-xs-12"><a href="{{$page['carosel_product']['component_data']['link4']}}"><img src="/{{$current_website->name}}/uploads/{{$page['carosel_product']['component_data']['file4']}}" class="img-responsive" alt="volvo"> <span>{{$page['carosel_product']['component_data']['title4']}}</span></a></div>--}}
              {{--</div>--}}
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><em class="glyphicon glyphicon-chevron-left"></em></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><em class="glyphicon glyphicon-chevron-right"></em></a></div>
        </div>
        </div>