<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Volvo | Locations</title>
        <!-- InstanceEndEditable -->
        <!-- Bootstrap -->
        <link href="/volvo_ce/css/bootstrap.css" rel="stylesheet">
        <link href="/volvo_ce/css/yamm.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/volvo_ce/css/style.css" rel="stylesheet" type="text/css">
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAvIsz3M59Jyze3pfpZSXcOmFzH7KQ79Ys"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
        <!-- InstanceBeginEditable name="head" -->
        <!-- InstanceEndEditable -->
        <script>

            function initialize() {
                var locations = [];

                @if (count($locations))

                @foreach($locations as $index => $location)
                        @if ((trim($location['long']) != '') && (trim($location['lat'] != '')))
                        var location = ['{{$location['name_en']}}', '{{trim($location['long'])}}', '{{trim($location['lat'])}}', '{{trim($location['address_en'])}}', '{{trim($location['phone'])}}', '{{trim($location['fax'])}}', '{{trim($location['email'])}}'];
//                 console.log(location)
                locations.push(location);
                @endif

                        @endforeach
                        @endif

                        var map = new google.maps.Map(document.getElementById('googleMap'), {
                        zoom: 6,
                                center: new google.maps.LatLng(28.766622, 29.232078),
//                               center: {lat: -34.397, lng: 150.644},
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        );

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                            hey(locations[i]);
                        }
                    })(marker, i));
                }

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>


    </head>
    <body>

        <div class="container-fluid" id="pageX">
            <div class="headerX">
               
                
                <div class="row" id="nav1">
    <div class="col-md-offset-1 col-md-10">
        <a href="{{$component->link1}}">{{$component->title1}}</a> 
        <a href="{{$component->link2}}">{{$component->title2}}</a> 
        <a href="{{$component->link3}}">{{$component->title3}}</a> 
        <span> <a href="{{$component->link_ar}}">Ar </a> / <a href="{{$component->link_en}}"> En</a> </span> </div>
</div>
<div class="row" id="logo">
    <div class="col-md-10 col-md-offset-1"><a href="{{$component->link_cv}}"><img src="/{{$current_website->name}}/uploads/{{$component->file_1}}" alt=""/></a>
        <a href="/volvo_trucks/home" > <img src="/{{$current_website->name}}/uploads/{{$component->file_2}}" alt="" class="volvoLogo"/></a>
    </div>
</div>

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
<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menu_products->display_name}}</a>
    <ul class="dropdown-menu">
        <li>
            <div class="row noPaddingX">
                <div class="col-md-9 rightBorderX">
                    <h4>{{$component->title_trucks}}</h4>
                    <p>{{$component->desc_trucks}}</p>
                    <div class="row">
                        <div class="col-md-4">
                        @foreach($menu_products->menuItems as $index =>$menu_item)
                          @if($menu_item->published==1)
                            <a href="{{$menu_item->url}}">
                                <div>
                                    <img src="/{{$current_website->name}}/images/menu_items/{{$menu_item->image_on}}" alt="Placeholder image">
                                    <span>{{$menu_item->display_name}} </span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
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

<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menu_services->display_name}}</a>
    <ul class="dropdown-menu">
        
        
        
        <li>
            <div class="row noPaddingX">
                <div class="col-md-9 rightBorderX">
                    <h4>{{$component->title_services}}</h4>
                    <p>{{$component->desc_services}}</p>
                     <div class="row noPaddingX">
                @foreach($menu_services->menuItems as $index =>$menu_item)
                 @if($menu_item->published==1)
                <div class="rightBorderX col-md-3">       
                    <a href="{{$menu_item->url}}">
                        <h4>{{$menu_item->display_name}}<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                    </a>
                    <p>{{$menu_item->title_services}}</p>
                </div>
                  @endif
                @endforeach
            </div>
                </div>
            </div>
        </li>
    </ul>
</li>
 <li class="dropdown yamm-fw"><a id="locations" href="{{$menu_locations->url}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menu_locations->display_name}}</a></li>
 <li class="dropdown yamm-fw"><a id="locations" href="{{$menu_news->url}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menu_news->display_name}}</a></li>

<li class="dropdown yamm-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menu_aboutus->display_name}}</a>
    <ul class="dropdown-menu">
        <li>
            <div class="row noPaddingX">
                @foreach($menu_aboutus->menuItems as $index =>$menu_item)
                 @if($menu_item->published==1)
                <div class="rightBorderX col-md-3">       
                    <a href="{{$menu_item->url}}">
                        <h4>{{$menu_item->display_name}}<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h4>
                    </a>
                    <p>{{$menu_item->description}}</p>
                </div>
                  @endif
                @endforeach
            </div>
        </li>
    </ul>
</li>
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
                
            </div>
            <!-- InstanceBeginEditable name="ContentX" -->
            <div class="contentX">
                <div class="row volvo3setions">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-5">
                                <h4><strong>locations</strong></h4>
<p>{{$settings->text_en}}</p>
                            </div>
                            <?php //include("components/comp_locations/title_desc.php");
                            ?>
                            <div class="col-md-7 text-center">
                                {!!Form::open(['action'=>'VolvoPagesController@locations_trucks','method' => 'GET'])!!}
                                <div>
                                    <div class="btn-group" style="width: 100%; margin-bottom: 20px;">
