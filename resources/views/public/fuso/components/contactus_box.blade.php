<div id="INFORMATION_AREA">
            <h2>{{$page['contactus_box']['component_data']['title']}}</h2>

            <ol>
                
                <li><a >
                        <div>
<!--                          <time>03/16/2017</time>-->
                         </div>
                        <dl>
                            <dt>{{$page['contactus_box']['component_data']['text']}}</dt>
                            <dd><!-- --></dd>
                        </dl>
                        </a>
                </li>
          </ol>

            <div id="BTN_ALL_NEWS" class="btn_red_type">
             <ul>
             <li><a href="{{$page['contactus_box']['component_data']['url']}}" target="_self">{{$page['contactus_box']['component_data']['link']}}</a></li>
             </ul>
            </div>
        </div>

<script>
       var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var secondLevelLocation = pathArray[0];
    var newPathname = "";
        var id_link = document.getElementById(pathArray[2]);
          if(pathArray[2].split("_")[1]=='ar'){
              
              
          }
    $('#INFORMATION_AREA').css('direction','rtl');
    </script>
    