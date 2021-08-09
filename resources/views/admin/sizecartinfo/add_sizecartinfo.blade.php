@extends('admin.index')

@section('data')
<div class="container">

  <h1>sizecartinfo</h1>
  <form action="/admin/create_sizecartinfo" method="post" enctype="multipart/form-data">
      @csrf
      <h1>image</h1>
      <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output"/>
      <br>
      <input type="file" class="form-control-file" id="image" name="image" accept="image/*" onchange="loadFile(event)">

      <script>
        var loadFile = function(event) {
          var reader = new FileReader();
          reader.onload = function(){
            var output = document.getElementById('output');
            output.style.removeProperty("display");
            output.src = reader.result;
          };
          reader.readAsDataURL(event.target.files[0]);
        };
      </script>

      <button type="submit" name="sizecartinfo" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
@endSection