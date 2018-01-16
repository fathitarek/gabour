<div class="row imageText" id="volvo5">
        <div class="col-md-10 col-md-offset-1">
          <h3>{{$page['get_in_touch']['component_data']['title1']}}</h3>
          <p>{{$page['get_in_touch']['component_data']['title2']}}</p>
          <a href="{{$page['get_in_touch']['component_data']['link']}}">
            <p class="btnXBlue"> {{$page['get_in_touch']['component_data']['title_btn']}} <span class="glyphicon glyphicon-chevron-right"></span></p>
          </a></div>
      </div>

<style>
    #volvo5 > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['get_in_touch']['component_data']['file1']}}");
}

</style>