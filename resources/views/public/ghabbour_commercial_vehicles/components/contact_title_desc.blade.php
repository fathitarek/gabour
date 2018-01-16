@if((isset($_REQUEST['submit'])&&($_REQUEST['submit']!='')))

    <div class="row text-center" id="brands">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
          <span id="msg">Thank You for your message</span>
      </div>
    </div>
@endif
<div class="row text-center" id="brands">
  <div class="col-sm-12 col-md-10 col-md-offset-1">
    <span>{{$page['contact_title_desc']['component_data']['title']}}</span>
    <p>{{$page['contact_title_desc']['component_data']['desc']}}</p>
  </div>
</div>
