@extends('Admin.'.$current_website->name.'.app')
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
<h1>Categories</h1>

<article>
    <ul>
        <a class="btn btn-primary" href="/Admin/{{$current_website->name}}/categories/create">ADD New Category</a>
    </ul>
    <table>
        <tr>
            <th>ID</th>
            <th>Display Name</th>
            <th>Website </th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @if(count($records))
        @foreach($records as $record)
        <tr>
            <td>{{$record->id}}</td>

            <td>{{$record->display_name}}</td>
            <td>{{$record->website->title_en }}</td>

            <td>
                <a href="{{ url('Admin/'.$current_website->name.'/categories/edit/'.$record->id) }}" class="btn btn-primary from-control">Edit</a>

            </td>
            <td>
                @include('Admin.form_parcials.universal_delete_btn',['action'=>'CategoryController@destroy'])
            </td>
        </tr>
        @endforeach
        @endif
    </table>
            {!! $records->render() !!}

</article>
@endsection
