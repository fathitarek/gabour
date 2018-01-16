<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0093)http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Genuine Parts | Mitsubishi Fuso</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

 {!!$page->template->includes!!}

<script>
$(function(){
    if(window.parent.location.toString().match(/editor\.html/)) {
        $('body').addClass('edit-mode');
    }

    $('#searchform dd').click(function(){
      $(this).parents('form').submit();
    });

    $('body').on('click', 'a[href^="/oa/"]', function(){
        var $this = $(this);
        if(window.location.toString().match(/awsinternal.t-mark.co.jp|fuso.t-mark.co.jp/)) {
           var href = 'http://fuso.t-mark.co.jp'+$this.attr('href');
           $this.attr('href', href);
        }
        else {
           var href = 'http://www.mitsubishi-fuso.com'+$this.attr('href');
           $this.attr('href', href);
        }
        return true;
    });

    $('#FOOTER_MENU a[href^="/oa/"]').attr('target', '_blank');
    $('#MENU_FIELD a[href^="/oa/"]').attr('target', '_blank');


    $('.header h2, .header h3').each(function(){
      var html = $(this).html().replace(/®/, '<sup>®</sup>').replace(/©/, '<sup>©</sup>');
      $(this).html(html);
    });

    $('img[data-magnified-image]').each(function(){
        var $a = $('<a></a>').attr('href', $(this).attr('data-magnified-image')).addClass('cboxElement').addClass('group');
        $(this).wrap($a);
    });

    setInterval(function(){
        $('.PDF.alternativestyle').parent().addClass('pdf-alternativestyle');
    }, 500);

    $(".group").colorbox({rel:'group'});
    $(".callbacks").colorbox({
        onOpen:function(){ alert('onOpen: colorbox is about to open'); },
        onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
        onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
        onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
        onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
    });

    //Example of preserving a JavaScript event for inline calls.
    $("#click").click(function(){
        $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
        return false;
    });


    $('.image a').each(function(){
        if(this.hostname != window.location.hostname)
        {
            $(this).attr('target', '_blank');
        }
    });

    /*if(window.location.toString().match(/awsinternal.t-mark.co.jp|localhost|13.78.85.230/)) {
        setInterval(function(){
            $('a').each(function(){
                if($(this).attr('href').match(/^\/content\/fuso/)) {
                    $(this).attr('href', '/editor.html'+$(this).attr('href'));
                }
            });
        }, 250);
    }*/

});
</script>

<link rel="stylesheet" href="./PartsAccessories_files/colctrl.css">
    <title>genuine_parts</title>
