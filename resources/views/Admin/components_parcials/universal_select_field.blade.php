<div class="form-group">
    {!!Form::label($parameters['name'],$parameters['label'])!!}
    {!!Form::select($parameters['name'],[null=>$parameters['default_option']+$parameters['list_items'],null,['class'=> 'form-control']) !!}
</div>