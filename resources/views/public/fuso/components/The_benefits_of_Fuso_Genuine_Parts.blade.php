@if(count($page['The_benefits_of_Fuso_Genuine_Parts']['special_listing_1_data']))
@foreach($page['The_benefits_of_Fuso_Genuine_Parts']['special_listing_1_data'] as $index =>$The_benefits_of_Fuso_Genuine_Parts)
<div class="pdf section pdf-alternativestyle"><span class="PDF clearfix alternativestyle" data-sightly-unwrap=""> <span class="pdf-contents">
            <div class="pdf_image"> <img src="/{{$current_website->name}}/images/{{$The_benefits_of_Fuso_Genuine_Parts->image_en}}" /></div>
            <dl style="width: auto; overflow: hidden;">
                <dt>
                    <div class="pdf-boldedtext">{{$The_benefits_of_Fuso_Genuine_Parts->title_en}} </div>
                </dt>
                <dd> <a target="_blank" class="pdflink" href="/{{$current_website->name}}/images/{{$The_benefits_of_Fuso_Genuine_Parts->pdf_en}}"><img src="PartsAccessories_files/dl-icon-pdf.png" /> <span>PDF</span></a></dd>
            </dl>
        </span></span></div>
@endforeach
@endif
