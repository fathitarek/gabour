@extends('../../app')
<style>
    table, td, th {
        border: 1px solid black;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th {
        height: 50px;
        text-align: center !important;
    }
    td {
        text-align: center !important;
    }
    form {
        margin-bottom: 5px;
        margin-top: 5px;
    }
</style>
@section('content')
<h1>Location Item</h1>

<article>
    <ul>
        <li><a href="{{action('LocationItemController@index')}}">Location Item</a></li>
        <li><a href="{{action('LocationItemController@create')}}">ADD New Location Item</a></li>
        <li><a href="{{action('LocationItemController@export')}}">Export Location Item</a></li>
        @include('Admin.form_parcials.upload_excel',['controller'=>'LocationItemController'])


    </ul>
    <table>
        <tr>
            <th>ID</th>
            <th>Name En</th>
            <th>Latitude</th>
            <th>Longtiute</th>
            <th>Location Category</th>
            <th> Website</th>
            <th>City</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @if(count($records))
        @foreach($records as $record)
        <tr>
            <td>{{$record->id}}</td>
            <td>{{$record->name_en}}</td>
            <td>{{$record->lat}}</td>
            <td>{{$record->long}}</td>
            <td>{{$record->LocationCategory->name_en }}</td>
            <td>{{$record->website->title_en }}</td>
             <td>{{$record->city->name_en }}</td>
            <td>
                <a href="{{action('LocationItemController@edit',[$record->id])}}" class="btn btn-primary from-control">Edit</a>
            </td>
            <td>
                @include('Admin.form_parcials.universal_delete_btn',['action'=>'LocationItemController@destroy'])
            </td>
        </tr>
        @endforeach
        @endif
    </table>
</article>


@endsection
