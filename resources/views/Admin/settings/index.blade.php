@extends('Admin/admin_template')

@section('content')
    <h1>Application Settings:</h1>
    <div class="form-group">
    </div>

        <table class="MainlestingTable" cellpadding="5" cellspacing="5" border="1">
            <thead>
               <td> id </td>
               <td> global_title_en </td>
               <td> global_title_ar </td>
               <td> user_id </td>
               <td> created_at </td>
               <td> updated_at </td>
               <td> Actions </td>
           </thead>
            <tr>
                <td>{{$record->id}}</td><br/>
                <td>{{$record->global_title_en}}</td><br/>
                <td>{{$record->global_title_ar}}</td><br/>
                <td>{{$record->user->name}}</td><br/>
                <td>{{$record->created_at}}</td><br/>
                <td>{{$record->updated_at}}</td></br>
                <td><a href="{{action('SettingsController@edit',[$record->id])}}" class="btn btn-primary from-control">Edit</a></td>
            </tr>

    </table>


@endsection


<?php
/**
 * Created by PhpStorm.
 * User: Ahmed Waly
 * Date: 12/28/2015
 * Time: 4:05 PM
 */
 ?>