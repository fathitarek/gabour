<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0093)http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <meta name="keywords" content="">
    <meta name="description" content="">
       {!!$page->template->includes!!}

    <title>Genuine Accessories | Mitsubishi Fuso</title>
</head>
<body class="en_mode">
<script src="./PartsAccessories_files/ie_download.js.download"></script>
<div id="WRAPPER" class="clearfix">
  <div class="menu">
    <div>
      <!--- page: /content/fuso/en/service/partsandaccessories/genuine_parts -->
      <header id="HEADER_AREA" style="z-index: 50000;">
@include('public.'.$current_website->name.'.components.'.$page['homepage_main_menu']['component_template']['path'])
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

<?php 
//include("components/partandservice_img.php");
?>
    @include('public.'.$current_website->name.'.components.'.$page['partandservice_img']['component_template']['path'])

<div class="tabs section"><div>
    <ul id="EXEC_TAB">
        <li><a href="/fuso/genuine_parts">Genuine Parts</a></li>
    
        <li><a href="/fuso/fuso_value_parts">Fuso Value Parts</a></li>
    
        <li><a href="/fuso/genuine_accessories" class="active">Genuine Accessories</a></li>
    </ul>
    <br style="clear:both">
</div></div>

<?php // include("components/parts_paragraph_tabs.php");
 ?>
    @include('public.'.$current_website->name.'.components.'.$page['parts_paragraph_tabs']['component_template']['path'])

</div>
<div class="divider section"><div>
    <br style="clear:both">
    <hr>
</div>
</div>
<div class="header section"><div>
    <h3 class="head_style_a">Leaflet Download</h3>
</div>
    @include('public.'.$current_website->name.'.components.'.$page['genuine_accessories_leaflet_download']['component_template']['path'])

<div class="rawhtml section"><div>
    <style>
#GP_BENEFIT_DATA dl{
 float:left;
 margin-bottom:60px;
 width:49.5%;
}
#GP_BENEFIT_DATA dt{
 float:left;
 width:140px;
 min-height:170px;  
}

#GP_BENEFIT_DATA dt a {
    position: relative;
    display:block;
    width:125px;
    height:100px;
}

#GP_BENEFIT_DATA dt img {
 width:125px;
}

#GP_BENEFIT_DATA dt a span {
    position: absolute;
    top:0;
    left:0;
    display:block;
    width:125px;
    height:100px;
    background: url("/etc/designs/fuso/core/image/service/parts/gp_item_play.png") no-repeat right bottom;
    text-indent: 100%;
    white-space: nowrap;
    overflow: hidden;
}

#GP_BENEFIT_DATA dd {
    margin-left:140px;
    min-height:170px;
    position:relative;
}

#GP_BENEFIT_DATA dd p {
    margin-bottom: 0 !important;
    margin-right:10px;
}

#GP_BENEFIT_DATA dd p.more_info {
    position:absolute;
    bottom:0;
    right:0;
    text-align: right;
}

#GP_BENEFIT_DATA dd a {
    color:#000;
    text-decoration: underline;
}

#GP_BENEFIT_DATA dd a:hover {
    color:#939393;
    text-decoration: nones;
}

#MFUSO_PARTS_GENUINE #BROCHUR_LIST .brochure_pict {
    width:195px;
    float: left;
}

#MFUSO_PARTS_GENUINE #BROCHUR_LIST {
    width: 49.5%;
}

.gp_popup, .gp_popup_y {
    position: relative;
    background: #FFF;
    padding: 30px 44px;
    width: auto;
    width:600px;
    max-width: 600px;
    margin: 30px auto;
}

.gp_popup_y  {
    width:800px;
    max-width:800px;
}

.gp_popup h3, .gp_popup_y h3 {
    font-size:120%;
    text-align: center;
    padding:5px 0;
    margin-bottom:30px;
    background: #2c2c2c;
    color:#FFF;
}

.gp_popup .popup_img {
    float:left;
    width:170px;
}

.gp_popup .popup_text {
    margin-left:200px;
}

.gp_popup p, .gp_popup ul {
    line-height:1.5;
    margin-bottom:1em;
}

