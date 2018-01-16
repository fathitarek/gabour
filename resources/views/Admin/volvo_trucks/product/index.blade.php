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
    <h1>Products</h1>

    <article>
        <ul>
                <a class="btn btn-primary" href="/Admin/{{$current_website->name}}/products/create">ADD New Product</a>
        </ul>
        <table>
         <tr>
           <th>ID</th>
          <th>Title</th>
          <th>Model</th>
          <th>Category</th>
          <th>Image</th>
          <th>Website </th>
          <th>Edit</th>
          <th>Delete</th>
         </tr>
        @if(count($records))
            @foreach($records as $record)
              <tr>
               <td>{{$record->id}}</td>
               <td>{{$record->title}}</td>
               <td>{{$record->model}}</td>
               <td>{{$record->category->name}}</td>
               <td><img style="height: 70px; width: 70px" class="item_img" src="/{{$current_website->name}}/images/product/{{$record->image}}"/></td>
                <td>{{$record->website->title_en }}</td>

               <td>
                   <a href="{{ url('Admin/'.$current_website->name.'/products/edit/'.$record->id) }}" class="btn btn-primary from-control">Edit</a>

               </td>
               <td>
                  @include('Admin.form_parcials.universal_delete_btn',['action'=>'ProductController@destroy'])
               </td>
              </tr>
            @endforeach
       @endif
    </table>
        {!! $records->render() !!}
    </article>


@endsection
