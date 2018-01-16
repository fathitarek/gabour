@extends('Admin.'.$current_website->name.'.app')
<style>
    table, td, th {
        border: 1px solid black;
    }
    table {
        margin-top: 20px;
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
    .form-group{
        margin-bottom: 15px;
    }
</style>
@section('content')
<h1> {{$current_website->display_name_en}} Location Item</h1>

<article>
    <div>
        <a href="/Admin/fuso/locationsItem/create" class="btn btn-primary">ADD New Location Item</a>
        <a href="/Admin/fuso/locationsItem/export" class="btn btn-primary">Export Location Item</a>
    </div>


        @include('Admin.form_parcials.upload_excel',['url'=>'/Admin/fuso/locationsItem/import'])


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
            <td>{{$record->locationCategory->name_en }}</td>
            <td>{{$record->website->title_en }}</td>
             <td>{{$record->city->name_en }}</td>
            <td>
                <a href="/Admin/{{$current_website->name}}/locationsItem/edit/{{$record->id}}" class="btn btn-primary from-control">Edit</a>
            </td>
            <td>
                @include('Admin.form_parcials.universal_delete_btn',['action'=>'LocationItemController@destroy'])
            </td>
        </tr>
        @endforeach
        @endif
    </table>
    {!! $records->render() !!}
</article>


@endsection
