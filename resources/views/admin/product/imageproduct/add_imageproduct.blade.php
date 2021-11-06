@extends('admin.index')

@section('data')
<div class="container">

  <h1>imageproduct</h1>
  <form action="/admin/create_imageproduct" method="post" enctype="multipart/form-data">
      @csrf
      <h1>product</h1>
      @if ($id!=null)
      <input value="{{$id}}" class="form-control" type="text" placeholder="Default input" name="product" aria-label="default input example">
      @else
          
      @endif
  
      <h1>image_product_1</h1>
      <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output1"/>
      <br>
      <input type="file" class="form-control-file" id="image_product_1" name="image_product_1" accept="image/*" onchange="loadFile1(event)">
        <h1>image_product_2</h1>
        <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output2"/>
        <br>
        <input type="file" class="form-control-file" id="image_product_2" name="image_product_2" accept="image/*" onchange="loadFile2(event)">

  
        <h1>image_product_3</h1>
        <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output3"/>
        <br>
        <input type="file" class="form-control-file" id="image_product_3" name="image_product_3" accept="image/*" onchange="loadFile3(event)">



      <button type="submit" name="imageproduct" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
@endSection

<script>
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output1');
      output.style.removeProperty("display");
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script>
  var loadFile2 = function(event) {
  var reader = new FileReader();
  reader.onload = function(){
      var output = document.getElementById('output2');
      output.style.removeProperty("display");
      output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script>
  var loadFile3 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
      var output = document.getElementById('output3');
      output.style.removeProperty("display");
      output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
  };
  </script>  