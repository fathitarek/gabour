<div class="form-group">

    @if(isset($parameters['value'])&&($parameters['value']!=''))
      <?php
            $file_types['image']=['png','jpeg','jpg','gif'];
            $file_types['pdf']=['pdf'];
            $file_type = explode('.',$parameters['value'])[1];
            $type='';

            if(($file_type=='png')||($file_type=='jpeg')||($file_type=='jpg')||($file_type=='gif')){
                $type='image';
                $folder='/'.$current_website->name.'/uploads';
            }
            if($file_type=='pdf'){
                $type='pdf';
                $folder='/'.$current_website->name.'/uploads';
            }
        ?>
            @if($type=='image')
                <img src="{{$folder.'/'.$parameters['value']}}" />

            @elseif($type=='pdf')
                <a href="{{$folder.'/'.$parameters['value']}}">Download</a>
            @endif


    <input type="button" onclick="addUploadField()" value="Upload another"/>
    <input type="button" onclick="restoreOldFile()" value="keep old file"/>
    {!!Form::label($parameters['name'],$parameters['label'])!!}

    {{--{!!Form::file($parameters['name']) !!}--}}
    <div id="newUpload"><input type="hidden" name="{{$parameters['name']}}" id="{{$parameters['name']}}" value="{{$parameters['value']}}"></div>
    <input type="hidden" id="hidden_{{$parameters['name']}}" value="{{$parameters['value']}}"/>

</div>
<script>
    function addUploadField(){
        var x = document.createElement("INPUT");
            x.setAttribute("type", "file");
            x.setAttribute("name", "{{$parameters['name']}}");
            x.setAttribute("id", "{{$parameters['name']}}");
            x.setAttribute("required", "required");
            var cont = document.getElementById("newUpload");
            cont.removeChild(cont.childNodes[0]);
            document.getElementById("newUpload").appendChild(x);
    }
    function restoreOldFile(){
            var x = document.createElement("INPUT");
                x.setAttribute("type", "text");
                x.setAttribute("name", "{{$parameters['name']}}");
                x.setAttribute("id", "{{$parameters['name']}}");
                x.setAttribute("value", document.getElementById("hidden_{{$parameters['name']}}").value);
                var cont = document.getElementById("newUpload");
                cont.removeChild(cont.childNodes[0]);
                document.getElementById("newUpload").appendChild(x);
        }

</script>

    @else
    {!!Form::label($parameters['name'],$parameters['label'])!!}
    {!!Form::file($parameters['name']) !!}
    @endif