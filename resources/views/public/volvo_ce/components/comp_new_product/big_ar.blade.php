
<div class="row heroImgX2">
      <div class="col-md-10 col-md-offset-1">
          <h4>{{$page['Product'][0]->title_ar}}</h4>
          <h3>{{$page['Product'][0]->title2_ar}}</h3>
          <img src="/{{$current_website->name}}/images/product/{{$page['Product'][0]->big_image}}" class="img-responsive" alt="Placeholder image"></div>
      </div>
      <div class="row headTitleX">
        <div class="col-md-10 col-md-offset-1">
          <p>{{$page['Product'][0]->model}}</p>
          <h4>{{$page['Product'][0]->text_title_ar}}</h4>
          <p>{{$page['Product'][0]->text_ar}}</p>
        </div>
      </div>

<div class="row imageText">
  <div class="col-md-10 col-md-offset-1 downloadX">
    <h4>تنزيل</h4>
    <h3>GET THE PRODUCT BROCHURE </h3>
    <p>Download the {{$page['Product'][0]->model}} brochure, with all the details and specifications.</p>
    <a href="/{{$current_website->name}}/pdf/products/{{$page['Product'][0]->pdf}}">
      <p class="btnX"><i class="fa fa-download"></i> Download (PDF) <span class="glyphicon glyphicon-chevron-right"></span></p>
    </a></div>
</div>
 
@if($page['Product'][0]['youtube_id']!='')
    <div class="row headTitleX">
          <div class="col-md-10 col-md-offset-1">
                <iframe width="945" height="532" src="https://www.youtube.com/embed/{{$page['Product'][0]['youtube_id']}}" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row headTitleX">
        <div class="col-md-10 col-md-offset-1">
            <h3>{{$page['Product'][0]['youtube_title_ar']}}</h3>
            <p>{{$page['Product'][0]['description_ar']}}</p>
        </div>
    </div>

@endif
<div class="row headTitleX">
  <div class="col-md-10 col-md-offset-1">
    <h4>GET MORE OUT OF YOUR VOLVO </h4>
  </div>
</div>

      </div>