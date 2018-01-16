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
    <h1>locations Category</h1>

    <article>
        <ul>
             <li><a href="{{action('LocationCategoryController@index')}}">Location Category</a></li>
             <li><a href="{{action('LocationCategoryController@create')}}">ADD New Location Category</a></li>
             <li><a href="{{action('LocationCategoryController@export')}}">Export Location Category</a></li>
        @include('Admin.form_parcials.upload_excel',['url'=>'/Admin/locationsCategory/import'])

        </ul>
        <table>
         <tr>
           <th>ID</th>
          <th>Name En</th>
          <th>Name Ar</th>
          <th>Edit</th>
          <th>Delete</th>
         </tr>
        @if(count($records))
            @foreach($records as $record)
              <tr>
               <td>{{$record->id}}</td>
               <td>{{$record->name_en}}</td>
               <td>{{$record->name_ar}}</td>
               <td>
                  <a href="{{action('LocationCategoryController@edit',[$record->id])}}" class="btn btn-primary from-control">Edit</a>
               </td>
               <td>
                  @include('Admin.form_parcials.universal_delete_btn',['action'=>'LocationCategoryController@destroy'])
               </td>
              </tr>
            @endforeach
       @endif
    </table>
    </article>


@endsection
