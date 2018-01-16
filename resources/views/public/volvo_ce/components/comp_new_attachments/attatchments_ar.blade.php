 <div class="row heroImgX2">
           <div class="col-md-10 col-md-offset-1">
               {{--<h4>{{$page['Category'][0]['display_name']}}</h4>--}}
               <h3>{{$page['Category'][0]['display_name']}}</h3>
               <img src="/{{$current_website->name}}/images/categories/{{$page['Category'][0]['big_image']}}" class="img-responsive" alt="Placeholder image"> </div>
       </div>
      <div class="row headTitleX">
        <div class="row headTitleX">
            <div class="col-md-10 col-md-offset-1">
                <h4>{{$page['Category'][0]['text_title_en']}}</h4>
                <p>{{$page['Category'][0]['text_en']}}</p>
            </div>
        </div>
        </div>
      </div>
@if(count($page['Category'][0]->categories))
    <div class="row volvo3setions">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            @foreach($page['Category'][0]->categories as $index =>$sub_category)
                <div class="col-md-4"><img src="/{{$current_website->name}}/images/categories/{{$sub_category->small_image}}" class="img-responsive" alt="{{$sub_category->display_name}}">
                    <h5>{{$sub_category->display_name}}</h5>
                  <p>{{$sub_category->note}}</p>
                  <a href="/volvo_ce/attachments_ar?m=Category&item={{$sub_category->name}}">نظرة عامة<span class="glyphicon glyphicon-menu-left
    "></span></a>
                </div>
            @endforeach

          </div>
        </div>
    </div>
@endif
@if(count($page['Category'][0]->products))
      <div class="row volvo3setions">
      <div class="col-md-10 col-md-offset-1">
          <div class="row">
            @foreach($page['Category'][0]->products as $index =>$product)
                <div class="col-md-4 text-left"><img src="/{{$current_website->name}}/images/product/{{$product->image}}" class="img-responsive" alt="Placeholder image">
                 <h5>{{$product->display_name_ar}}</h5>
                    <p>{{$product->text_ar}}</p>
                    <p>Available for: {{$product->model}}</p>
                  {{--<p><span class="fa fa-bucket-capacity model-spec-icon specsX"></span><strong> 0,9 - 1,1 m³</strong></p>--}}
                  {{--<p><span class="fa fa-operating-weight model-spec-icon specsX"></span><strong> 6 100 - 6 285 kg</strong></p>--}}
                  {{--<p><span class="fa fa-engine-gross-power model-spec-icon specsX"></span><strong> 59,3 kW</strong></p>--}}
                </div>
            @endforeach

        </div>
        </div>
      </div>
@endif
@if($page['Category'][0]['youtube_id']!='')
    <div class="row headTitleX">
          <div class="col-md-10 col-md-offset-1">
                <iframe width="945" height="532" src="https://www.youtube.com/embed/{{$page['Category'][0]['youtube_id']}}" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row headTitleX">
        <div class="col-md-10 col-md-offset-1">
            <h3>{{$page['Category'][0]['youtube_title_en']}}</h3>
            <p>{{$page['Category'][0]['youtube_text_en']}}</p>
        </div>
    </div>

@endif


