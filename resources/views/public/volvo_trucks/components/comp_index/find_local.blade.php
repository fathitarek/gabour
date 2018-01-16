<div class="row imageText" id="volvo1">
        <div class="col-md-10 col-md-offset-1">
          <p>{{$page['find_local']['component_data']['title']}}</p>
          <h3>{{$page['find_local']['component_data']['city']}}</h3>
          <a href="{{$page['find_local']['component_data']['link']}}">
            <p class="btnX">{{$page['find_local']['component_data']['title_btn']}} <span class="glyphicon glyphicon-chevron-right"></span></p>
          </a> </div>
</div>
<style>
#volvo1 > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['find_local']['component_data']['file1']}}");
}
</style>