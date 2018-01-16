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
.item_img {
  width: auto;
  height: 150px;
  padding: 15px 0;
}
</style>
@section('content')
    <h1>Slider Items</h1>


    <div id="item-container">
         <ul>
         @foreach ($sliders_items as $item)
            <li>{{ $item->name }}</li>
         @endforeach
         </ul>
    </div>

    <script>
    $('#filterselectbox').change(function() {
        var id = $('#filterselectbox').val();
        var ajaxurl = '{{route('Admin/myitems', ':id')}}';
        ajaxurl = ajaxurl.replace(':id', id);
        $.ajax({
            url: ajaxurl,
            type: "GET",
            success: function(data){
                $data = $(data); // the HTML content that controller has produced
                $('#item-container').hide().html($data).fadeIn();
            }
        });
    });
    </script>




@endsection
