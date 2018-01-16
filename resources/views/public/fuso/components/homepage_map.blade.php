<div id="MAP_AREA" style="background-image: url(/{{$current_website->name}}/uploads/{{$page['homepage_map']['component_data']['file1']}});">
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16424.934810400522!2d31.029394396618436!3d30.067907777370596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585b744031a6a1%3A0x64a393c7532259a3!2sGB+Ghabbour+Auto+Hyundai+Showroom+Abu+Rawash!5e0!3m2!1sen!2seg!4v1494836867325" width="753" height="491" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    <div id="PC_MAP" class="pc_display">
        <div id="AREA_LIST" class="clearfix" style="display: none;"><a class="close" href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#"><img src="./assets/icon_map_close.png" alt="close" /></a><ul><li class="1"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">AUSTRIA</a></li><li class="2"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">BELARUS</a></li><li class="3"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">BELGIUM</a></li><li class="4"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">BULGARIA</a></li><li class="5"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">CROATIA</a></li><li class="6"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">CYPRUS</a></li><li class="7"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">CZECH REPUBLIC</a></li><li class="8"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">DENMARK</a></li><li class="9"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">ESTONIA</a></li><li class="10"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">FINLAND</a></li><li class="11"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">FRANCE</a></li><li class="12"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">GERMANY</a></li><li class="13"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">GREECE</a></li><li class="14"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">HUNGARY</a></li><li class="15"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">IRELAND</a></li><li class="16"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">ISRAEL</a></li></ul><ul><li class="17"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">ITALY</a></li><li class="18"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">LATVIA</a></li><li class="19"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">LITHUANIA</a></li><li class="20"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">MACEDONIA &amp; KOSOVO</a></li><li class="21"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">NETHERLANDS</a></li><li class="22"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">NORWAY</a></li><li class="23"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">POLAND</a></li><li class="24"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">PORTUGAL</a></li><li class="25"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">ROMANIA</a></li><li class="26"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">RUSSIA</a></li><li class="27"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">SERBIA</a></li><li class="28"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">SLOVAKIA</a></li><li class="29"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">SLOVENIA</a></li><li class="30"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">SPAIN</a></li><li class="31"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">SWITZERLAND</a></li><li class="32"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">UKRAINE</a></li></ul><ul><li class="33"><a href="http://www.mitsubishi-fuso.com/content/fuso/en/index.html#">UNITED KINGDOM</a></li></ul></div>
        <div id="AREA_DETAIL" style="display: none;"><div  id="bl" class="block"><strong>{{ $page['homepage_map']['component_data']['title'] }}</strong><p>{{ $page['homepage_map']['component_data']['name1'] }}</p><a class="website" href="/" target="_blank">{{ $page['homepage_map']['component_data']['link_text'] }}</a>
                <dl><dt > <span id="address_fuso" >Address:</span></dt><dd> {{ $page['homepage_map']['component_data']['address'] }}</dd></dl>
                <dl><dt > <span id="phone_fuso">Phone: </span></dt><dd> {{ $page['homepage_map']['component_data']['phone'] }}</dd></dl>
                <dl><dt > <span id="fax_fuso"> Fax: </span></dt><dd> {{ $page['homepage_map']['component_data']['fax'] }}</dd></dl>

            </div>
            <a class="close"><img src="./assets/icon_map_close.png" alt="close" /></a>
        </div>
    </div>

</div>

<script>
    
     var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var secondLevelLocation = pathArray[0];
    var newPathname = "";
        var id_link = document.getElementById(pathArray[2]);
       // console.log("!!"+id_link)
       console.log(pathArray[2].split("_")[1])
  if(pathArray[2].split("_")[1]=='ar'){
      $("#address_fuso").text('العنوان :');
  $("#phone_fuso").text(' التليفون :');
  $("#fax_fuso").text(' فاكس :');
  $("#bl").css('direction','rtl');
  }
    </script>