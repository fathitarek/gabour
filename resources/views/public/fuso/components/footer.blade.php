<style>
    .GhabbourLogo {
        background-color: #FFFFFF;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-right: 10px;
        padding-left: 10px;
    }
</style>
<div id="LAST_AREA" class="clearfix">
    <ul id="GLJP_CHANGES">
        <li id="GHANGES_GL"><a href="/fuso/home_ar">Ar</a> / <a href="/fuso/home">En</a></li>
    </ul>
    <div class="footer"><div id="FOOTER_AREA" class="clearfix">
            <div id="FOOTER_WRAP" class="clearfix" data-footerdata="[{&quot;heading&quot;:&quot;PRODUCTS&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/lineup/truck/index.html&quot;,&quot;title&quot;:&quot;Trucks&quot;},{&quot;url&quot;:&quot;/content/fuso/en/lineup/busesvans/index.html&quot;,&quot;title&quot;:&quot;Buses &amp; Vans&quot;},{&quot;url&quot;:&quot;/content/fuso/en/lineup/engine/index.html&quot;,&quot;title&quot;:&quot;Industrial Engines&quot;}]},{&quot;heading&quot;:&quot;PARTS &amp; SERVICES&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/service/partsandaccessories/genuine_parts.html&quot;,&quot;title&quot;:&quot;Parts &amp; Accessories&quot;},{&quot;url&quot;:&quot;/content/fuso/en/service/service/index.html&quot;,&quot;title&quot;:&quot;Services&quot;},{&quot;url&quot;:&quot;/content/fuso/en/service/tco/index.html&quot;,&quot;title&quot;:&quot;TCO Simulator&quot;},{&quot;url&quot;:&quot;/content/fuso/en/service/financial_services/index.html&quot;,&quot;title&quot;:&quot;Financial Services&quot;}]},{&quot;heading&quot;:&quot;ABOUT US&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/aboutus/fusobrand/history.html&quot;,&quot;title&quot;:&quot;Fuso Brand&quot;},{&quot;url&quot;:&quot;/content/fuso/en/aboutus/corporate_profile/index.html&quot;,&quot;title&quot;:&quot;Corporate Profile&quot;},{&quot;url&quot;:&quot;/content/fuso/en/aboutus/career/video.html&quot;,&quot;title&quot;:&quot;Career&quot;}]},{&quot;heading&quot;:&quot;NEWS &amp; MEDIA&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/news/index.html&quot;,&quot;title&quot;:&quot;Press Releases&quot;}]},{&quot;heading&quot;:&quot;DISTRIBUTOR&lt;br&gt;NETWORK&quot;,&quot;url&quot;:&quot;/content/fuso/en/index.html#MAP_AREA&quot;,&quot;urls&quot;:[{&quot;url&quot;:&quot;/content/fuso/en/usage.html&quot;,&quot;title&quot;:&quot;Terms of Use&quot;},{&quot;url&quot;:&quot;/content/fuso/en/pi_protection/index.html&quot;,&quot;title&quot;:&quot;Privacy Policy&quot;}]}]">
                <div id="FOOTER_MENU" class="pc_display clearfix">
                    <div>
                        @foreach($page['footer']['special_listing_1_data'][0]->menuItems as $index =>$menu_item)
                       @if($menu_item->published==1)
                        @if($menu_item->menu_item_id==0)
                         
                        @if(count($menu_item->menuItems))
                        <dl>
                            <dt> {{$menu_item->display_name}} </dt>
                            @foreach($menu_item->menuItems as $sub_index =>$sub_menu_item)
                             @if($sub_menu_item->published==1)
                            <dd>
                                <ul>
                                    <li> <a href="{{$sub_menu_item->url}}">{{$sub_menu_item->display_name}}</a> </li>
                                    
                                </ul>
                            </dd>
                             @endif
                            @endforeach
                        </dl>

                        @else
                        <dl>
                            <dt> <a href="{{$menu_item->url}}">{{$menu_item->display_name}}</a> </dt>
                            <dd>&nbsp; </dd>
                        </dl>
                        @endif
                        @endif
                        @endif
                        @endforeach
                    </div>
                    <script>

                        var buttonsloaded = false;


                        window.setInterval(function () {
                            if (!(buttonsloaded) && $('button.coral-Button', window.parent.document).length) {
                                $('button.coral-Button', window.parent.document).on('click', function () {
                                    if ($(window).width() <= 1024 && $(this).data('path').match(/footer/)) {
                                        alert('Your screen is not wide enough to edit the footer.  Please enlarge your screen and try again.');
                                        return false;
                                    }
                                    return true;
                                });
                            }

                        }, 500);


                        var popuploaded = false;
                        var footerdata = JSON.parse('[{"heading":"PRODUCTS","urls":[{"url":"/content/fuso/en/lineup/truck/index.html","title":"Trucks"},{"url":"/content/fuso/en/lineup/busesvans/index.html","title":"Buses & Vans"},{"url":"/content/fuso/en/lineup/engine/index.html","title":"Industrial Engines"}]},{"heading":"PARTS & SERVICES","urls":[{"url":"/content/fuso/en/service/partsandaccessories/genuine_parts.html","title":"Parts & Accessories"},{"url":"/content/fuso/en/service/service/index.html","title":"Services"},{"url":"/content/fuso/en/service/tco/index.html","title":"TCO Simulator"},{"url":"/content/fuso/en/service/financial_services/index.html","title":"Financial Services"}]},{"heading":"ABOUT US","urls":[{"url":"/content/fuso/en/aboutus/fusobrand/history.html","title":"Fuso Brand"},{"url":"/content/fuso/en/aboutus/corporate_profile/index.html","title":"Corporate Profile"},{"url":"/content/fuso/en/aboutus/career/video.html","title":"Career"}]},{"heading":"NEWS & MEDIA","urls":[{"url":"/content/fuso/en/news/index.html","title":"Press Releases"}]},{"heading":"DISTRIBUTOR<br>NETWORK","url":"/content/fuso/en/index.html#MAP_AREA","urls":[{"url":"/content/fuso/en/usage.html","title":"Terms of Use"},{"url":"/content/fuso/en/pi_protection/index.html","title":"Privacy Policy"}]}]');
                        window.setInterval(function () {
                            if (!(popuploaded) && $('.footercontainer', window.parent.document).length) {
                                popuploaded = true;
                                window.parent.footerdata = footerdata;
                                $.each(footerdata, function (index, elem) {
                                    var urls = elem['urls'];
                                    $.each(urls, function (urlindex, url) {
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



                        window.setInterval(function () {
                            if ($('.footercontainer', window.parent.document).length == 0) {
                                popuploaded = false;
                            }
                        }, 500);
                    </script>
                </div>
                <div id="SNS_FIELD" class="clearfix">
                    <ul id="JP_ORG_LINKS">


                    </ul>

                    <dl id="FOLLOW_US">
                        <dt>Follow us:</dt>
                        <dd>
                            <ul>
                                <li><a href="https://www.facebook.com/FusoOfficial" target="_blank"><img src="./assets/sns-f_on.png" /></a></li>
                                <li><a href="https://www.youtube.com/user/Fusoofficial" target="_blank"><img src="./assets/sns-y_on.png" /></a></li>
                                <li><a href="https://www.youtube.com/user/Fusoofficial" target="_blank"><img src="assets/sns-t_on.png" /></a></li>

                            </ul>
                        </dd>
                    </dl>
                </div>


            </div>
        </div>
    </div>
    <address class="COPYRIGHT2">
        <span>Mitsubishi Fuso authorized distributor <br />
            Ghabbour Auto</span>
    </address>
    <address id="COPYRIGHT">
        <span>©&nbsp;2017
            Ghabbour Auto. All rights reserved.</span></address>
    <form action="http://www.mitsubishi-fuso.com/content/fuso/en/search_result.html" name="searchform" class="logoX">
        <a href="#"><img src="assets/logo.png" width="118" height="54" alt="" class="GhabbourLogo"/></a>
    </form>
    <form action="http://www.mitsubishi-fuso.com/content/fuso/en/search_result.html" name="searchform" id="searchform">
        <dl class="clearfix">
            <dt>
                <input type="text" placeholder="Search" value="" id="keywords" name="q" />
            </dt>
            <dd>
                <input type="image" src="./assets/null.gif" alt="" name="searchBtn" id="searchBtn" />
            </dd>
        </dl>
    </form>
    <script type="text/javascript" src="./assets/brand"></script>
</div>