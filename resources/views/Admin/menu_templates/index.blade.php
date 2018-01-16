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
    <h1>Cities</h1>

    <article>
        <ul>
             <li><a href="{{action('CityController@index')}}">Cities</a></li>
             <li><a href="{{action('CityController@create')}}">ADD New City</a></li>
        </ul>
        <table>
         <tr>
           <th>ID</th>
          <th>City En</th>
          <th>City Ar</th>
          <th>Website </th>
          <th>Edit</th>
          <th>Delete</th>
         </tr>
        @if(count($records))
            @foreach($records as $record)
              <tr>
               <td>{{$record->id}}</td>
               <td>{{$record->name_en}}</td>
                <td>{{$record->name_ar}}</td>
                <td>{{$record->website->title_en }}</td>

               <td>
                  <a href="{{action('CityController@edit',[$record->id])}}" class="btn btn-primary from-control">Edit</a>
               </td>
               <td>
                  @include('Admin.form_parcials.universal_delete_btn',['action'=>'CityController@destroy'])
               </td>
              </tr>
            @endforeach
       @endif
    </table>
    </article>


@endsection
