<div class="row heroImgX3">
  <div class="col-md-10 col-md-offset-1" style="direction: ltr;">
    <h3>{{$page['Product'][0]->title_ar}}</h3>
<p >{{$page['Product'][0]->description_ar}}
</p>
<img src="/{{$current_website->name}}/images/product/{{$page['Product'][0]->big_image}}" class="img-responsive" alt="Placeholder image"></div>
</div>
<div class="row headTitleX">
      <div class="col-md-10 col-md-offset-1">
        <h4>Distinguished by design </h4>
      </div>
      </div>
{{--<div class="row headTitleX">--}}
  {{--<div class="col-md-10 col-md-offset-1">--}}
    {{--<div class="tabX" role="tabpanel">--}}
      {{--<ul class="nav nav-tabs" role="tablist">--}}
        {{--<li role="presentation" class="active"><a href="#home1" data-toggle="tab" role="tab" aria-controls="tab1">Exterior</a></li>--}}
        {{--<li role="presentation"><a href="#paneTwo1" data-toggle="tab" role="tab" aria-controls="tab2">Interior</a></li>--}}
      {{--</ul>--}}
      {{--<div id="tabContent1" class="tab-content">--}}
        {{--<div role="tabpanel" class="tab-pane fade in active" id="home1"><img src="images/exterior1.jpg" class="img-responsive" alt="Placeholder image">--}}
        {{--</div>--}}
        {{--<div role="tabpanel" class="tab-pane fade" id="paneTwo1"><img src="images/interior1.jpg" class="img-responsive" alt="Placeholder image">        </div>--}}
        {{--<div role="tabpanel" class="tab-pane fade" id="tabDropDownOne1">--}}
          {{--<p>Dropdown content#1</p>--}}
        {{--</div>--}}
        {{--<div role="tabpanel" class="tab-pane fade" id="tabDropDownTwo1">--}}
          {{--<p>Dropdown content#2 </p>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<div class="row headTitleX">
  <div class="col-md-10 col-md-offset-1">
    <p>{{$page['Product'][0]->text_ar}}</p>
  </div>
</div>
<div class="row imageText">
  <div class="col-md-10 col-md-offset-1 downloadX">
    <h4>DOWNLOAD</h4>
    <h3>GET THE PRODUCT BROCHURE </h3>
    <p>Download the {{$page['Product'][0]->model}} brochure, with all the details and specifications.</p>
    <a href="/{{$current_website->name}}/pdf/products/{{$page['Product'][0]->pdf}}">
      <p class="btnX"><i class="fa fa-download"></i> Download (PDF) <span class="glyphicon glyphicon-chevron-left"></span></p>
    </a></div>
</div>