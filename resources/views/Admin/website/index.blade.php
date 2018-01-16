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
    <h1>Websites</h1>

    <article>
        <ul>
<!--             <li><a href="{{action('WebsiteController@index')}}">Websites</a></li>
             <li><a href="{{action('WebsiteController@create')}}">ADD New Websites</a></li>-->
        </ul>
        <table>
         <tr>
           <th>ID</th>
          <th>Website</th>
          <th>Edit</th>
        
         </tr>
        @if(count($records))
            @foreach($records as $record)
              <tr>
               <td>{{$record->id}}</td>
               <td>{{$record->display_name_en}}</td>
               <td>
                  <a href="{{action('WebsiteController@edit',[$record->id])}}" class="btn btn-primary from-control">Edit</a>
               </td>
             
              </tr>
            @endforeach
       @endif
    </table>
    </article>


@endsection
