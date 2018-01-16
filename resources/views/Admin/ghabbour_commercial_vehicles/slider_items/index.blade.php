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
.item_img {
  width: auto;
  height: 150px;
  padding: 15px 0;
}
</style>
@section('content')
    <h1>Slider Items</h1>

    <article>
      <a class="btn btn-primary" href="/Admin/{{$current_website->name}}/sliders">Image Sliders</a>
      <a class="btn btn-primary" href="/Admin/{{$current_website->name}}/slider_items/create">ADD New Slider Item</a>
      <br/>
      <br/>
        <table>

         <tr>
           <th>ID</th>
          <th>Name</th>
          <th>Title</th>
          <th>Image</th>
          <th>Related Slider</th>
          <th>Edit</th>
          <th>Delete</th>
         </tr>
        @if(count($sliders))
            @foreach($sliders as $records)
              @foreach($records->sliderItems as $record)
              <tr>
               <td>{{$record->id}}</td>
               <td>{{$record->name}}</td>
               <td>{{$record->title}}</td>
               <td><img class="item_img" src="/{{$current_website->name}}/images/{{$record->img}}"/></td>
               <td>{{$record->slider->name}}</td>

               <td>
                  <a href="{{ url('Admin/'.$current_website->name.'/slider_items/edit/'.$record->id) }}" class="btn btn-primary from-control">
                      Edit
                  </a>
               </td>
               <td>
                  @include('Admin.form_parcials.universal_delete_btn',['action'=>'SliderItemController@destroy'])
               </td>
              </tr>
              @endforeach
            @endforeach
       @endif
    </table>
    </article>


@endsection
