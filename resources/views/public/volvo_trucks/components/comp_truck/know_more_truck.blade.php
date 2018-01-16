 <div class="row imageText" id="m">
        <div class="col-md-10 col-md-offset-1">
          <h3>{{$page['know_more_truck']['component_data']['title1']}}</h3>
          <p>{{$page['know_more_truck']['component_data']['title2']}}</p>
          <a href="{{$page['know_more_truck']['component_data']['link']}}">
            <p class="btnXBlue"> {{$page['know_more_truck']['component_data']['title_btn']}} </p>
          </a></div>
      </div>
    </div>
    <style>
        #m > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['know_more_truck']['component_data']['file1']}}");
}
</style>