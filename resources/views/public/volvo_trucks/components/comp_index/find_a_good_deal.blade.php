<div class="row imageText" id="volvo2">
        <div class="col-md-10 col-md-offset-1">
          <h4>{{$page['find_a_good_deal']['component_data']['title1']}}</h4>
          <h3>{{$page['find_a_good_deal']['component_data']['title2']}}</h3>
          <p>{{$page['find_a_good_deal']['component_data']['title3']}} </p>
          <a href="{{$page['find_a_good_deal']['component_data']['link']}}">
            <p class="btnX">{{$page['find_a_good_deal']['component_data']['title_btn']}} <span class="glyphicon glyphicon-chevron-right"></span></p>
          </a> </div>
      
</div>
<style>
#volvo2 > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['find_a_good_deal']['component_data']['file1']}}");
}
</style>