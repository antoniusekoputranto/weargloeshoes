@extends('admin.index')

@section('data')
<div class="container">

  <h1>Feed</h1>
  <form action="/admin/create_feed" method="post" enctype="multipart/form-data">
      @csrf
      <h1>image_feed</h1>
      <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output"/>
      <br>
      <input type="file" class="form-control-file" id="image_feed" name="image_feed" accept="image/*" onchange="loadFile(event)">

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
      <h1>link</h1>
      <input class="form-control" type="text" placeholder="Default input" name="link" aria-label="default input example">
      <h1>active</h1>            
      <select class="form-control" id="active" name="active">
      <option value="1">yes</option>
      <option value="0">no</option>
      </select>

      <button type="submit" name="feed" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
@endSection