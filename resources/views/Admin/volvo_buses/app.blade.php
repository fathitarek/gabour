<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volvo buses Admin Panel</title>

	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/bk-style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body onload="pageOnload()">
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
				<ul class="nav navbar-nav">
					<li><a href="/Admin" style="padding-top: 5px !important;"><img src="/admin_assets/logo.png" alt=""/></a></li>
					<li><a href="/volvo_buses/home" target="_blank">Visit Website</a></li>
					  <li><a href="/Admin/volvo_buses/menus">Menus</a></li>
                    <li><a href="/Admin/volvo_buses/menu_items">Menu Items</a></li>
                    <li><a href="/Admin/volvo_buses/sliders">Sliders</a></li>
                    <li><a href="/Admin/volvo_buses/slider_items">Slider Items</a></li>
                    <!--<li><a href="/Admin/volvo_buses/similar_sections">Similar Sections</a></li>-->
                    <li><a href="/Admin/volvo_buses/cities">Cities</a></li>
                    <li><a href="/Admin/volvo_buses/categories">Categories</a></li>
                    <li><a href="/Admin/volvo_buses/products">Products</a></li>
                    <li><a href="/Admin/volvo_buses/locationsItem">Locations Item</a></li>
                    <li><a href="/Admin/volvo_buses/templates">Templates</a></li>
                    <li><a href="/Admin/volvo_buses/pages">Pages</a></li>
                    <li><a href="/Admin/volvo_buses/component_templates">Component Templates</a></li>
                    <li><a href="/Admin/volvo_buses/component_datas">Component Data</a></li>
                    <li><a href="/Admin/volvo_buses/contacts">Contacts</a></li>
<li><a href="/Admin/volvo_buses/setting">Settings</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">register</a></li>
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
            <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

	 <style>
            .edit_btn
                {
                    width: 10%;
                    float: left;
                    margin-bottom: 10px;
                }
            .select_list
            {
                display: block;
                width: 70%;
                margin-right: 1%;
                margin-left: 1%;
                float: left;
                height: 35px;
            }
            .label_style{
                width: 18%;
                float: left;
            }
        </style>
     <script>

        function getComponents(){

            var url = "/Admin/{{$current_website->name}}/component_datas/list";
            var components_list = document.getElementById("component_list_template");
            $.get(url, function(data){
            console.log(data.component_datas);
                for (index = 0; index < data.component_datas.length; ++index) {

                    var option = document.createElement("option");
                    option.text = data.component_datas[index]['name'];
                    option.value = data.component_datas[index]['id'];
                    components_list.add(option);
    //                 var slot_item= '<div>'+data.slots[index]+'</div>';
    //                 slots_container.innerHTML+=slot_item;
                 }
    //            renderSlots(data);
            });
            return true;

        }

        function fetchTemplateSlots(){
                var template_id = document.getElementById('template_id').value;
                var url = "/Admin/templates/"+template_id;
                r="";
                $.get(url, function(data){
                console.log(data);
                    r= renderSlots(data);
                });
                if(r){
                    return true;
                }
            }
        function renderSlots(data){
             var slots_container=document.getElementById('slots_container');
             var components_list = document.getElementById("component_list_template");

             for (index = 0; index < data.slots.length; ++index) {
             components_list.id="component_name_"+index;
             components_list.name="component_name_"+index;
             components_list.style="display:block";
             components_list.className="select_list";
                 var slot_item= '<div class="form-group"><label class="label_style" for="slot_name_'+index+'">'+data.slots[index]+'</label><input type="hidden" id="slot_name_'+index+'" name="slot_name_'+index+'" value="'+data.slots[index]+'"/>'+components_list.outerHTML+'<a id="edit_link_'+index+'" class="btn btn-primary from-control edit_btn" target="_blank">Edit</a></div>';
                 slots_container.innerHTML+=slot_item;
    //            var component_div = document.createElement("div");
    //            var node = document.createTextNode(data.slots[index]);
    //            component_div.appendChild(node);

    //            slots_container.appendChild(component_div)
             }
             components_list.style="display:none";
            return true;
        }

        function setSelectedComponents(){
             fetchTemplateSlots();
            var slots_container= document.getElementById('slots_container');
            slots_container.style="display:block";
            var component_datas= document.getElementById('components');
            var component_datas_obj= JSON.parse(component_datas.value);
            var component_datas_obj_count=Object.keys(component_datas_obj).length;
    //        alert(Object.keys(component_datas_obj).length);



                for (i = 0; i < component_datas_obj_count; i++) {
    //            alert("component_name_"+i);
                    document.getElementById("component_name_"+i).value=component_datas_obj[Object.keys(component_datas_obj)[i]];
                    document.getElementById("component_name_"+i).setAttribute("onchange","alterJson(this)");
                    document.getElementById("edit_link_"+i).setAttribute("href","/Admin/{{$current_website->name}}/component_datas/edit/"+component_datas_obj[Object.keys(component_datas_obj)[i]]);
    //                alert(component_datas_obj[i]);
                }
    //            for(i in component_datas_obj){
    //                var comp_i=0;
    ////                document.getElementById("component_name_"+comp_i).value=component_datas_obj[i];
    //                alert("component_name_"+comp_i);
    ////                alert(document.getElementById("component_name_"+comp_i));
    ////                alert(i);
    ////                alert(component_datas_obj[i]);
    //                comp_i++;
    //            }
        }
        function alterJson(obj){
    //        alert(obj.name);
            var fields = obj.name.split('component_name_');
            var slot= document.getElementById("slot_name_"+fields[1]);
    //        alert("slot_name_"+fields[1]);
            var component_datas= document.getElementById('components');

            var component_datas_obj= JSON.parse(component_datas.value);
            component_datas_obj[slot.value]=obj.value;
            component_datas.value=JSON.stringify(component_datas_obj);


        }

    </script>
</body>
</html>
