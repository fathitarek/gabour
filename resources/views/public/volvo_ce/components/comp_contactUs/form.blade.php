<div class="row volvo3setions">  
    
    @if((isset($_REQUEST['submit'])&&($_REQUEST['submit']!='')))
    <h3 class="head_style_a" id="thnk_msg">Thank You for your message</h3>
        @endif
      <div class="col-md-10 col-md-offset-1">
          <div class="row">
<!--<div class="col-md-2 text-center col-md-offset-2">
            <form method="post" name="form1" class="formX" id="form2">
                <div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type of Enquiry <span class="glyphicon glyphicon-menu-down"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul class="dropdown-menu">
                      <li role="presentation" class="dropdown-header">Dropdown header 1</li>
                      <li role="presentation"><a href="#">First Link</a></li>
                      <li role="presentation" class="disabled"><a href="#">Disabled Link</a></li>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a href="#">Separated Link</a></li>
                    </ul>
                  </div>
</div>
              </form>
            </div>-->
            <div class="col-md-5">
              <form method="post"  action="/volvo_ce/contact_us/send" name="form1" class="formX" id="form1">
                <div>
                         {!!Form::hidden('website',$current_website->name,['class'=> 'form-control','value'=>$current_website->id]) !!}
 {!!Form::hidden('website_id',$current_website->id,['id'=>'website_id']) !!}

<!--                  <label for="city">City: </label>-->
  <input name="_token" hidden value="{!! csrf_token() !!}" />

                  <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                  <br>
           		  <input name="mobile" type="text" class="form-control" id="mbbile" placeholder="Mobile">
				    <br>
               		<input name="email" type="email" class="form-control" id="email" placeholder="Email">
					<br>
					<input name="message" type="text" class="form-control message" id="message" placeholder="Message">
          		  <br>
           		  <input name="submit" type="submit" class="btn wideBtn form-control" id="submit" value="Send">
                </div>
              </form>
            </div>
</div>
        </div>
      </div>