<!--                                            <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service Centers <span class="glyphicon glyphicon-menu-down"></span><span class="sr-only">Toggle Dropdown</span></button>
                                        <ul class="dropdown-menu">
                                            <li role="presentation" class="dropdown-header">Dropdown header 1</li>
                                            <li role="presentation"><a href="#">First Link</a></li>
                                            <li role="presentation" class="disabled"><a href="#">Disabled Link</a></li>
                                            <li role="presentation" class="divider"></li>
                                            <li role="presentation"><a href="#">Separated Link</a></li>
                                        </ul>-->

                                        <select  name='city_id' class="btn btn-sm btn-default dropdown-toggle" style="width: 100%; color:#fff; border: none;font-size: 16px;">
                                            <option  value=''> Choose City</option>

                                            @foreach($cities as $city)
                                            @if(isset($_REQUEST['city_id'])) 
                                            @if($city->id ==$_REQUEST['city_id'])
                                            <option  value="{{ $city->id}}" selected>{{$city->name_en}}</option>
                                            @else
                                            <option  value="{{ $city->id}}" >{{$city->name_en}}</option>
                                            @endif

                                            @else
                                            <option  value="{{ $city->id}}" >{{$city->name_en}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                                
                                <?php foreach ($locationCategories as $locationCategory) { ?>
                                    <label>
                                        <input type="radio" name="location_category_id" value="<?= $locationCategory->id; ?>" for='<?php echo $locationCategory->name_en; ?>'/><span class="radioLocationX"><?php echo $locationCategory->name_en; ?> </span> 
                                    </label>
                                <?php } ?>

                                <!--                                    <div id="tabContent1" class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane fade in active" id="home1">-->
                                <!--            <div class="row" id="googleMap">
                                              <iframe width="100%" height="500" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=17&center=30.0681%2C31.0378&key=AIzaSyBoBOJ5tVNmm0vNho8MCC-b1XV72Gv2ljQ" allowfullscreen></iframe>
                                           
                                            </div>-->

                                {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}
                                <div style="width:100%; margin-bottom: 20px;">
                                    <input type="submit" id="searchXbox" class="btn" value="Search" />
                                </div>
                            </div>
                        </div>
                        {!!Form::close()!!}    
                    </div>
                    <?php // include("components/comp_locations/search.php");
                    ?>
                    <?php //include("components/comp_locations/map.php");
                    ?>  
                    <div class="row headTitleX">
                        <div class="col-md-10 col-md-offset-1">
                            <div id="googleMap" style="height:500px"></div>                                </div>
                    </div>
                </div>
                <!--                                        </div>
                                                    </div>-->

            </div>
            <!-- InstanceEndEditable -->
          <div class="row footer">
    <div class="col-md-10 col-md-offset-1">
        <div class="row footerMega">
            @foreach($footer_menu->menuItems as $index =>$menu_item)
            @if($menu_item->menu_item_id==0)
            @if(count($menu_item->menuItems))
            <div class="col-md-3">
                <h5>{{$menu_item->display_name}}</h5>
                @foreach($menu_item->menuItems as $sub_index =>$sub_menu_item)

                @if($sub_menu_item->display_name =='Facebook')
                <a href="{{$sub_menu_item->url}}"><i class="fa  fa-facebook-square"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-right"></span></a> 
                @elseif($sub_menu_item->display_name=='Twitter')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-twitter"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-right"></span></a>
                @elseif($sub_menu_item->display_name=='Google+')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-google-plus"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-right"></span></a>
                @elseif($sub_menu_item->display_name=='Youtube')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-youtube-play"></i>  {{$sub_menu_item->display_name}}<span class="glyphicon glyphicon-menu-right"></span></a>
                @elseif($sub_menu_item->display_name=='LinkedIn')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-linkedin"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-right"></span></a> 
            @elseif($sub_menu_item->display_name=='Pinterest')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-pinterest"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-right"></span></a> 
           @elseif($sub_menu_item->display_name=='Flickr')
                <a href="{{$sub_menu_item->url}}"><i class="fa fa-flickr"></i> {{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-right"></span></a> 
           
                @else
            <a href="{{$sub_menu_item->url}}">{{$sub_menu_item->display_name}} <span class="glyphicon glyphicon-menu-right"></span></a>
            @endif
            @endforeach
            
        </div>
            @endif
            @endif
            @endforeach 
        </div>


        
    </div>
<div class="col-md-10 col-md-offset-1 footerBlack">
            <a href="#">www.volvogroup.com </a>
            |
            <a href="/volvo_trucks/contact_us"> Contact Us</a>
         </div>
        <div class="col-md-10 col-md-offset-1 text-center volvoCopyright">
            <img src="images/logoVolvo.png" alt="volvo">   Copyright AB Volvo 2017
        </div>
      </div>


        </div></div></div></div><div class="row headTitleX" >
    <div class="col-md-10 col-md-offset-1">

        <div id="googleMap" style="height:500px"></div>
    </div>
</div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="/volvo_ce/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="/volvo_ce/js/bootstrap.js"></script>
<script>
$('#myCarousel').carousel({
interval: 1000 * 10
});

//		$("#locations").onclick = function () {
//			location.href = "locations.html";
//		};

</script>
<script>
    $('#myCarousel.carousel[data-type="multi"] .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < 4; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>
<script>

    var params = getUrlVars(window.location.href);
    //console.log(params['location_category_id']);
    var radios = document.getElementsByName('location_category_id');
    var length = radios.length;

    for (var i = 0; i <= length; i++) {
        // alert(radios[i].value)
        if (radios[i].value == params['location_category_id']) {
            radios[i].checked = true;
            console.log(radios[i].getAttribute("for"));
            localStorage.setItem("type", radios[i].getAttribute("for"));
            break;
        }
    }

    function getUrlVars(url) {
        var hash;
        var myJson = {};
        var hashes = url.slice(url.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            myJson[hash[0]] = hash[1];
        }
        return myJson;
    }



</script>
</body>
</html>