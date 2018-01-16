<?php

function isCurl() {
    return function_exists('curl_version');
}

//var_dump(isCurl());
?>
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
}a

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



        <div id="CONTENTS_DATA">
            @if(count($page['the_benefits']['special_listing_1_data']))
            <div id="GP_BENEFIT_DATA">
                @foreach($page['the_benefits']['special_listing_1_data'] as $index =>$the_benefits)

                <dl id="GP_LIST_A" class="clearfix">
                    <dt><a href="#popup{{$index}}yT" class="open-popup-link" title="play video"><span>play video</span><img  style="width: 125px;" src="/{{$current_website->name}}/images/{{$the_benefits->image_en}}"></a></dt>
                    <dd><h4>{{$the_benefits->title_en}}</h4>
                        <p>{{$the_benefits->small_desc_en}}</p>
                        <p class="more_info"><a href="#popup{{$index}}" class="open-popup-link">More information</a></p></dd>
                </dl>
                <div id="popup{{$index}}" class="gp_popup mfp-hide">
                    <h3>{{$the_benefits->title_en}}</h3>
                    <div class="popup_img">
                        <img src="/{{$current_website->name}}/images/{{$the_benefits->image_en}}">
                    </div>
                    <div class="popup_text">
                        <p> {{$the_benefits->full_desc_en}}</p>
                    </div>
                </div>
                <div id="popup{{$index}}yT" class="gp_popup_y mfp-hide" style="text-align: center;">
                    <h3>{{$the_benefits->title_en}}</h3>

                    <iframe src="https://www.youtube.com/embed/{{$the_benefits->video}}?autoplay=1&rel=0&showinfo=0" style="height: 390px;width: 725px;" frameborder="0" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>
</div>
</div>
<div class="right">