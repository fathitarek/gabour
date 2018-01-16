 <div class="row heroImgX2">

        <div class="col-md-10 col-md-offset-1">
         <h4>{{$page['Product'][0]->model}}</h4>
          <h3>{{$page['Product'][0]->title}}</h3>
        <img src="/{{$current_website->name}}/images/product/{{$page['Product'][0]->big_image}}" class="img-responsive" alt="Placeholder image">
        </div>
</div>
<div class="row imageText" id="vo-f">
        <div class="col-md-10 col-md-offset-1">
          <h3>FIND OUT MORE</h3>
          <p>Download the brochure to find out more about the {{$page['Product'][0]->model}}</p>
                     <a href="/{{$current_website->name}}/pdf/products/{{$page['Product'][0]->pdf}}" id="link-48">


            <p class="btnXBlue"> Dwonload brochure <span class="glyphicon glyphicon-chevron-right"></span></p>

                    </a>
        </div>
      </div>