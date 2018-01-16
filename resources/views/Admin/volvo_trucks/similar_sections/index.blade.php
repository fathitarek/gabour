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
    <h1>{{$current_website->display_name_en}} Similar Sections</h1>

    <article>
            <a class="btn btn-primary" href="/Admin/{{$current_website->name}}/similar_sections/create_genuine_accessories_leaflet_download">ADD New Genuine Accessories  Leaflet Download</a>
             <a class="btn btn-primary" href="/Admin/{{$current_website->name}}/similar_sections/create_value_parts_leaflet_download">ADD New Value Parts Leaflet Download</a>
             <a class="btn btn-primary" href="/Admin/{{$current_website->name}}/similar_sections/create_the_benefits">Add New The benefits of Fuso Genuine Parts</a>

            <br/>
            <br/>
        <table>
         <tr>
           <th>ID</th>
          <th>title En</th>
          <th>title Ar</th>
          <th>Category </th>
          <th>Image English</th>
          <th>Website </th>
          <th>Edit</th>
          <th>Delete</th>
         </tr>
        @if(count($records))
            @foreach($records as $record)
              <tr>
               <td>{{$record->id}}</td>
               <td>{{$record->title_en}}</td>
                <td>{{$record->title_ar}}</td>
                <td>{{$record->category}}</td>
                <td>{!!$record->image_en ? '<img src="/'.$current_website->name.'/images/'.$record->image_en.'" height="40"/>':''!!}</td>
                <td>{{$record->website->title_en }}</td>

               <td>
                    <a href="/Admin/{{$current_website->name}}/similar_sections/edit_{{$record->category}}/{{$record->id}}" class="btn btn-primary from-control">Edit</a>
               </td>
               <td>
                  @include('Admin.form_parcials.universal_delete_btn',['action'=>'Similar_sectionsController@destroy'])
               </td>
              </tr>
            @endforeach
       @endif
    </table>
    {!! $records->render() !!}
    </article>


@endsection