</head>
<body class="en_mode">
<script src="./PartsAccessories_files/ie_download.js.download"></script>
<div id="WRAPPER" class="clearfix">
  <div class="menu">
    <div>
      <!--- page: /content/fuso/en/service/partsandaccessories/genuine_parts -->
      <header id="HEADER_AREA" style="z-index: 50000;">
        <div id="HEADER_WRAP">
          <h1> <a href="index.html"> <img class="pc_display" src="./PartsAccessories_files/hd-logo.png" alt="mitsubishifuso"> <img class="mb_display" src="./PartsAccessories_files/hd-logo_sp.png" alt="mitsubishifuso"></a></h1>
          <div id="MOBILE_MENU_TRIGGER" class="mb_display"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html#"><img src="./PartsAccessories_files/img_hdr_menu.png" alt="Menu"></a></div>
          <div id="MENU_FIELD">
            <div id="MB_MENU_HEAD" class="clearfix mb_display">
              <div id="MOBILE_MENU_CLOSE"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html#"><img src="./PartsAccessories_files/img_hdr_menu_close.png" alt="Close"></a></div>
              <script src="./PartsAccessories_files/search_engine_zero.js.download"></script>
              <form action="http://www.mitsubishi-fuso.com/content/fuso/en/search_result.html" name="searchform" id="searchform">
                <dl class="clearfix">
                  <dt>
                    <input type="text" placeholder="Search" value="" id="keywords" name="keywords">
                  </dt>
                  <dd>
                    <input type="image" src="./PartsAccessories_files/null.gif" alt="" name="searchBtn2" id="searchBtn2">
                  </dd>
                </dl>
              </form>
              <script type="text/javascript" src="./PartsAccessories_files/brand"></script>
            </div>
            <div id="MENU_WRAPS">
              <nav>
                <ul id="GLOBALMENU_FIELD">
                  <li class="menu_all clearfix"> <a href="#" class="menu_all"> <img src="./assets/menu_products_on.png" alt="PRODUCTS" class="p_gnv pc_display" data-pin-nopin="true" /> <span class="mb_icon mb_display"> <img src="./assets/mb_menu_products.png" alt="PRODUCTS" class="p_gnv" /></span> <span class="mb_txt mb_display">PRODUCTS</span></a>
                    <ul class="submenu clearfix">
                      <li> <a href="Trucks.html"> <img src="./assets/side_trucks_on.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">TRUCKS</span></a></li>
                      <li> <a href="Buses.html"> <img src="assets/Buses.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">BUSES</span></a></li>
                    </ul>
                  </li>
                  <li class="menu_all clearfix"> <a href="#" class="menu_all"> <img src="./assets/menu_parts_on.png" alt="PARTS &amp; SERVICES" class="p_gnv pc_display" data-pin-nopin="true" /> <span class="mb_icon mb_display"> <img src="./assets/mb_menu_parts.png" alt="PARTS &amp; SERVICES" class="p_gnv" /></span> <span class="mb_txt mb_display">PARTS &amp; SERVICES</span></a>
                    <ul class="submenu clearfix">
                      <li> <a href="PartsAccessories.html"> <img src="./assets/side_parts_on.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">PARTS &amp; ACCESSORIES</span></a></li>
                      <li> <a href="services.html"> <img src="./assets/side_service_on.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">SERVICES</span></a></li>
                      <li> <a href="roadsideAssistance.html"> <img src="assets/RoadSideAssistance.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">Roadside Assistance</span></a></li>
                    </ul>
                  </li>
                  <li class="menu_all clearfix"> <a href="#" class="menu_all">
                    <img src="./assets/menu_aboutus_on.png" alt="ABOUT US" class="p_gnv pc_display" />
                    <span class="mb_icon mb_display">
                      <img src="./assets/mb_menu_aboutus.png" alt="ABOUT US" class="p_gnv" />
                    </span> <span class="mb_txt mb_display">ABOUT US</span></a>
                    <ul class="submenu clearfix">
                      <li> <a href="fuso_brands"> <img src="./assets/side_brand_on.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">FUSO BRAND</span></a></li>
                      <li> <a href="corporate_profile"> <img src="./assets/side_cp_on.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">CORPORATE PROFILE</span></a></li>
                    </ul>
                  </li>
                  <li class="menu_all clearfix"> <a href="#" class="menu_all"> <img src="assets/networklocations.png" alt="NEWS &amp; MEDIA" class="p_gnv pc_display" data-pin-nopin="true" /> <span class="mb_icon mb_display"> <img src="assets/mb_menu_distributors.png" alt="NEWS &amp; MEDIA" class="p_gnv" /></span> <span class="mb_txt mb_display">NETWORK &amp; LOCATIONS</span></a>
                    <ul class="submenu clearfix">
                      <li> <a href="NetworkLocations.html"> <img src="assets/Showrooms.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">SHOWROOMS</span></a></li>
                      <li> <a href="NetworkLocations2.html"> <img src="assets/ServiceCenters.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">SERVICE CENTERS</span></a></li>
                      <li> <a href="NetworkLocations3.html"> <img src="assets/sparePartsOutlets.png" alt="Products" class="p_gnv pc_display" /> <img src="./assets/active_alw.png" alt="" class="active_alw pc_display" /> <span class="mb_txt mb_display">SPARE PARTS OUTLETS</span></a></li>
                    </ul>
                  </li>
                  <li class="gnv_jpnetwork menu_all clearfix pc_display"> <a href="ContactUs.html" class="menu_all"><img src="assets/ContactUs.png" alt="DistributorNetwork" class="p_gnv pc_display" /><span class="mb_icon mb_display"><img src="./assets/mb_menu_distributors.png" alt="DistributorNetwork" class="p_gnv" /></span><span class="mb_txt mb_display">DISTRIBUTOR<br />
                    NETWORK</span></a></li>
                  <li class="gnv_jpnetwork menu_all clearfix mb_display">
                    <script src="./assets/distributors.js(1).download"></script>
                    <a href="ContactUs.html" class="menu_all"><img src="./assets/menu_distributors_off.png" alt="DistributorNetwork" class="p_gnv pc_display" /><span class="mb_icon mb_display"><img src="assets/mb_menu_news.png" alt="DistributorNetwork" class="p_gnv" /></span><span class="mb_txt mb_display">CONTACT US</span></a></li>
                </ul>
              </nav>
