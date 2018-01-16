<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hyundai Egypt Admin Panel</title>
	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	{{--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>--}}


    {{--bootstrap-switch--}}
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">
    <link href="/css/admin/admin_css.css" rel="stylesheet">

    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="/admin_assets/logo_symbol_h60.png">
    <style>
        .main-container{
            padding-bottom: 200px;
        }
            .img-margin{
                margin: 15px;
            }
            .modal-dialog{
                z-index: inherit;
            }
            .bootstrap-switch-handle-off.bootstrap-switch-default{
                position: absolute !important;
            }
            .icon-size{
                    font-size: 80pt;
                    cursor: pointer;
                }
            .icon-size-med{
                 font-size: 20pt;
                cursor: pointer;
            }

    </style>
        <style>

            .MainlestingTable {
                width: 100%;
            }
            .MainlestingTable thead{
                       background: #EEEEEE;
                       min-height: 30px;
                    }
            .MainlestingTable thead td{
                height: 40px;
                padding-left: 10px;
                font-weight: bold;
            }
            .MainlestingTable tr:hover {
                background: #b5dbff;
            }
            .MainlestingTable tr:nth-child(odd) {

                background: #fafafa;
            }
             .MainlestingTable tr:nth-child(even) {

                        background: #f3f3f3;
                    }
             .MainlestingTable tr:hover {
                         background: #b5dbff;
              }

              .MainlestingTable .IDNum, .MainlestingTable .btnAction {
              text-align: center;
              }
              .MainlestingTable td {
              padding:5px;
              }

        </style>


	<!-- Fonts -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>


	<![endif]-->
