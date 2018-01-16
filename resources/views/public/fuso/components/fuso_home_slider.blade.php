<style>
    .ws-title-wrapper{
        display: none !important;
    }
</style>
<div class="slider section">
    <div>
        <div class="bx-wrapper" style="max-width: 100%;">
            <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; "> 
                <!-- Start WOWSlider.com BODY section -->
                @if(count($page['fuso_home_slider']['special_listing_1_data'][0]->sliderItems))

                <div id="wowslider-container1">

                    <div class="ws_images">
                        <ul>
                        @foreach($page['fuso_home_slider']['special_listing_1_data'][0]->sliderItems as $index =>$slider_item)
                            @if($slider_item->published==1)
                                @if($index==0)
                                    <li><a href="{{$slider_item->url}}"><img src="/{{$current_website->name}}/images/{{$slider_item->img}}" alt="{{$slider_item->title}}" title="{{$slider_item->url_title}}" id="wows1_{{$index}}"/></a></li>
                                @else
                                <li><a href="{{$slider_item->url}}"><img src="/{{$current_website->name}}/images/{{$slider_item->img}}" alt="{{$slider_item->title}}" title="{{$slider_item->url_title}}" id="wows1_{{$index}}"/></a></li>
                                @endif

                            @endif
                        @endforeach
                        </ul>
                    </div>

                   <div class="ws_bullets">
                        @foreach($page['fuso_home_slider']['special_listing_1_data'][0]->sliderItems as $index1 =>$slider_item)
                            @if($slider_item->published==1)

                                <a href="#" title="{{$slider_item->title}}"><span>{{$index1+1}}</span></a>


                            @endif
                        @endforeach

                    </div>
<!--                    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.7</div>
                    <div class="ws_shadow"></div>-->
        
                </div>	
                @endif
                <script type="text/javascript" src="engine1/wowslider.js"></script>
                <script type="text/javascript" src="engine1/script.js"></script>
                <!-- End WOWSlider.com BODY section -->
            </div>
        </div>
    </div>
</div>