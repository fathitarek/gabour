

<div class="acs-commons-resp-colctrl-row section">
    <div class="showborderaroundrow-">
        <div class="acs-commons-column-wrapper">
            <div class="acs-commons-resp-colctrl-col acs-commons-resp-colctrl-col-100 showborderbetweencolumns-">
                <div class="par1 parsys">

                    @if(count($page['heavy_duty_trucks']['special_listing_1_data']))
                            @foreach($page['heavy_duty_trucks']['special_listing_1_data'][0]->categories as $index => $category)
                                @if($category->published==1)
                                    <div class="header section"><div>
                                            <h3 class="head_style_a">{{$category->display_name}}</h3>
                                        </div>
                                    </div>
                                    <div class="divider section"><div>
                                            <br style="clear:both">
                                            <hr>
                                        </div>
                                    </div>

                                    @if(count($category->products))
                                        @foreach($category->products as $index1 => $product)
                                            @if($product->published==1)
                                                 <div class="listpageitem section">
                                                <span style="display: inline-block;">
                                                    <div class="p-img"><img src="/{{$current_website->name}}/images/product/{{$product->image}}" alt="{{$product->title}}"></div>
                                                    <div class="p-nm">{{$product->title}}</div>

                                                    <span class="sml fred">{{$product->model}}</span>
                                                    <span class="sml">{{$product->note}}</span>
                                                    @if($product->pdf!='')
                                                            <a href="/{{$current_website->name}}/pdf/products/{{$product->pdf}}" target="_blank" class="catalog_dl" data-analnk="pdf-ilnk">
                                                                <img src="PartsAccessories_files/dl-icon_new.png">
                                                            </a>
                                                    @endif
                                                </span>
                                            </div>
                                            @endif
                                        @endforeach
                                    @endif
                                    <div class="text parbase section">
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                </div>
            </div>
        </div>
        <br style="clear: both">
    </div></div>
