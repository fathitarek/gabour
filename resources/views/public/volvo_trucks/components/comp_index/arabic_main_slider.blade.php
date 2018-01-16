<div class="row heroX">
        <div class="col-md-10 col-md-offset-1">
          <div id="carousel1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel1" data-slide-to="1"></li>
              <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            @if(count($page['arabic_main_slider']['special_listing_1_data'][0]->sliderItems))
            <?php
		$slider_index=0;
		?>
            <div class="carousel-inner" role="listbox">
                 @foreach($page['arabic_main_slider']['special_listing_1_data'][0]->sliderItems as $index =>$slider_item)
                 @if($slider_item->published==1)
                 
                @if($index==0)
              <div class="item active"><img src="/{{$current_website->name}}/images/{{$slider_item->img}}" alt="{{$slider_item->title}}" class="center-block">
                <div class="carousel-caption">
                  <p>{{$slider_item->title}}</p>
                  <h3>{{$slider_item->caption}}</h3>
                  <a href="{{$slider_item->url}}">
                    <p class="btnX">{{$slider_item->url_title}}<span class="glyphicon glyphicon-chevron-left"></span></p>
                  </a> 
                
               </div>
              </div>@else
             <div class="item"><img src="/{{$current_website->name}}/images/{{$slider_item->img}}" alt="{{$slider_item->title}}" class="center-block">
                <div class="carousel-caption">
                  <p>{{$slider_item->title}}</p>
                  <h3>{{$slider_item->caption}}</h3>
                  <a href="{{$slider_item->url}}">
                    <p class="btnX">{{$slider_item->url_title}}<span class="glyphicon glyphicon-chevron-left"></span></p>
                  </a> </div>
              </div>
              <?php
			$slider_index++;
		?>
              @endif
              @endif
<!--              <div class="item"><img src="images/hero3.jpg" alt="Third slide image" class="center-block">
                <div class="carousel-caption">
                  <p>Third slide Caption</p>
                  <h3>Third slide Heading</h3>
                  <a href="#">
                    <p class="btnX">Find out more <span class="glyphicon glyphicon-chevron-left"></span></p>
                  </a> </div>
              </div>-->
           @endforeach
            </div>
               @endif  
          </div>
        </div>
      </div>