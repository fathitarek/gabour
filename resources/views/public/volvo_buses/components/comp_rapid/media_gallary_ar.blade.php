<script type="text/javascript">
    function targetPageParams() {

        var channel = 'desktop';

        if (document.documentElement.clientWidth < 480) {
            channel = 'mobile';
        } else if (document.documentElement.clientWidth <= 768) {
            channel = 'tablet';
        }


        return "volvochannel=" + channel;
    }
</script>
<script src="./mediaGallery_files/satelliteLib-84fe818ad6eed564cf1d5083e9ab58fc54bdeef4.js.download"></script><script src="./mediaGallery_files/mbox-contents-a0e5b85e0e4daffa6152c632d6340b8ed2561385.js.download"></script><style>.mboxDefault { visibility:hidden; }</style><script src="./mediaGallery_files/target.js.download"></script><script src="./mediaGallery_files/ajax"></script>
<link rel="stylesheet" href="./mediaGallery_files/volvo-platform.min.css" type="text/css">

<script type="text/javascript">
    if (typeof window.volvo === "undefined") {
        window.volvo = {}
    }
    window.volvo.config = {
        screenXs: 480,
        screenSm: 768,
        screenMd: 992,
        screenLg: 1200
    };
    window.volvo.init = [];
    window.volvo.components = {};
</script>

<link type="text/css" rel="stylesheet">
<script src="./mediaGallery_files/satellite-5679283f64746d270a00a324.js.download"></script><script src="./mediaGallery_files/s-code-contents-f8d61c0aafc9487296657143e61fa09a431a72a2.js.download"></script></head>

<div class="main-content container">
    <div><div class="section empty">
            <a class="anchor" id="link-531" style="top: -138px;"></a> 

            <div class="mediaGallery">

                <div class="my-comp-016c2240-0cf8-42e2-b878-f150ab4f6e80 media" id="media">
                    <span class="current" style="display:none;">-1</span>
                    <span class="previewPos" style="display:none;">-1</span>
                    <div class="title-wrapper">
                        <h3 class="media-gallery-subtitle"></h3>
                        <h2 class="h1"> Gallery</h2>
                        
                    </div>
                    <div class="grid-wrapper">
                        <div class="grid-filters show-filter">
                            <i class="fa fa-file-photo-o"></i> <i class="fa fa-film"></i>
                        </div>
                        <div class="grid-container">
                            <ul id="grid" class="grid my-comp-016c2240-0cf8-42e2-b878-f150ab4f6e80">

                                @if(count($page['media_gallary_ar']['special_listing_1_data'][0]->sliderItems))
                                @foreach($page['media_gallary_ar']['special_listing_1_data'][0]->sliderItems as $index =>$slider_item)
                                @if($slider_item->published==1)
                               
                               
                                @if($slider_item->youtube_id)
                               
                               
                                <li class="video-grid">
                                    <a class="cta-video js-video-modal-trigger" href="http://www.volvotrucks.com/" data-galleryid="016c2240-0cf8-42e2-b878-f150ab4f6e80" data-id="mediaGallery-1d7bebfe-915f-45c3-90f4-2d407a6dfad7" data-type="mediaGallery-withDownload" data-mediumimgurl="/{{$current_website->name}}/images/{{$slider_item->img}}" data-bigimgurl="/{{$current_website->name}}/images/{{$slider_item->img}}" data-downloadimgurl="/{{$current_website->name}}/images/{{$slider_item->img}}" data-isvideo="true" data-video-src="https://www.youtube.com/embed/{{$slider_item->youtube_id}}" data-video-title="{{$slider_item->title}}" data-toggle="modal" data-target="#mediaGallery-016c2240-0cf8-42e2-b878-f150ab4f6e80" 
                                       data-download-text="High Resolution Image" data-cta3=" &lt;span&gt;(,)&lt;/span&gt;" id="link-532">
                                        <picture>
                                            <!--[if IE 9]>
                                            <video style="display: none;">
                                               <![endif]-->
                                            <source data-srcset="/{{$current_website->name}}/images/{{$slider_item->img}}">
                                            <!--[if IE 9]>
                                         </video>
                                         <![endif]--> 
                                            <img class="img-responsive lazyloaded" data-srcset="/{{$current_website->name}}/images/{{$slider_item->img}}">
                                        </picture>

                                        <i class="fa fa-play-circle"></i>

                                    </a>
                                </li>



                                @else
                                <li class="image-grid">
                                    <a class="image" href="http://www.volvotrucks.com/" data-galleryid="016c2240-0cf8-42e2-b878-f150ab4f6e80" data-id="mediaGallery-37a21ac0-9a36-458d-a28b-8fb05be204c3" data-type="mediaGallery-withDownload" data-title="{{$slider_item->title}}" data-description="{{$slider_item->caption}}" data-mediumimgurl="/{{$current_website->name}}/images/{{$slider_item->img}}" data-bigimgurl="/{{$current_website->name}}/images/{{$slider_item->img}}" data-downloadimgurl="/{{$current_website->name}}/images/{{$slider_item->img}}" data-image-filesize="1.8 MB" data-image-extension="JPG" data-isvideo="false" data-target="#mediaGallery-016c2240-0cf8-42e2-b878-f150ab4f6e80" data-download-text="High Resolution Image" data-cta3=" &lt;span&gt;(,)&lt;/span&gt;" data-cta3-isdownload="no" id="link-537">
                                        <picture>
                                            <!--[if IE 9]>
                                            <video style="display: none;">
                                               <![endif]-->
                                            <source data-srcset="/{{$current_website->name}}/images/{{$slider_item->img}}">                                                <!--[if IE 9]>
                                                         </video>
                                                         <![endif]--> 
                                            <img class="img-responsive lazyloaded" data-srcset="/{{$current_website->name}}/images/{{$slider_item->img}}" alt="Front view of the new Volvo FH and Volvo FH16 on the road" title="{{$slider_item->title}}" srcset="/{{$current_website->name}}/images/{{$slider_item->img}}">
                                        </picture>

                                    </a>
                                </li>

                                @endif
                                @endif
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="modal-016c2240-0cf8-42e2-b878-f150ab4f6e80" tabindex="-1" role="dialog" aria-labelledby="modal-label-modal-016c2240-0cf8-42e2-b878-f150ab4f6e80" aria-hidden="true" style="display: none;">
                <div class="modal-dialog default">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-dismiss="modal">
                            <i class="fa fa-close"></i> <span class="sr-only">Close</span>
                        </button>
                        <div class="modal-body">

                            <img src="http://www.volvotrucks.com/en-eg/trucks/volvo-fh-series/media-gallery.html" class="img-responsive" srcset="http://www.volvotrucks.com" data-srcset="http://www.volvotrucks.com"><a class="download" target="_blank" href="http://www.volvotrucks.com/en-eg/trucks/volvo-fh-series/media-gallery.html" id="link-562"></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
            <script>
    window.volvo.init.push(function () {
        //window.volvo.components.mediaGallery.init();
        window.volvo.components.mediaGallery("my-comp-016c2240-0cf8-42e2-b878-f150ab4f6e80");
    });
            </script>
        </div>

    </div>
    <div></div>
