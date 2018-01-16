 <div class="row imageText" id="vo-f">
        <div class="col-md-10 col-md-offset-1">
          <h3>{{$page['know_more_download']['component_data']['title1']}}</h3>
          <p>{{$page['know_more_download']['component_data']['title2']}}</p>
           @if(isset($page['know_more_download']['component_data']['file2']))
          <a href="/{{$current_website->name}}/uploads/{{$page['know_more_download']['component_data']['file2']}}">


            <p class="btnXBlue"> {{$page['know_more_download']['component_data']['title_btn']}} <span class="glyphicon glyphicon-chevron-right"></span></p>

            @endif
          </a>
        </div>
      </div>


    <style>
                 #vo_f > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['know_more_download']['component_data']['file1']}}");
}
</style>
