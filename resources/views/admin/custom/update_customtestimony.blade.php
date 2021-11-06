@extends('admin.index')

@section('data')
<div class="container">

    <h1>custom testimony</h1>
    <form action="/admin/customtestimony/update_customtestimony/{{$customtestimonys->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <img style="width: 200px" src="{{asset('/images/custom/customtestimony/'.$customtestimonys->image_testimony) }}" class="card-img-top fade-1" alt="..." id="output"/>
        <br>
        <input type="file" class="form-control-file" id="image_testimony" name="image_testimony" accept="image/*" onchange="loadFile(event)">

        <script>
          var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
              var output = document.getElementById('output');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
          };
        </script>

        <button type="submit" name="customtestimony" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endSection