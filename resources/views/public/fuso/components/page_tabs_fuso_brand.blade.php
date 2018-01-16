<div class="tabs section"><div>
        <ul id="EXEC_TAB">
            <li><a  id="{{$page['page_tabs_fuso_brand']['component_data']['link1']}}" href="{{$page['page_tabs_fuso_brand']['component_data']['link1']}}">
                    {{$page['page_tabs_fuso_brand']['component_data']['title1']}}</a></li>

            <li><a  id="{{$page['page_tabs_fuso_brand']['component_data']['link2']}}" href="{{$page['page_tabs_fuso_brand']['component_data']['link2']}}">
                    {{$page['page_tabs_fuso_brand']['component_data']['title2']}}</a></li>

            <li><a  id="{{$page['page_tabs_fuso_brand']['component_data']['link3']}}" href="{{$page['page_tabs_fuso_brand']['component_data']['link3']}}">
                    {{$page['page_tabs_fuso_brand']['component_data']['title3']}}</a></li>

            <li><a id="{{$page['page_tabs_fuso_brand']['component_data']['link4']}}" href="{{$page['page_tabs_fuso_brand']['component_data']['link4']}}">
                    {{$page['page_tabs_fuso_brand']['component_data']['title4']}}</a></li>

            <li><a id="{{$page['page_tabs_fuso_brand']['component_data']['link5']}}" href="{{$page['page_tabs_fuso_brand']['component_data']['link5']}}">
                    {{$page['page_tabs_fuso_brand']['component_data']['title5']}}</a></li>
        </ul>
        <br style="clear:both">
    </div>
</div>
<script>

    var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var secondLevelLocation = pathArray[0];
    var newPathname = "";
    //alert(pathArray[2]);
    //var id_link='';
    //if (pathArray[2] == 'fuso_brands') {
       
       // var i= document.getElementsByTagName('ul')[0];
        var id_link = document.getElementById(pathArray[2]);
        console.log("!!"+id_link)
//            alert(pathArray[2]);
//            alert(id_link);
        id_link.className += "active";
       // console.log("idd"+id_link);
       //$( "#fuso_brands" ).addClass( "active" );


   // }
    
  /*  if (pathArray[2] == 'fuso_brands') {
       
       // var i= document.getElementsByTagName('ul')[0];
        var id_link = document.getElementById("fuso_brands");
        console.log("!!"+id_link)
        id_link.className += "active";
       // console.log("idd"+id_link);
       //$( "#fuso_brands" ).addClass( "active" );


    }
    if (pathArray[2] == 'trusted_quality') {
        var id_link = document.getElementById("trusted_quality");
        id_link.className += " active";


    }
    if (pathArray[2] == 'economic_efficiency') {
        var id_link = document.getElementById("economic_efficiency");
        id_link.className += " active";


    }
    if (pathArray[2] == 'solidandfunctional') {
        var id_link = document.getElementById("solidandfunctional");
        id_link.className += " active";

    }
    if (pathArray[2] == 'committed_services') {
        var id_link = document.getElementById("committed_services");
        id_link.className += " active";

    }*/
</script>