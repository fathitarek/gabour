<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Volvo | Home</title>
        <!-- InstanceEndEditable -->
        <!-- Bootstrap -->
        {!!$page->template->includes!!}
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
        <!-- InstanceBeginEditable name="head" -->
        <!-- InstanceEndEditable -->
    </head>
    <body>

        <div class="container-fluid" id="pageX">
            <div class="headerX">
                @include('public.'.$current_website->name.'.components.'.'.comp_index.'.$page['arabic_main_menu']['component_template']['path'])
            </div>

            <!-- InstanceBeginEditable name="ContentX" -->
            <div class="contentX">
                @include('public.'.$current_website->name.'.components.'.'.comp_service.'.$page['main_image']['component_template']['path'])
               <div class="row volvo3setions">  
                @include('public.'.$current_website->name.'.components.'.'.comp_contact.'.$page['form']['component_template']['path'])

                @include('public.'.$current_website->name.'.components.'.'.comp_contact.'.$page['contact_info_ar']['component_template']['path'])
       </div>
                @include('public.'.$current_website->name.'.components.'.'.comp_index.'.$page['arabic_footer_trucks']['component_template']['path'])

            </div>
            {!!$page->template->footer_includes!!}

            <script>
                $('#myCarousel').carousel({
                    interval: 1000 * 10
                });

                //		$("#locations").onclick = function () {
                //			location.href = "locations.html";
                //		};

            </script>
            <script>
                $('#myCarousel.carousel[data-type="multi"] .item').each(function () {
                    var next = $(this).next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    next.children(':first-child').clone().appendTo($(this));

                    for (var i = 0; i < 4; i++) {
                        next = next.next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }

                        next.children(':first-child').clone().appendTo($(this));
                    }
                });
            </script>
                    <script>
   var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var secondLevelLocation = pathArray[0];
    var newPathname = "";
        var id_link = document.getElementById(pathArray[2]);
       // console.log("!!"+id_link)
       console.log(pathArray[2].split("_")[2])
  if(pathArray[2].split("_")[2]=='ar'){
  //$("#english").removeClass("activeX");
  //$("#arabic").addClass("activeX");
  $("#name").attr("placeholder","الاسم");
  $("#mbbile").attr("placeholder","الموبايل / رقم الهاتف المحمول ");
  $("#email").attr("placeholder","البريد الإلكتروني");
  $("#message").attr("placeholder","رسالتك");
  $("#submit").attr("value","إرسال");
  $("#form1").attr("action","/volvo_trucks/contact_us_ar/send");
  $("#thnk_msg").text("شكرا لارسال الرساله");
  $("#thnk_msg").css("padding-right", "173px");

  }
  </script>
    </body>
    <!-- InstanceEnd --></html>