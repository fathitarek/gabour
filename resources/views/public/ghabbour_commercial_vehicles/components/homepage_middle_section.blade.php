 <div class="row" id="Ghabbour">
    <div class="col-sm-7 hero"><img src="/{{$current_website->name}}/uploads/{{$page['homepage_middle_section']['component_data']['file1']}}" alt="{{$page['homepage_middle_section']['component_data']['image_alt']}}"  title="{{$page['homepage_middle_section']['component_data']['image_title']}}" class="img-responsive notResponsiveImg hidden-xs"></div>
          <article class="GhabbourArticle col-sm-3">
              <h3>{{$page['homepage_middle_section']['component_data']['title']}}</h3>
              <p>{{$page['homepage_middle_section']['component_data']['text']}}</p>
              {{--<button type="button" class="btn btn-info"><a href="{{$page['homepage_middle_section']['component_data']['url']}}"  >{{$page['homepage_middle_section']['component_data']['link']}}<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></button>--}}
              <a class="btn btn-info" href="{{$page['homepage_middle_section']['component_data']['url']}}"  >{{$page['homepage_middle_section']['component_data']['link']}}<span id="arow" class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
          </article>
      </div>