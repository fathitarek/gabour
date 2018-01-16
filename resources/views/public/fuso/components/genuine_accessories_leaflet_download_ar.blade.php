</div>
@if(count($page['genuine_accessories_leaflet_download_ar']['special_listing_1_data']))
@foreach($page['genuine_accessories_leaflet_download_ar']['special_listing_1_data'] as $index =>$genuine_accessories_leaflet_download)

<div class="pdf section pdf-alternativestyle"><span class="PDF clearfix alternativestyle" data-sightly-unwrap=""> <span class="pdf-contents">
  <div class="pdf_image"> <img src="/{{$current_website->name}}/images/{{$genuine_accessories_leaflet_download->image_ar}}"></div>
  <dl style="width: auto; overflow: hidden;">
    <dt>
      <div class="pdf-boldedtext"> {{$genuine_accessories_leaflet_download->title_ar}} </div>
    </dt>
    <dd> <a target="_blank" class="pdflink" href="/{{$current_website->name}}/images/{{$genuine_accessories_leaflet_download->pdf_ar}}"><img src="PartsAccessories_files/dl-icon-pdf.png"> <span>PDF</span></a></dd>
  </dl>
</span></span></div>
@endforeach
@endif
