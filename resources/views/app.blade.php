<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CV Admin Panel</title>

	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/bk-style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				{{--<a class="navbar-brand" href="#">Laravel</a>--}}
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				@if (!Auth::guest())
                            <ul class="nav navbar-nav">
					<li><a href="/Admin" style="padding-top: 5px !important;"><img src="/admin_assets/logo.png" alt=""/></a></li>
					<li><a href="/" target="_blank">Visit Website</a></li>
					<li><a href="{{action('WebsiteController@index')}}"  target="_blank">Websites</a></li>
<!--					<li><a href="{{action('MenuTemplateController@index')}}"  target="_blank">Menu Template</a></li>
                                         <li><a href="{{action('LocationCategoryController@index')}}">Locations Category</a></li>-->

                                        {{--<li class="dropdown">--}}
                             {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Websites<span class="caret"></span></a>--}}
                             {{--<ul class="dropdown-menu">--}}
                               {{--<li><a href="{{action('LocationController@index')}}">Locations</a></li>--}}
                               {{--<li><a href="{{action('LocationTypeController@index')}}">Location Types</a></li>--}}
                               {{--<li><a href="{{action('LocationGovernorateController@index')}}">Location Governorates</a></li>--}}
                               {{--<li><a href="{{action('BranchController@index')}}">Branches</a></li>--}}
                             {{--</ul>--}}
                        {{--</li>--}}
				</ul>
@endif

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<!--    <li><a href="/auth/register">register</a></li>-->
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
<div class="container">
	@yield('content')
</div>
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text text-center" style="width: 100%">© 2017 - Developed by <a href="http://www.mortimerharvey.com" target="_blank" a>Mortimer Harvey Africa Middle East - Egypt<img src="/admin_assets/mh_logo_h48.png" style="margin-left:15px " alt=""/></a></p>
    </div>
    </div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
