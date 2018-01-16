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
    <h1>{{$current_website->display_name_en}} Settings</h1>


    <article>
        
        <table>
         <tr>
           <th>ID</th>
          <th>Text EN</th>
          
          <th>Edit</th>
          
         </tr>
        @if(count($records))
            @foreach($records as $record)
              <tr>
               <td>{{$record->id}}</td>
               <td>{{$record->text_en}}</td>
               <td>
                    <a href="/Admin/{{$current_website->name}}/setting/edit/{{$record->id}}" class="btn btn-primary from-control">Edit</a>
               </td>

              </tr>
            @endforeach
       @endif
    </table>
    {!! $records->render() !!}
    </article>


@endsection