<div id="MB_AREADETAIL" class="mb_display">
                <div class="block"></div>
              </div>
              <div id="MENU_LAST_AREA" class="mb_display"> </div>
            </div>
          </div>
          <div id="MB_DROP_DOWN" class="mb_display">
            <h2 id="MB_TITLE">Genuine Parts</h2>
            <ul id="DROP_LIST" style="display: none;">
              <li id="DROP_GL"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html">Global site</a></li>
              <li id="DROP_JP"><a href="http://www.mitsubishi-fuso.comindex.html">Japan site</a></li>
            </ul>
          </div>
        </div>
      </header>
      <script>
    $(function(){

        var path = window.location.toString().replace(/.*content\/fuso\/(jp|en)\//, '');
        var channels = path.split(/\//);

        $('.submenu a').each(function(){
            var submenu_path =  $(this).attr('href').replace(/.*content\/+fuso\/+(jp|en)\/+/, '');
            submenu_path = submenu_path.replace(/(\/+)/g, '/');
            var submenu_channels = submenu_path.split(/\//);
            if((submenu_channels[0] == channels[0] && submenu_channels[1] == channels[1]) ||  ( submenu_channels[0] == channels[0] && channels[1].match(/\.html/) && submenu_channels[1].match(/\.html/) )) {
                $(this).parent().addClass('selected');
                $(this).parents('li.menu_all').addClass('selected').find('.submenu').show();
            }
        });

        $('li.menu_all').each(function(){
            if($(this).find('.submenu').length > 0) {
                return true;
            }

            var submenu_path =  $(this).find('a').attr('href').replace(/.*content\/+fuso\/+(jp|en)\/+/, '');
            var submenu_channels = submenu_path.split(/\//);
            if(submenu_channels[0] == channels[0] && submenu_channels[1] == channels[1]) {
                $(this).addClass('selected');
            }
        });
    });

    window.setInterval(function(){
        $('#OverlayWrapper .cq-Overlay', window.parent.document).each(function(){
            if($(this).data('path').match(/menu/)) {
                $(this).css('width', '95px');
                $(this).css('height', '90vh');
            }
        });
    }, 500);



    $(function(){


        if(window.location.pathname == '/content/fuso/jp/index-alternative-v2.html' || window.location.pathname == '/content/fuso/jp/index-alternative.html' || window.location.pathname == 'index.html' || window.location.pathname == '/content/fuso/en/index.html')
        {
            $('body').addClass('index-page');

            if(window.location.pathname == '/content/fuso/jp/index-alternative.html')
            {
                $('body').addClass('index-alternative-page');
            }

            if(window.location.pathname == '/content/fuso/jp/index-alternative-v2.html')
            {
                $('body').addClass('index-alternative-page');
                $('body').addClass('index-alternative-page-v2');
            }
        }
        else {
        var mtitle = '';
        $('#CONTENTS_AREA h1, #CONTENTS_AREA h2, #CONTENTS_AREA h3, #CONTENTS_AREA #EXEC_TAB a.active').each(function(){
          if(!($(this).hasClass('careers-header'))) {
            mtitle = $(this).html();
            return false;
          }
        });
        $('#MB_TITLE').html(mtitle);
        }
    });


  </script>
    </div>
  </div>

<!-- navi, make dynamic later. -->

    <!-- edited from within brackets. -->

    <!-- edited with import. -->

    <!-- edited with cellar. -->


<!-- end navi. -->

<div id="CONTENTS_AREA" class="clearfix">
    <div id="MAIN_CONTENTS" class="clearfix">
		<div class="center">
		<div class="par parsys">

  @include('public.'.$current_website->name.'.components.'.$page['head_title_fuso_brand']['component_template']['path'])
  @include('public.'.$current_website->name.'.components.'.$page['head_img_text_fuso_brand']['component_template']['path'])
  @include('public.'.$current_website->name.'.components.'.$page['page_tabs_fuso_brand']['component_template']['path'])
  
  
  
  @include('public.'.$current_website->name.'.components.'.$page['left_img_text_trusted_quality']['component_template']['path'])
  @include('public.'.$current_website->name.'.components.'.$page['image_trusted_quality']['component_template']['path'])


<script type="text/javascript">
    (function() {
        var imageDiv = document.getElementById("cq-image-jsp-/content/fuso/en/aboutus/fusobrand/solidandfunctional/jcr:content/par/image");
        var imageEvars = '{ imageLink: "", imageAsset: "/content/dam/corpcom/core/image/aboutus/history/footer_image_solid.png", imageTitle: "footer_image_solid" }';
        var tagNodes = imageDiv.getElementsByTagName('A');
        for (var i = 0; i < tagNodes.length; i++) {
            var link = tagNodes.item(i);
            link.setAttribute('onclick', 'CQ_Analytics.record({event: "imageClick", values: ' + imageEvars + ', collect: false, options: { obj: this }, componentPath: "fuso/components/image"})');
        }

    })();
</script>

</div>
</div>
		  </div>
		<div class="right">
</div>
    </div>
</div>

    <div id="LAST_AREA" class="clearfix">
<ul id="GLJP_CHANGES">
  <li id="GHANGES_GL"><a href="index.html">Ar</a> / <a href="index.html">En</a></li>
</ul>
<div class="footer"><div id="FOOTER_AREA" class="clearfix">
<div id="FOOTER_WRAP" class="clearfix" data-footerdata="[{&quot;heading&quot;:&quot;PRODUCTS&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/lineup/truck/index.html&quot;,&quot;title&quot;:&quot;Trucks&quot;},{&quot;url&quot;:&quot;/content/fuso/en/lineup/busesvans/index.html&quot;,&quot;title&quot;:&quot;Buses &amp; Vans&quot;},{&quot;url&quot;:&quot;/content/fuso/en/lineup/engine/index.html&quot;,&quot;title&quot;:&quot;Industrial Engines&quot;}]},{&quot;heading&quot;:&quot;PARTS &amp; SERVICES&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/service/partsandaccessories/genuine_parts.html&quot;,&quot;title&quot;:&quot;Parts &amp; Accessories&quot;},{&quot;url&quot;:&quot;/content/fuso/en/service/service/index.html&quot;,&quot;title&quot;:&quot;Services&quot;},{&quot;url&quot;:&quot;/content/fuso/en/service/tco/index.html&quot;,&quot;title&quot;:&quot;TCO Simulator&quot;},{&quot;url&quot;:&quot;/content/fuso/en/service/financial_services/index.html&quot;,&quot;title&quot;:&quot;Financial Services&quot;}]},{&quot;heading&quot;:&quot;ABOUT US&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/aboutus/fusobrand/history.html&quot;,&quot;title&quot;:&quot;Fuso Brand&quot;},{&quot;url&quot;:&quot;/content/fuso/en/aboutus/corporate_profile/index.html&quot;,&quot;title&quot;:&quot;Corporate Profile&quot;},{&quot;url&quot;:&quot;/content/fuso/en/aboutus/career/video.html&quot;,&quot;title&quot;:&quot;Career&quot;}]},{&quot;heading&quot;:&quot;NEWS &amp; MEDIA&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/news/index.html&quot;,&quot;title&quot;:&quot;Press Releases&quot;}]},{&quot;heading&quot;:&quot;DISTRIBUTOR&lt;br&gt;NETWORK&quot;,&quot;url&quot;:&quot;/content/fuso/en/index.html#MAP_AREA&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/usage.html&quot;,&quot;title&quot;:&quot;Terms of Use&quot;},{&quot;url&quot;:&quot;/content/fuso/en/pi_protection/index.html&quot;,&quot;title&quot;:&quot;Privacy Policy&quot;}]}]">
<div id="FOOTER_MENU" class="pc_display clearfix">
<div>
  <dl>
    <dt> PRODUCTS </dt>
    <dd>
      <ul>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/lineup/busesvans/index.html">Buses</a></li>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/lineup/truck/index.html">Trucks</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
    <dt> PARTS &amp; SERVICES </dt>
    <dd>
      <ul>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html">Parts &amp; Accessories</a></li>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/service/service/index.html">Services</a></li>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/service/tco/index.html">Roadside Assistance</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
    <dt> ABOUT US </dt>
    <dd>
      <ul>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/aboutus/fusobrand/history.html">Fuso Brand</a></li>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/aboutus/corporate_profile/index.html">Corporate Profile</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
    <dt> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#MAP_AREA">Network locations</a></dt>
    <dd>
      <ul>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/usage.html">Terms of Use</a></li>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/pi_protection/index.html">Privacy Policy</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
    <dt> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#MAP_AREA">Contact Us</a></dt>
    <dd>
      <ul>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/usage.html">Terms of Use</a></li>
        <li> <a href="http://www.mitsubishi-fuso.com/content/fuso/en/pi_protection/index.html">Privacy Policy</a></li>
      </ul>
    </dd>
  </dl>
 </div>
 <script>

    var buttonsloaded = false;


    window.setInterval(function(){
        if(!(buttonsloaded) && $('button.coral-Button', window.parent.document).length) {
            $('button.coral-Button', window.parent.document).on('click', function(){
              if($(window).width() <= 1024 && $(this).data('path').match(/footer/)) {
                alert('Your screen is not wide enough to edit the footer.  Please enlarge your screen and try again.');
                return false;
              }
              return true;
            });
        }

    }, 500);


    var popuploaded = false;
    var footerdata =  JSON.parse('[{"heading":"PRODUCTS","urls":[{"url":"/content/fuso/en/lineup/truck/index.html","title":"Trucks"},{"url":"/content/fuso/en/lineup/busesvans/index.html","title":"Buses & Vans"},{"url":"/content/fuso/en/lineup/engine/index.html","title":"Industrial Engines"}]},{"heading":"PARTS & SERVICES","urls":[{"url":"/content/fuso/en/service/partsandaccessories/genuine_parts.html","title":"Parts & Accessories"},{"url":"/content/fuso/en/service/service/index.html","title":"Services"},{"url":"/content/fuso/en/service/tco/index.html","title":"TCO Simulator"},{"url":"/content/fuso/en/service/financial_services/index.html","title":"Financial Services"}]},{"heading":"ABOUT US","urls":[{"url":"/content/fuso/en/aboutus/fusobrand/history.html","title":"Fuso Brand"},{"url":"/content/fuso/en/aboutus/corporate_profile/index.html","title":"Corporate Profile"},{"url":"/content/fuso/en/aboutus/career/video.html","title":"Career"}]},{"heading":"NEWS & MEDIA","urls":[{"url":"/content/fuso/en/news/index.html","title":"Press Releases"}]},{"heading":"DISTRIBUTOR<br>NETWORK","url":"/content/fuso/en/index.html#MAP_AREA","urls":[{"url":"/content/fuso/en/usage.html","title":"Terms of Use"},{"url":"/content/fuso/en/pi_protection/index.html","title":"Privacy Policy"}]}]');
    window.setInterval(function(){
        if(!(popuploaded) && $('.footercontainer', window.parent.document).length) {
            popuploaded = true;
            window.parent.footerdata = footerdata;
            $.each(footerdata, function(index, elem){
            var urls = elem['urls'];
            $.each(urls, function(urlindex, url){
                $($('.coral-Multifield-add', window.parent.document)[index]).trigger('click');
                console.log('clicked');
                console.log(url);
                var $fieldset = $($('.coral-Multifield', window.parent.document)[index]);
                console.log($fieldset);
                console.log(urlindex);
                console.log($fieldset.find('.footerurltitle', window.top.document));
                $($fieldset.find('.footerurltitle', window.top.document)[urlindex]).val(url.title);
                $($fieldset.find('.footerurllink', window.top.document)[urlindex]).val(url.url);
            });

            });
        }
    }, 500);



    window.setInterval(function(){
        if($('.footercontainer', window.parent.document).length == 0) {
            popuploaded = false;
        }
    }, 500);
    </script>
</div>
<div id="SNS_FIELD" class="clearfix">
<ul id="JP_ORG_LINKS">


</ul>
<dl id="FOLLOW_US3">
  <dt>Follow us:</dt>
  <dd>
    <ul>
      <li><a href="https://www.facebook.com/FusoOfficial" target="_blank"><img src="./assets/sns-f_on.png"></a></li>
      <li><a href="https://www.youtube.com/user/Fusoofficial" target="_blank"><img src="./assets/sns-y_on.png"></a></li>
      <li><a href="https://www.youtube.com/user/Fusoofficial" target="_blank"><img src="assets/sns-t_on.png"></a></li>
    </ul>
  </dd>
</dl>
</div>


</div>
</div>
</div>
<address class="COPYRIGHT2">
<span>Mitsubishi Fuso authorized distributor <br>
Ghabbour Auto</span>
</address>
<address id="COPYRIGHT">
    <span>©&nbsp;2017
        Ghabbour Auto. All rights reserved.</span>
    </address>
<form action="http://www.mitsubishi-fuso.com/content/fuso/en/search_result.html" name="searchform" class="logoX">
  <a href="#"><img src="assets/logo.png" width="118" height="54" alt=""/></a>
</form>
<form action="http://www.mitsubishi-fuso.com/content/fuso/en/search_result.html" name="searchform" id="searchform">
      <dl class="clearfix">
            <dt><input type="text" placeholder="Search" value="" id="keywords" name="q"></dt>
            <dd><input type="image" src="./PartsAccessories_files/null.gif" alt="" name="searchBtn" id="searchBtn"></dd>
      </dl></form><script type="text/javascript" src="./PartsAccessories_files/brand"></script>
  </div>
</div>



<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><span style="border-radius: 3px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 11px; line-height: 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, sans-serif; color: rgb(255, 255, 255); background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjYmQwODFjIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(189, 8, 28); position: absolute; opacity: 1; z-index: 8675309; display: block; cursor: pointer; border: none; -webkit-font-smoothing: antialiased; top: 489px; left: 627px;">Save</span><span style="border-radius: 3px; text-indent: 20px; width: 20px; height: 20px; background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiIHZpZXdCb3g9IjAgMCAzMCAzMCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4KPGc+CjxwYXRoIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSI0IiBkPSJNMTcsMTcgTDIyLDIyIFogIi8+CjxjaXJjbGUgc3Ryb2tlPSIjZmZmIiBjeD0iMTMiIGN5PSIxMyIgcj0iNiIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjUiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMCBMOCwwIEw4LDMgTDMsMyBMMyw4IEwwLDggWiIvPgo8cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzAsMjIgTDMwLDMwIEwyMiwzMCBMMjIsMjcgTDI3LDI3IEwyNywyMiBaIi8+CjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zMCwwIEwzMCw4IEwyNyw4IEwyNywzIEwyMiwzIEwyMiwwIFoiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMjIgTDMsMjIgTDMsMjcgTDgsMjcgTDgsMzAgTDAsMzBaIi8+CjwvZz4KPC9zdmc+Cg==&quot;) 50% 50% / 14px 14px no-repeat rgba(0, 0, 0, 0.4); position: absolute; opacity: 1; z-index: 8675309; display: block; cursor: pointer; border: none; top: 489px; left: 681px;"></span></body></html>
