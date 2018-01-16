@extends('Admin/admin_template')



@section('content')

        <table cellpadding="5" cellspacing="5" border="1">
            <thead>
                @foreach($columns as $column)
                    <td> {{$column->Field}} </td>
                @endforeach
            </thead>
        </table>

        <br/>

         @foreach($columns as $column)
         < td>{ {$record->{{$column->Field}} }}< /td>
        </br>
        @endforeach
@endsection

<?php
/**
 * Created by PhpStorm.
 * User: Ahmed Waly
 * Date: 12/28/2015
 * Time: 4:30 PM
 */

 ?>