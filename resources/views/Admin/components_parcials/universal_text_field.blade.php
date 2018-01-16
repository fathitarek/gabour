<div class="form-group">
    {!!Form::label($parameters['name'],$parameters['label'])!!}
    @if(isset($parameters['value'])&&($parameters['value']!=''))
        {!!Form::text($parameters['name'],$parameters['value'],['class'=> 'form-control']) !!}
    @else
        {!!Form::text($parameters['name'],null,['class'=> 'form-control']) !!}
    @endif
</div>