</head>
<body>
	{{--<nav class="navbar navbar-default">--}}
		{{--<div class="container-fluid">--}}
			{{--<div class="navbar-header">--}}
				{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">--}}
					{{--<span class="sr-only">Toggle Navigation</span>--}}
					{{--<span class="icon-bar"></span>--}}
					{{--<span class="icon-bar"></span>--}}
					{{--<span class="icon-bar"></span>--}}
				{{--</button>--}}
				{{--<a class="navbar-brand" href="#">Laravel</a>--}}
			{{--</div>--}}

			{{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}

				{{--<ul class="nav navbar-nav" style="max-width: 90%">--}}

					{{--<li><a href="/Admin"><img src="/admin_assets/hyundai_logo.gif" alt=""/></a></li>--}}
					 {{--<li><a href="{{action('MenusController@index')}}">Menus</a></li>--}}
                    {{--<li><a href="{{action('MenuItemsController@index')}}">Showroom Menu Items</a></li>--}}
                    {{--<li><a href="{{action('OtherMenuItemController@index')}}">Shopping & Services Menu Items</a></li>--}}
                    {{--<li><a href="{{action('ShoppingToolController@index')}}">Shopping Tools Menu Items</a></li>--}}
                    {{--<li><a href="{{action('CategoriesController@index')}}">Categories</a></li>--}}
                    {{--<li><a href="{{action('DriveConfigurationsController@index')}}">Drive Configurations</a></li>--}}
                    {{--<li><a href="{{action('FuelTypesController@index')}}">Fuel Types</a></li>--}}
                    {{--<li><a href="{{action('CarController@index')}}">Cars</a></li>--}}
                    {{--<li><a href="{{action('StaticPageController@index')}}">Pages</a></li>--}}
                    {{--<li><a href="{{action('FooterMenuController@index')}}">Footer Menus</a></li>--}}
                    {{--<li><a href="{{action('FooterMenuItemController@index')}}">Footer Menu Items</a></li>--}}
                    {{--<li><a href="{{action('FooterSecondaryLinksController@index')}}">Footer Menu Secondary Items</a></li>--}}
                    {{--<li><a href="{{action('LocationTypeController@index')}}">Location Types</a></li>--}}
                    {{--<li><a href="{{action('LocationGovernorateController@index')}}">Location Governorates</a></li>--}}
                    {{--<li><a href="{{action('LocationController@index')}}">Locations</a></li>--}}
                    {{--<li><a href="{{action('SparePartController@index')}}">Spare Parts</a></li>--}}
                    {{--<li><a href="{{action('WarrantyController@index')}}">Car Warranties</a></li>--}}
                    {{--<li><a href="{{action('MaintenanceController@index')}}">Car Maintenance</a></li>--}}
                    {{--<li><a href="{{action('RequestContactTypeController@index')}}">Contact Type</a></li>--}}
                    {{--<li><a href="{{action('RequestContactController@index')}}">Contact Requests</a></li>--}}
                    {{--<li><a href="{{action('NewsLetterUsersController@index')}}">Newsletter Requests</a></li>--}}
                    {{--<li><a href="{{action('ServiceOfferController@index')}}">Service Offers</a></li>--}}
                    {{--<li><a href="{{action('MediaCenterItemController@index')}}">Media Center</a></li>--}}
                    {{--<li><a href="{{action('MediaCenterItemTypeController@index')}}">Media Center Types</a></li>--}}
                    {{--<li><a href="{{action('CSRController@index')}}">CSR</a></li>--}}
                    {{--<li><a href="{{action('HomePageFeaturedLinkController@index')}}">Homepage Featured Links</a></li>--}}
                    {{--<li><a href="{{action('RequestBrochureController@index')}}">Brochures</a></li>--}}
                    {{--<li><a href="{{action('BranchController@index')}}">Branches</a></li>--}}
                    {{--<li><a href="{{action('CarSpecsController@index')}}">Car Specs</a></li>--}}
                    {{--<li><a href="{{action('SettingsController@index')}}">Settings</a></li>--}}
				{{--</ul>--}}

				{{--<ul class="nav navbar-nav navbar-right">--}}
					{{--@if (Auth::guest())--}}
						{{--<li><a href="/auth/login">Login</a></li>--}}
						{{--<li><a href="/auth/register">Register</a></li>--}}
					{{--@else--}}
						{{--<li class="dropdown">--}}
							{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>--}}
							{{--<ul class="dropdown-menu" role="menu">--}}
								{{--<li><a href="/auth/logout">Logout</a></li>--}}
							{{--</ul>--}}
						{{--</li>--}}
					{{--@endif--}}
				{{--</ul>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</nav>--}}
	<nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" style="padding-top: 5px !important;" href="/Admin"><img src="/admin_assets/hyundai_logo.gif" alt=""/></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="/" target="_blank">Visit Website</a></li>
             <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menus <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{action('MenusController@index')}}">Menus</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{action('MenuItemsController@index')}}">Showroom Menu Items</a></li>
                    <li><a href="{{action('OtherMenuItemController@index')}}">Shopping & Services Menu Items</a></li>
                    <li><a href="{{action('ShoppingToolController@index')}}">Shopping Tools Menu Items</a></li>
                  </ul>
             </li>

             <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cars <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="{{action('CarController@index')}}">Cars</a></li>
                     <li role="separator" class="divider"></li>
                     <li><a href="{{action('CategoriesController@index')}}">Categories</a></li>
                     <li><a href="{{action('DriveConfigurationsController@index')}}">Drive Configurations</a></li>
                     <li><a href="{{action('FuelTypesController@index')}}">Fuel Types</a></li>
                     <li><a href="{{action('StaticCarSpecController@index')}}">Car Specs</a></li>
                     <li><a href="{{action('SparePartController@index')}}">Spare Parts</a></li>
                     <li><a href="{{action('WarrantyController@index')}}">Car Warranties</a></li>
                     <li><a href="{{action('MaintenanceController@index')}}">Car Maintenance</a></li>
                     <li><a href="{{action('RequestBrochureController@index')}}">Brochures</a></li>
                   </ul>
              </li>
               <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Footer Menus<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="{{action('FooterMenuController@index')}}">Footer Menus</a></li>
                       <li role="separator" class="divider"></li>
                        <li><a href="{{action('FooterMenuItemController@index')}}">Footer Menu Items</a></li>
                        <li><a href="{{action('FooterSecondaryLinksController@index')}}">Footer Menu Secondary Items</a></li>
                     </ul>
                </li>
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locations<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="{{action('LocationController@index')}}">Locations</a></li>
                       <li><a href="{{action('LocationTypeController@index')}}">Location Types</a></li>
                       <li><a href="{{action('LocationGovernorateController@index')}}">Location Governorates</a></li>
                       <li><a href="{{action('BranchController@index')}}">Branches</a></li>
                     </ul>
                </li>
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Requests<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="{{action('RequestContactController@index')}}">Contact Requests</a></li>
                       <li><a href="{{action('NewsLetterUsersController@index')}}">Newsletter Requests</a></li>
                       <li role="separator" class="divider"></li>
                       <li><a href="{{action('RequestContactTypeController@index')}}">Contact Type</a></li>
                     </ul>
                </li>
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media Center<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{action('MediaCenterItemTypeController@index')}}">Media Center Types</a></li>
                        <li><a href="{{action('MediaCenterItemController@index')}}">Media Center</a></li>
                        {{--<li><a href="{{action('CSRController@index')}}">CSR</a></li>--}}
                     </ul>
                </li>
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home Page<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{action('HomePageFeaturedLinkController@index')}}">Homepage Featured Links</a></li>
                        <li><a href="{{action('ServiceOfferController@index')}}">Service Offers</a></li>
                     </ul>
                </li>

            <li><a href="{{action('StaticPageController@index')}}">Pages</a></li>
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">G-Analytics & SEO<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                        <li><a href="{{action('SettingsController@index')}}">Settings</a></li>
                        <li><a href="{{action('CarController@listCarSeo')}}">Cars SEO</a></li>
                        <li><a href="{{action('StaticPageController@listPageSeo')}}">Static Pages SEO</a></li>

                 </ul>
            </li>



            {{--<li class="dropdown">--}}
              {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
              {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#">Action</a></li>--}}
                {{--<li><a href="#">Another action</a></li>--}}
                {{--<li><a href="#">Something else here</a></li>--}}
                {{--<li role="separator" class="divider"></li>--}}
                {{--<li><a href="#">Separated link</a></li>--}}
                {{--<li role="separator" class="divider"></li>--}}
                {{--<li><a href="#">One more separated link</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
          </ul>
          {{--<form class="navbar-form navbar-left">--}}
            {{--<div class="form-group">--}}
              {{--<input type="text" class="form-control" placeholder="Search">--}}
            {{--</div>--}}
            {{--<button type="submit" class="btn btn-default">Submit</button>--}}
          {{--</form>--}}
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/auth/logout">Logout</a></li>
                    </ul>
                </li>
            @endif
        </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container main-container">
@include('flash::message')

    {{--@include('Admin.flash_messages.flash')--}}

	    @yield('content')
	    {{--@include('Admin.side_navigation')--}}

    </div>
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text text-center" style="width: 100%">© 2016 - Developed by <a href="http://www.mortimerharvey.com" target="_blank" a>Mortimer Harvey Africa Middle East - Egypt<img src="/admin_assets/mh_logo_h48.png" style="margin-left:15px " alt=""/></a></p>
    </div>


  </div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Ahmed Waly
 * Date: 12/28/2015
 * Time: 12:15 PM
 */

 ?>