.gp_popup ul {
    list-style: circle;
    list-style-position: inside;
}

.youtube-player {
    position: relative;
    padding-bottom: 56.23%;
    /* Use 75% for 4:3 videos */
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background: #000;
    margin: 5px;
}
    
.youtube-player iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 100;
    background: transparent;
}
    
.youtube-player img {
    bottom: 0;
    display: block;
    left: 0;
    margin: auto;
    max-width: 100%;
    width: 100%;
    position: absolute;
    right: 0;
    top: 0;
    border: none;
    height: auto;
    cursor: pointer;
    -webkit-transition: .4s all;
    -moz-transition: .4s all;
    transition: .4s all;
}
    
.youtube-player img:hover {
    -webkit-filter: brightness(75%);
}
    
.youtube-player .play {
    height: 72px;
    width: 72px;
    left: 50%;
    top: 50%;
    margin-left: -36px;
    margin-top: -36px;
    position: absolute;
    background: url(/etc/designs/fuso/core/image/service/parts/play.png) no-repeat;
    cursor: pointer;
}

.custom-tooltip-styling {
    padding: 10px 20px;
    border-radius: 20px;
    text-transform: uppercase;
    box-shadow: 0 0 7px #ccc;
    position: absolute;
    width:85px;  
    background: white;
    text-align: center; 
    font-size:11px;
}

.leaflet h3 {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: normal;
}

#BROCHUR_LIST {
    width: 49.5%;
}

#BROCHUR_LIST .brochure_pict {
    width: 195px;
    float: left;
}

#BROCHUR_LIST .brochure_pict {
    margin-bottom: 5px;
}

#BROCHUR_LIST .brochure_txt {
    float: left;
    width: 100px;
    font-size: 16px;
    padding: 3px 0 0;
    color: #666;
}

#BROCHUR_LIST .brochure_download {
    float: right;
    width: 60px;
}

@media screen and (max-width:640px){

    .gp_popup .popup_text {
        margin-left:0px;
    }

    .ui-tooltip {
        display: none !important;
    }

    #GP_BENEFIT_DATA dl{
     margin:10px 10px 60px 10px;
     width: 100%;
    }

    #GP_BENEFIT_DATA dt{  
        margin-bottom:10px;
        width: 100%;
        float: none;
    }

    #GP_BENEFIT_DATA dt a {
        position: relative;
        display: block;
        width: 95%;
        height: auto;
    }

    #GP_BENEFIT_DATA dt a span {
        position: absolute;
        right:10px;
        bottom:10px;
        top: auto;
        display:block;
        width:100%;
        height:100px;
        background: url("/etc/designs/fuso/core/image/service/parts/gp_item_play.png") no-repeat right bottom;
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
    }

    #GP_BENEFIT_DATA dt img{
     width:100%;
    }

    #GP_BENEFIT_DATA dd {
      margin-left: 0px;
    }

    #GP_BENEFIT_DATA dd p {
    }

    #GP_BENEFIT_DATA dd p.more_info {
        text-align: right;
    }

    #GP_BENEFIT_DATA dd a {
        color:#000;
        text-decoration: underline;
    }

    #GP_BENEFIT_DATA dd a:hover {
        color:#939393;
        text-decoration: nones;
    }

    #MFUSO_PARTS_GENUINE #BROCHUR_LIST .brochure_pict {
        width:195px;
        float: left;
    }

    #MFUSO_PARTS_GENUINE #BROCHUR_LIST {
        width: 100%;
    }

    .gp_popup, .gp_popup_y {
        position: relative;
        background: #FFF;
        width: 100%;
        box-sizing: border-box;
        padding: 0px;
    }

    .gp_popup h3, .gp_popup_y h3 {
        font-size:120%;
        text-align: center;
        padding:20px 0 10px 0;
        margin:10px;
        color: black;
        background-color: transparent;
    }

    .gp_popup .popup_img, .gp_popup_y .popup_img {
        width:60%;
        margin:auto 20%;
    }

    .gp_popup .popup_img img, .gp_popup_y .popup_img img {
        width:100%;
    }

    .gp_popup .popup_text, .gp_popup_y .popup_text {
        padding:10px;
    }

    .gp_popup p, .gp_popup ul, .gp_popup_y p, .gp_popup_y ul {
        line-height:1.5;
        margin-bottom:1em;
    }

    .gp_popup ul, .gp_popup_y ul {
        list-style: circle;
        list-style-position: inside;
    }

    .gp_popup, .gp_popup_y {
        padding-bottom:1px;
    }

    .youtube-player {
        position: relative;
        padding-bottom: 56.23%;
        /* Use 75% for 4:3 videos */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
        margin: 5px;
    }
        
    .youtube-player iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 100;
        background: transparent;
    }
        
    .youtube-player img {
        bottom: 0;
        display: block;
        left: 0;
        margin: auto;
        max-width: 100%;
        width: 100%;
        position: absolute;
        right: 0;
        top: 0;
        border: none;
        height: auto;
        cursor: pointer;
        -webkit-transition: .4s all;
        -moz-transition: .4s all;
        transition: .4s all;
    }
        
    .youtube-player img:hover {
        -webkit-filter: brightness(75%);
    }
        
    .youtube-player .play {
        height: 72px;
        width: 72px;
        left: 50%;
        top: 50%;
        margin-left: -36px;
        margin-top: -36px;
        position: absolute;
        background: url(../image/service/parts/play.png) no-repeat;
        cursor: pointer;
    }

    .custom-tooltip-styling {
        display: none;
    }

}

