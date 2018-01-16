<div id="carousel1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators hidden-xs">

        @foreach($page['home_slider']['special_listing_1_data'][0]->sliderItems as $index =>$slider_item)
            @if($slider_item->published==1)
                @if($index==0)
                    <li data-target="#carousel1" data-slide-to="{{$index}}" class="active"></li>
                @else
                    <li data-target="#carousel1" data-slide-to="{{$index}}"></li>
                @endif
            @endif
        @endforeach


    </ol>

    @if(count($page['home_slider']['special_listing_1_data'][0]->sliderItems))

        <div class="carousel-inner" role="listbox">
		<?php
		$slider_index=0;
		?>
            @foreach($page['home_slider']['special_listing_1_data'][0]->sliderItems as $index =>$slider_item)

                @if($slider_item->published==1)
		
                    @if($slider_index==0)
			
                        <div class="item active"><img src="/{{$current_website->name}}/images/{{$slider_item->img}}" alt="{{$slider_item->title}}" class="center-block">      </div>
                    @else
                        <div class="item "><img src="/{{$current_website->name}}/images/{{$slider_item->img}}" alt="{{$slider_item->title}}" class="center-block">      </div>

                    @endif
		<?php
			$slider_index++;
		?>
                @endif
                       
            @endforeach
        </div>
    @endif

    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
    <span class="glyphicon leftX" aria-hidden="true"><img src="/{{$current_website->name}}/assets/arrowsL.png" alt="arrowL"></span>
    <span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
    <span class="glyphicon rightX" aria-hidden="true"><img src="/{{$current_website->name}}/assets/arrowsR.png" alt="arrowR"></span>
    <span class="sr-only">Next</span></a></div>
