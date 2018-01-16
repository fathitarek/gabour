<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GCV | About</title>
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
<body>

 @include('public.'.$current_website->name.'.components.'.$page['main_menu']['component_template']['path'])
 @include('public.'.$current_website->name.'.components.'.$page['featured_image']['component_template']['path'])
    <div class="container-fluid" id="pageX">
        <div class="row secondRowX">
            <div class="col-sm-10 col-sm-offset-1">&nbsp;
                @include('public.'.$current_website->name.'.components.'.$page['featured_image_text']['component_template']['path'])
                <div class="row">
                @include('public.'.$current_website->name.'.components.'.$page['text_block_with_title']['component_template']['path'])

                </div>
                @include('public.'.$current_website->name.'.components.'.$page['who_we_are']['component_template']['path'])

                @include('public.'.$current_website->name.'.components.'.$page['mission_vision']['component_template']['path'])

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
  if(pathArray[2].split("_")[1]=='ar'){
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
  if(pathArray[2].split("_")[1]=='ar'){
  
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
        console.log("!!"+id_link)
  if(pathArray[2].split("_")[1]=='ar'){
  
 $('#who').text("من نحن؟!");
  }
 </script>
</body>
</html>