</style>

<script>

        $(document).ready(function() {  
            
            $("dt a").tooltip({
              tooltipClass: "custom-tooltip-styling"
            });
            
            $('.open-popup-link').magnificPopup({
              type:'inline',
              midClick: true 
            });  
        }); 
        
        document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = ytThumb(v[n].dataset.id);
                div.onclick = ytIframe;
                v[n].appendChild(div);
            }
        });

        function ytThumb(id) {
            var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
                play = '<div class="play"></div>';
            return thumb.replace("ID", id) + play;
        }

        function ytIframe() {
            var iframe = document.createElement("iframe");
            var embed = "https://www.youtube.com/embed/ID?autoplay=1&amp;rel=0&amp;showinfo=0";
            iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "1");
            this.parentNode.replaceChild(iframe, this);
        }

</script> </div></div>

</div>

</div>
		<div class="right">
</div>
    </div>



</div>

        @include('public.'.$current_website->name.'.components.'.$page['footer']['component_template']['path'])
</div>



<!--<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><span style="border-radius: 3px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 11px; line-height: 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, sans-serif; color: rgb(255, 255, 255); background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjYmQwODFjIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(189, 8, 28); position: absolute; opacity: 1; z-index: 8675309; display: block; cursor: pointer; border: none; -webkit-font-smoothing: antialiased; top: 489px; left: 627px;">Save</span><span style="border-radius: 3px; text-indent: 20px; width: 20px; height: 20px; background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiIHZpZXdCb3g9IjAgMCAzMCAzMCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4KPGc+CjxwYXRoIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSI0IiBkPSJNMTcsMTcgTDIyLDIyIFogIi8+CjxjaXJjbGUgc3Ryb2tlPSIjZmZmIiBjeD0iMTMiIGN5PSIxMyIgcj0iNiIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjUiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMCBMOCwwIEw4LDMgTDMsMyBMMyw4IEwwLDggWiIvPgo8cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzAsMjIgTDMwLDMwIEwyMiwzMCBMMjIsMjcgTDI3LDI3IEwyNywyMiBaIi8+CjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zMCwwIEwzMCw4IEwyNyw4IEwyNywzIEwyMiwzIEwyMiwwIFoiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMjIgTDMsMjIgTDMsMjcgTDgsMjcgTDgsMzAgTDAsMzBaIi8+CjwvZz4KPC9zdmc+Cg==&quot;) 50% 50% / 14px 14px no-repeat rgba(0, 0, 0, 0.4); position: absolute; opacity: 1; z-index: 8675309; display: block; cursor: pointer; border: none; top: 489px; left: 681px;"></span></body></html>-->