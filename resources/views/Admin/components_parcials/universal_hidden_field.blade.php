@if(isset($parameters['value'])&&($parameters['value']!='')))
        {!!Form::hidden($parameters['name'],$parameters['value'],['id'=>$parameters['name']]) !!}
    @else
        {!!Form::hidden($parameters['name'],null,['id'=>$parameters['name']]) !!}
    @endif
<?php
/**
 * Created by PhpStorm.
 * User: Ahmed Waly
 * Date: 1/31/2016
 * Time: 12:42 PM
 */ 