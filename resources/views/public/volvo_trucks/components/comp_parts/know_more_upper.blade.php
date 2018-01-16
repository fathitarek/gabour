 <div class="row imageText" id="t">
        <div class="col-md-10 col-md-offset-1">
          <h3>{{$page['know_more_upper']['component_data']['title1']}}</h3>
          <p>{{$page['know_more_upper']['component_data']['title2']}}</p>
<!--          <a href="{{$page['know_more_upper']['component_data']['link']}}">
            <p class="btnXBlue"> {{$page['know_more_upper']['component_data']['title_btn']}} <span class="glyphicon glyphicon-chevron-right"></span></p>
          </a></div>-->
      </div>
    </div>
    <style>
        #t > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['know_more_upper']['component_data']['file1']}}");
}
</style>