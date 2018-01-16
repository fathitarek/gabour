<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Volvo | Categories</title>
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
            @include('public.'.$current_website->name.'.components.'.'.comp_index.'.$page['small_menu']['component_template']['path'])
            @include('public.'.$current_website->name.'.components.'.'.comp_index.'.$page['main_menu']['component_template']['path'])
        </div>

        <!-- InstanceBeginEditable name="ContentX" -->
        <div class="contentX">
            @include('public.'.$current_website->name.'.components.'.$page['main_content']['component_template']['path'])

            @include('public.'.$current_website->name.'.components.'.'.comp_attachments.'.$page['get_in_touch']['component_template']['path'])

        </div>
            @include('public.'.$current_website->name.'.components.'.'.comp_index.'.$page['footer']['component_template']['path'])

        <!-- InstanceEndEditable -->
        {!!$page->template->footer_includes!!}
      </div>


    </body>
<!-- InstanceEnd -->
</html>