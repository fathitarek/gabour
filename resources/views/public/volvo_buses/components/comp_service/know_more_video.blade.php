<div class="row imageText" id="vi">
      <div class="col-md-10 col-md-offset-1">
          <h4>&nbsp;</h4>
          <h3>{{$page['know_more_video']['component_data']['title1']}} </h3>
          <p data-toggle="modal" data-target="#myModal" style="cursor: pointer"><i class="fa fa-play-circle-o"
                                  style="    vertical-align: middle;"></i> C{{$page['know_more_video']['component_data']['title2']}}</p>
</div>
      </div>
</div>
   
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <iframe width="560" height="315"  src="https://www.youtube.com/embed/{{$page['know_more_video']['component_data']['youtube_id']}}" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
  </div> 
      <style>
        #vi > div {
	background-image: url("/{{$current_website->name}}/uploads/{{$page['know_more']['component_data']['file1']}}");
}
</style>