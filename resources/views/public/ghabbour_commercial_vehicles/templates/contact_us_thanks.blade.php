<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GCV | Contact Us</title>
    <link href="assets/favIcon.png" rel="icon" type="image/png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">

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
  <nav class="navbar navbar-default navbar-fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"> <a href="tel: 19216" class="navbar-brand hidden-sm hidden-md hidden-lg" id="hotlineMobile"> <img src="assets/hotline.png" alt="" width="100" height="35"/></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand logoX" href="index.html"> <img src="assets/logo.png" alt="" width="118" height="54"/></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="index.html" class="activeX">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LINE OF BUSINESS&nbsp;<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
          <ul class="dropdown-menu row">
            <li><a href="trucks.html">TRUCKS</a></li>
            <li><a href="constructionEquipment.html">CONSTRUCTION EQUIPMENTS</a></li>
            <li><a href="buses.html">BUSES</a></li>
            <li><a href="generators.html">GENERATORS</a></li>
          </ul>
        </li>
        <li><a href="locations.html">LOCATIONS</a></li>
        <li><a href="contacts.html">CONTACTS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="hotlineMenu">
        <li id="languageX"> <a href="#">AR </a>/<a href="#" class="activeX"> EN</a> </li>
        <li class="hidden-xs"><a href="tel: 19216" id="hotlineX"> <img src="assets/hotline.png" width="100" height="35" alt=""/></a></li>
      </ul>
      <form class="navbar-form navbar-right" id="menuSearch" role="search">
        <div class="input-group">
          <input type="text" class="form-control transparent-input" placeholder="Search...">
          <span class="input-group-btn">
            <button class="btn searchIcon" type="submit"> <img src="assets/searchIcon.png" alt=""/> </button>
          </span> </div>
        <!-- /input-group -->
      </form>
    </div>
    <!-- /.navbar-collapse -->
    <!-- /.container-fluid -->
  </nav>
  <div class="row" id="googleMap">
	<iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=17&center=30.0681%2C31.0378&key=AIzaSyBoBOJ5tVNmm0vNho8MCC-b1XV72Gv2ljQ" allowfullscreen></iframe>
   </div>
  <div class="container-fluid" id="pageX">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
<div class="row contacts">
<div class="col-sm-10 col-sm-offset-1">&nbsp;


</div>
</div>


<div class="col-sm-12 col-md-10 col-md-offset-1" id="formContact">
  <form id="form1" name="form1" action="/ghabbour_commercial_vehicles/contact_us/send" method="post">
  <input name="_token" hidden value="{!! csrf_token() !!}" />
    <div class="btn-group col-sm-offset-2 col-sm-4">




{!!Form::select('brand',[null=>'SELECT A BRAND']+
       $brands,null,
       ['class'=> 'btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12','data-toggle'=>'dropdown', 'aria-haspopup' =>'true', 'aria-expanded'=>'false']) !!}


<!--
      <select class="btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <option>SELECT A BRAND
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </option>
        <option>SELECT A BRAND
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </option>
    </select> -->
    </div>
    <div class="btn-group col-sm-4">

      {!!Form::select('city',[null=>'CHOOSE A CITY']+
                $cities,null,
                ['class'=> 'btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12','data-toggle'=>'dropdown', 'aria-haspopup' =>'true', 'aria-expanded'=>'false']) !!}


      <!-- <select class="btn btn-lg btn-default dropdown-toggle leftTextX col-sm-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <option>CHOOSE A CITY <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </option>
        <option>SELECT A BRAND <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </option>
    </select> -->

    </div>
<!-- <input name="name" type="text" class="col-sm-8 col-sm-offset-2 col-xs-12" id="name" placeholder="NAME"> -->
     {!!Form::text('name',null,['class'=> 'col-sm-8 col-sm-offset-2 col-xs-12','id'=>'name', 'placeholder'=>'NAME']) !!}
     {!! $errors->first('name', '<div class="error col-sm-8 col-sm-offset-2 col-xs-12">:message</div>')  !!}
     {!!Form::text('mobile',null,['class'=> 'col-sm-8 col-sm-offset-2 col-xs-12','id'=>'mobile', 'placeholder'=>'MOBILE']) !!}
     {!!Form::email('email',null,['class'=> 'col-sm-8 col-sm-offset-2 col-xs-12','id'=>'name3', 'placeholder'=>'E-MAIL']) !!}
     {!! $errors->first('email', '<div class="error col-sm-8 col-sm-offset-2 col-xs-12">:message</div>')  !!}
     {!!Form::text('message',null,['class'=> 'col-sm-8 col-sm-offset-2 col-xs-12','id'=>'message', 'placeholder'=>'MESSAGE']) !!}
     {!! $errors->first('message', '<div class="error col-sm-8 col-sm-offset-2 col-xs-12">:message</div>')  !!}
     {!!Form::hidden('website',$current_website->name,['class'=> 'form-control','value'=>$current_website->id]) !!}
     {!!Form::submit('submit',['class'=>'col-sm-3 col-sm-offset-7 col-xs-10 col-xs-offset-1','id'=>'submit','value'=>'SUBMIT']) !!}
    <!-- <input name="mobile" type="number" class="col-sm-8 col-sm-offset-2 col-xs-12" id="mobile" placeholder="MOBILE">
    <input name="email" type="email" class="col-sm-8 col-sm-offset-2 col-xs-12" id="name3" placeholder="E-MAIL">
    <input name="message" type="text" class="col-sm-8 col-sm-offset-2 col-xs-12" id="message" placeholder="MESSAGE">
    <input name="submit" type="submit" class="col-sm-3 col-sm-offset-7 col-xs-10 col-xs-offset-1" id="submit" value="SUBMIT"> -->
  </form>
  &nbsp;</div>

{{-- @include ('errors.list') --}}

    </div>
</div>
</div>
<footer class="row">
  <div class="col-sm-10 col-lg-offset-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">HOME</a></li>
        <li><a href="/ghabbour_commercial_vehicles/about">ABOUT</a></li>
        <li><a href="#">LINE OF BUSINESS</a></li>
        <li><a href="/ghabbour_commercial_vehicles/locations">LOCATIONS</a></li>
        <li><a href="/ghabbour_commercial_vehicles/contact_us">CONTACTS</a></li>
      </ul>
    </div>
    <div class="col-sm-5 col-lg-offset-1 mortimerHarvey col-xs-6">All Rights Reserved 2017</div>
    <div class="right col-sm-5 mortimerHarvey col-xs-6">Website by <a href="http://mortimerharvey.com/" target="_blank">Mortimer Harvey</a></div>
    <div class="row"> </div>
  </footer>
  <script src="js/jquery-1.11.3.min.js"></script>

  	<script src="js/bootstrap.js"></script>
  	<script src="js/script.js"></script>
  </body>
</html>
