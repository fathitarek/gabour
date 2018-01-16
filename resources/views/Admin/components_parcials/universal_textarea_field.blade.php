<div class="form-group">
    {!!Form::label($parameters['name'],$parameters['label'])!!}


    @if(isset($parameters['value'])&&($parameters['value']!=''))
        {!!Form::textarea($parameters['name'],$parameters['value'],['class'=> 'form-control']) !!}
    @else
        {!!Form::textarea($parameters['name'],null,['class'=> 'form-control']) !!}
    @endif
</div>
