<div class="row imageText" id="volvo3">
        <div class="col-md-10 col-md-offset-1">
          <h4>{{$page['product_selector']['component_data']['title1']}} </h4>
          <h3>{{$page['product_selector']['component_data']['title2']}} </h3>
          <p>{{$page['product_selector']['component_data']['title3']}}</p>
          <a href="{{$page['product_selector']['component_data']['link']}}">
            <p class="btnX">{{$page['product_selector']['component_data']['title_btn']}} </p>
          </a> </div>
      </div>
<style>
#volvo3 > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['product_selector']['component_data']['file1']}}");
}

</style>