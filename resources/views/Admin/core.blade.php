@extends('Admin/admin_template')

@section('content')
    <h3>All Tables:</h3>
    <ul>
         @foreach($db_tables as $db_table)
            <li>
            <a href="form_generator/{{$db_table->TABLE_NAME}}">
                {{$db_table->TABLE_NAME}}
            </a> </li>
         @endforeach
    </ul>

@endsection

<?php
/**
 * Created by PhpStorm.
 * User: Ahmed Waly
 * Date: 12/28/2015
 * Time: 4:30 PM
 */

 ?>