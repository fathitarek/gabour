<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GCV | Contact Us</title>
    {!!$page->template->includes!!}
    <!--    <link href="assets/favIcon.png" rel="icon" type="image/png" />-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">-->
    <!--    <!-- Bootstrap -->
    <!--    <link href="css/bootstrap.css" rel="stylesheet">-->
    <!--    <link href="css/style.css" rel="stylesheet" type="text/css">-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

  </head>
  <style>
  .error {
     /* border: 1px solid; */
      margin-bottom: 15px;
      padding: 7px 10px 7px 50px;
      color: #D8000C;
      background-color: #FFBABA;
  }
  </style>
  <body>
  @include('public.'.$current_website->name.'.components.'.$page['main_menu']['component_template']['path'])

  <div class="row" id="googleMap">
	<iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=17&center=30.0681%2C31.0378&key=AIzaSyBoBOJ5tVNmm0vNho8MCC-b1XV72Gv2ljQ" allowfullscreen></iframe>
   </div>
  <div class="container-fluid" id="pageX">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
<div class="row contacts">
<div class="col-sm-10 col-sm-offset-1">&nbsp;

  @include('public.'.$current_website->name.'.components.'.$page['contact_details']['component_template']['path'])

</div>
</div>

@include('public.'.$current_website->name.'.components.'.$page['contact_title_desc']['component_template']['path'])

<div class="col-sm-12 col-md-10 col-md-offset-1" id="formContact">
  @include('public.'.$current_website->name.'.components.'.$page['contact_form']['component_template']['path'])

  &nbsp;</div>

{{-- @include ('errors.list') --}}

    </div>
</div>
</div>
@include('public.'.$current_website->name.'.components.'.$page['footer_menu']['component_template']['path'])

  {!!$page->template->footer_includes!!}
<script>
    var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var secondLevelLocation = pathArray[0];
    var newPathname = "";
        var id_link = document.getElementById(pathArray[2]);
        console.log("!!"+id_link)
  //alert(pathArray[2].split("_")[1]);
  if(pathArray[2]=='contact_us_ar'){
  $( "#mh" ).addClass( "text-left");
  $("#hotlineMenu").removeClass("navbar-right");
  $("#hotlineMenu").addClass("navbar-left");
    }
</script>
<script>
   var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var secondLevelLocation = pathArray[0];
    var newPathname = "";
        var id_link = document.getElementById(pathArray[2]);
        console.log("!!"+id_link)
  if(pathArray[2].split("_")[2]=='ar'){
    $("#english").removeClass("activeX");
  $("#arabic").addClass("activeX");
    }
 </script>
 <script>
   var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var secondLevelLocation = pathArray[0];
    var newPathname = "";
        var id_link = document.getElementById(pathArray[2]);
       // console.log("!!"+id_link)
  if(pathArray[2].split("_")[2]=='ar'){
  $("#english").removeClass("activeX");
  $("#arabic").addClass("activeX");
  $("#name").attr("placeholder","الاسم");
  $("#mobile").attr("placeholder","الموبايل / رقم الهاتف المحمول ");
  $("#name3").attr("placeholder","البريد الإلكتروني");
  $("#message").attr("placeholder","رسالتك");
  $("#submit").attr("value","إرسال");
  /**/
$("#city_id_en").css("display","none");
$("#city_id_ar").css("display","block");
$("#city_id_ar").attr("id","city_id");
$("#city_id_ar").attr("name","city_id");
/**/
$("#website_id_en").css("display","none");
$("#website_id_ar").css("display","block");
$("#website_id_ar").attr("id","website_id");
$("#website_id_ar").attr("name","website_id");
$("#msg").text('شكرا لرسالتك');
/**/
$("#form1").attr("action","/ghabbour_commercial_vehicles/contact_us_ar/send");
    }else{
        
 $("#city_id_ar").css("display","none");
$("#city_id_en").css("display","block");
$("#city_id_en").attr("id","city_id");
$("#city_id_en").attr("name","city_id");
/**/
$("#website_id_ar").css("display","none");
$("#website_id_en").css("display","block");
$("#website_id_en").attr("id","website_id");
$("#website_id_en").attr("name","website_id");
    }
 </script>
  </body>
</html>
