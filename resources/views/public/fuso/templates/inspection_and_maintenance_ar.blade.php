<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0093)http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html -->
<html dir="rtl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Inspection And Maintenance | Mitsubishi Fuso</title>
    
    <meta name="keywords" content="">
    <meta name="description" content="">
   {!!$page->template->includes!!}
</head>
<body class="en_mode">
<script src="./PartsAccessories_files/ie_download.js.download"></script>
<div id="WRAPPER" class="clearfix">
  <div class="menu">
    <div>
      <!--- page: /content/fuso/en/service/partsandaccessories/genuine_parts -->
      <header id="HEADER_AREA" style="z-index: 50000;">
            @include('public.'.$current_website->name.'.components.'.$page['homepage_main_menu_arabic']['component_template']['path'])
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
		<?php   //include('components/service_text_img.php');
    ?>
       @include('public.'.$current_website->name.'.components.'.$page['service_text_img']['component_template']['path'])



<div class="tabs section"><div>
     <ul id="EXEC_TAB">
        <li><a  href="/fuso/genuine_services_ar">خدمات الصيانة وما بعد البيع</a></li>
    
        <li><a  href="/fuso/we_promise_ar">وعد فوزو لعملائها</a></li>
    
        <li><a  class="active" href="/fuso/inspection_and_maintenance_ar">الفحص والصيانة</a></li>
    </ul>
    <br style="clear:both">
</div></div>
<?php  //include("components/inaeption_service_box.php");
?> 
       @include('public.'.$current_website->name.'.components.'.$page['inaeption_service_box']['component_template']['path'])

<?php// include("components/header_sections.php");
?>
       @include('public.'.$current_website->name.'.components.'.$page['header_sections']['component_template']['path'])


<div class="acs-commons-resp-colctrl-row section">





<div class="showborderaroundrow-">

    
    
        <div class="acs-commons-column-wrapper">
        
          




<?php// include("components/service3_box.php")
;?>
              @include('public.'.$current_website->name.'.components.'.$page['service3_box']['component_template']['path'])


            </div>
        
            



<?php //include("components/service3_box.php")
;?>
       @include('public.'.$current_website->name.'.components.'.$page['service3_box2']['component_template']['path'])



</div>

            </div>
        
        </div>
        <br style="clear: both">
    

</div></div>
<div class="acs-commons-resp-colctrl-row section">





<div class="showborderaroundrow-">

    
    
        <div class="acs-commons-column-wrapper">
        
            <div class="acs-commons-resp-colctrl-col acs-commons-resp-colctrl-col-50 showborderbetweencolumns-">
                  <div class="par1 parsys"><div class="acs-commons-resp-colctrl-row section">





<div class="showborderaroundrow-">

    
    
       <?php// include("components/service3_guidline.php"); 
       ?>
               @include('public.'.$current_website->name.'.components.'.$page['service3_guidline']['component_template']['path'])

        </div>
        <br style="clear: both">
    

</div></div>

</div>

            </div>
        
 <?php // include("components/pdf.php"); 
 ?>
               @include('public.'.$current_website->name.'.components.'.$page['pdf']['component_template']['path'])

        
           

</div>

            </div>
        
        </div>
        <br style="clear: both">
    

</div></div>

<div class="acs-commons-resp-colctrl-row section">





<div class="showborderaroundrow-">

    
    
        <div class="acs-commons-column-wrapper">
        
            <div class="acs-commons-resp-colctrl-col acs-commons-resp-colctrl-col-50 showborderbetweencolumns-">
                  <div class="par1 parsys"><div class="acs-commons-resp-colctrl-row section">






        <?php  
//include("components/booklet.php");
        ?>
                         @include('public.'.$current_website->name.'.components.'.$page['booklet']['component_template']['path'])
  
        <br style="clear: both">
    

</div></div>

</div>

            </div>
        
           <?php  //include("components/important_info.php"); 
           ?>
                                 @include('public.'.$current_website->name.'.components.'.$page['important_info']['component_template']['path'])

        </div>
        <br style="clear: both">
    

</div></div>



</div>
		 </div>
		<div class="right">
</div>
    </div>



</div>

        @include('public.'.$current_website->name.'.components.'.$page['footer_ar']['component_template']['path'])

</div>



<!--<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><span style="border-radius: 3px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 11px; line-height: 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, sans-serif; color: rgb(255, 255, 255); background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjYmQwODFjIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(189, 8, 28); position: absolute; opacity: 1; z-index: 8675309; display: block; cursor: pointer; border: none; -webkit-font-smoothing: antialiased; top: 489px; left: 627px;">Save</span><span style="border-radius: 3px; text-indent: 20px; width: 20px; height: 20px; background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiIHZpZXdCb3g9IjAgMCAzMCAzMCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4KPGc+CjxwYXRoIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSI0IiBkPSJNMTcsMTcgTDIyLDIyIFogIi8+CjxjaXJjbGUgc3Ryb2tlPSIjZmZmIiBjeD0iMTMiIGN5PSIxMyIgcj0iNiIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjUiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMCBMOCwwIEw4LDMgTDMsMyBMMyw4IEwwLDggWiIvPgo8cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzAsMjIgTDMwLDMwIEwyMiwzMCBMMjIsMjcgTDI3LDI3IEwyNywyMiBaIi8+CjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zMCwwIEwzMCw4IEwyNyw4IEwyNywzIEwyMiwzIEwyMiwwIFoiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMjIgTDMsMjIgTDMsMjcgTDgsMjcgTDgsMzAgTDAsMzBaIi8+CjwvZz4KPC9zdmc+Cg==&quot;) 50% 50% / 14px 14px no-repeat rgba(0, 0, 0, 0.4); position: absolute; opacity: 1; z-index: 8675309; display: block; cursor: pointer; border: none; top: 489px; left: 681px;"></span></body></html>-->