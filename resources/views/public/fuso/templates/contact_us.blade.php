<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0093)http://www.mitsubishi-fuso.com/content/fuso/en/service/partsandaccessories/genuine_parts.html -->
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Contact Us | Mitsubishi Fuso</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

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
<link rel="stylesheet" href="/fuso/PartsAccessories_files/colctrl.css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<title>genuine_parts</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="en_mode">
<script src="/fuso/PartsAccessories_files/ie_download.js.download"></script>
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
  <div class="header section">
    <div>
      <h3 class="head_style_a">Contact Us</h3>
    </div>
  </div>

  @include('public.'.$current_website->name.'.components.'.$page['head_img_contact_us']['component_template']['path'])

  <br/>


  @include('public.'.$current_website->name.'.components.'.$page['contactus_map']['component_template']['path'])


  <div class="header section">
    <div>
     <br>

        @if((isset($_REQUEST['submit'])&&($_REQUEST['submit']!='')))
           <h3 class="head_style_a">Thank You for your message</h3>
        @endif
      <h3 class="head_style_a">Or you can send us a direct message</h3>

    </div>
  </div>
  <div class="row" id="formDiv">

<div class="col-lg-8 col-lg-offset-2">

<form id="form1" method="post" action="/fuso/contact_us/send">
    <input name="_token" hidden value="{!! csrf_token() !!}" />
    
    <div class="btn-group">
      {{--<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
        {{--Type of Inquiry--}}
        {{--<span class="caret"></span>--}}
      {{--</button>--}}
      {{--<ul class="dropdown-menu">--}}
        {{--<li role="presentation" class="dropdown-header">Dropdown header 1</li>--}}
        {{--<li role="presentation"><a href="#">First Link</a></li>--}}
        {{--<li role="presentation" class="disabled"><a href="#">Disabled Link</a></li>--}}
        {{--<li role="presentation" class="divider"></li>--}}
        {{--<li role="presentation"><a href="#">Separated Link</a></li>--}}
        {{--</ul>--}}
      {{--</div>--}}
		  {{--<ul class="dropdown-menu">--}}
		    {{--<li><a href="#">Inquiry 1</a></li>--}}
		    {{--<li><a href="#">inquiry 2</a></li>--}}
		    {{--<li><a href="#">inquiry 3</a></li>--}}
		   {{--</ul>--}}
                    </div>
        {!!Form::text('name',null,['class'=> 'form-control','required'=>'required','placeholder'=>'Name']) !!}
        {!!Form::text('mobile',null,['class'=> 'form-control','placeholder'=>'Mobile']) !!}
        {!!Form::email('email',null,['class'=> 'form-control','required'=>'required','placeholder'=>'Email']) !!}
        {!!Form::textarea('message',null,['class'=> 'form-control','required'=>'required','rows'=> '6','id'=> 'comment','placeholder'=>'Message']) !!}

        {!!Form::hidden('website',$current_website->name,['class'=> 'form-control','value'=>$current_website->id]) !!}
 {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

        {!!Form::submit('send',['class'=> 'btn btn-info col-sm-4 col-sm-offset-8','value'=>'Send']) !!}
      <!-- <input type="text" class="form-control" placeholder="Name" />
     	<input type="tel" class="form-control" placeholder="Mobile" />
     	<input type="email" class="form-control" placeholder="Email" />
     	<textarea class="form-control" rows="6" id="comment" placeholder="Message"></textarea>
     	<input type="submit" class="btn btn-info col-sm-4 col-sm-offset-8" value="Send"> -->
      </form>

    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

  </div>
</div>

</div>
    <script src="./assets/dealersearch.js.download"></script>

	<br/>
	<br/>
		<div class="right">
</div>
    </div>
</div>

        @include('public.'.$current_website->name.'.components.'.$page['footer']['component_template']['path'])
</div>



<!--<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><span style="border-radius: 3px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 11px; line-height: 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, sans-serif; color: rgb(255, 255, 255); background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjYmQwODFjIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(189, 8, 28); position: absolute; opacity: 1; z-index: 8675309; display: block; cursor: pointer; border: none; -webkit-font-smoothing: antialiased; top: 489px; left: 627px;">Save</span><span style="border-radius: 3px; text-indent: 20px; width: 20px; height: 20px; background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiIHZpZXdCb3g9IjAgMCAzMCAzMCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4KPGc+CjxwYXRoIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSI0IiBkPSJNMTcsMTcgTDIyLDIyIFogIi8+CjxjaXJjbGUgc3Ryb2tlPSIjZmZmIiBjeD0iMTMiIGN5PSIxMyIgcj0iNiIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjUiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMCBMOCwwIEw4LDMgTDMsMyBMMyw4IEwwLDggWiIvPgo8cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzAsMjIgTDMwLDMwIEwyMiwzMCBMMjIsMjcgTDI3LDI3IEwyNywyMiBaIi8+CjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zMCwwIEwzMCw4IEwyNyw4IEwyNywzIEwyMiwzIEwyMiwwIFoiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMjIgTDMsMjIgTDMsMjcgTDgsMjcgTDgsMzAgTDAsMzBaIi8+CjwvZz4KPC9zdmc+Cg==&quot;) 50% 50% / 14px 14px no-repeat rgba(0, 0, 0, 0.4); position: absolute; opacity: 1; z-index: 8675309; display: block; cursor: pointer; border: none; top: 489px; left: 681px;"></span></body></html>-->
