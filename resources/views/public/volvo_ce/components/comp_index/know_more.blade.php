 <div class="row imageText" id="volvo4">
        <div class="col-md-10 col-md-offset-1">
          <h3>{{$page['know_more']['component_data']['title']}}</h3>
          <p>{{$page['know_more']['component_data']['description']}}</p>
          <a href="{{$page['know_more']['component_data']['link']}}">
            <p class="btnXBlue"> {{$page['know_more']['component_data']['title_btn']}} </p>
          </a></div>
    </div>
    <style>
        #volvo4 > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['know_more']['component_data']['file1']}}");
}
</style>