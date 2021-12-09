@extends('admin.index')

@section('data')
<div class="container">
  <h1>customerservice</h1>
  <form action="/admin/create_customerservice" method="post" enctype="multipart/form-data">
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
        <label for="description_customer_service">description_customer_service</label>
        <textarea type="text" class="form-control" id="description_customer_service" name="description_customer_service"></textarea>
        <h1>active</h1>            
        <select class="form-control" id="active" name="active">
        <option value="1">yes</option>
        <option value="0">no</option>
        </select>
      <button type="submit" name="customerservice" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
@endSection