</div>
<script type="text/javascript" src="./mediaGallery_files/volvo-platform.min.js.download"></script>




<script type="text/javascript">
    $(window).load(function () {
        var getTargetSwappedImage = function (img) {
            var $this = img,
                    attr = $this.attr('src');

            if (typeof attr !== typeof undefined && attr !== false && attr.indexOf('placeholder.svg') == -1) {
                $this.attr('srcset', $this.attr('src'));
                $this.attr('data-srcset', $this.attr('src'));
                $this.closest('picture').find('source').attr('srcset', $this.attr('src'));
                $this.closest('picture').find('source').attr('data-srcset', $this.attr('src'));
            }
            return $this;
        }
        var getVolvoAudience = targetPageParams("target-global-mbox");
        if (getVolvoAudience["volvochannel"] !== null && getVolvoAudience["volvochannel"] !== "" && getVolvoAudience["volvochannel"] !== undefined) {
            if (getVolvoAudience["volvochannel"] === "desktop") {
                $('img').each(function () {
                    getTargetSwappedImage($(this));
                });
            }
            if (getVolvoAudience["volvochannel"] === "tablet") {
                $('img').each(function () {
                    getTargetSwappedImage($(this));
                });

            }
            if (getVolvoAudience["volvochannel"] === "mobile") {
                $('img').each(function () {
                    getTargetSwappedImage($(this));
                });
            }
        }
    });
</script>

<div class="ovelay-mask"></div>
<script type="text/javascript">_satellite.pageBottom();</script>
<script type="text/javascript">
    $.noConflict();
    // Code that uses other library's $ can follow here.
</script>

<span style="border-radius: 3px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 11px; line-height: 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, sans-serif; color: rgb(255, 255, 255); background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjYmQwODFjIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(189, 8, 28); position: absolute; opacity: 1; z-index: 8675309; display: none; cursor: pointer; border: none; -webkit-font-smoothing: antialiased;">Save</span><span style="border-radius: 3px; text-indent: 20px; width: 20px; height: 20px; background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiIHZpZXdCb3g9IjAgMCAzMCAzMCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4KPGc+CjxwYXRoIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSI0IiBkPSJNMTcsMTcgTDIyLDIyIFogIi8+CjxjaXJjbGUgc3Ryb2tlPSIjZmZmIiBjeD0iMTMiIGN5PSIxMyIgcj0iNiIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjUiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMCBMOCwwIEw4LDMgTDMsMyBMMyw4IEwwLDggWiIvPgo8cGF0aCBmaWxsPSIjZmZmIiBkPSJNMzAsMjIgTDMwLDMwIEwyMiwzMCBMMjIsMjcgTDI3LDI3IEwyNywyMiBaIi8+CjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zMCwwIEwzMCw4IEwyNyw4IEwyNywzIEwyMiwzIEwyMiwwIFoiLz4KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAsMjIgTDMsMjIgTDMsMjcgTDgsMjcgTDgsMzAgTDAsMzBaIi8+CjwvZz4KPC9zdmc+Cg==&quot;) 50% 50% / 14px 14px no-repeat rgba(0, 0, 0, 0.4); position: absolute; opacity: 1; z-index: 8675309; display: none; cursor: pointer; border: none;"></span>