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
    <h1>{{$current_website->display_name_en}} Component Templates</h1>


    <article>
        <ul>
            <a class="btn btn-primary" href="/Admin/{{$current_website->name}}/component_templates/create">ADD New Component Template</a>

        </ul>
        <table>
         <tr>
           <th>ID</th>
          <th>Name</th>
          <th>Website </th>
          <th>Edit</th>
          
         </tr>
        @if(count($records))
            @foreach($records as $record)
              <tr>
               <td>{{$record->id}}</td>
               <td>{{$record->name}}</td>
                <td>{{$record->website->title_en }}</td>

               <td>
                    <a href="/Admin/{{$current_website->name}}/component_templates/edit/{{$record->id}}" class="btn btn-primary from-control">Edit</a>
               </td>
               
              </tr>
            @endforeach
       @endif
    </table>
    {!! $records->render() !!}
    </article>


@endsection
