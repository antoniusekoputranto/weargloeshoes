@extends('admin.index')

@section('data')
<div class="container mt-5">
    <form action="/add_product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name">
        </div>
        <div class="form-group">
                <label for="colour">Colour</label>
                <input type="text" class="form-control" id="colour" name="colour">
        </div>
        <div class="form-group">
                <label for="heel_height">Heel Height</label>
                <input type="text" class="form-control" id="heel_height" name="heel_height">
        </div>
        <div class="form-group">
            <label for="product_type">Product Type</label>
                <select  class="form-control" id="product_type" name="product_type" >
                <!-- <option selected value="shoes">shoes</option> -->
                @foreach ($ktgr as $item)
                    <option value="{{$item->post_title}}" >{{$item->post_title}}</option>
                @endforeach

                <!-- <option value="t-shirt">t-shirt</option>   -->
            </select>
            
        </div>
        <div class="form-group">
            <label for="featured">Featured</label>
            <select class="form-control" id="featured" name="featured">
                <option value="y">yes</option>
                <option value="n">no</option>
                <!-- <option value="t-shirt">t-shirt</option>   -->
            </select>
        </div>
        {{-- <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control-file" id="product_image" name="product_image">
        </div> --}}

        <div hidden class="form-group">
            <label for="thumbnail">thumbnail</label>
                <select  class="form-control" id="thumbnail" name="thumbnail" >
                <option selected value="1">image_product_1</option>
                <option selected value="2">image_product_2</option>
                <option selected value="3">image_product_3</option>
  

            </select>
            
        </div>

        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="form-group">
                <div class="d-flex flex-column bd-highlight mb-3">

                <label for="image_product_1">image_product_1</label>

                <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output1"/>
                <br>
                <input type="file" class="form-control-file" id="image_product_1" name="image_product_1" accept="image/*" onchange="loadFile1(event)">
          
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
                </div>

                {{-- <input type="file" class="form-control-file" id="image_product_1" name="image_product_1"> --}}
            </div>

            {{-- @csrf
            <h1>image_testimony</h1>
            <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output"/>
            <br>
            <input type="file" class="form-control-file" id="image_product_1" name="image_product_1" accept="image/*" onchange="loadFile(event)">
      
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
            </script> --}}

            <div class="form-group">
                <div class="d-flex flex-column bd-highlight mb-3">

                    <label for="image_product_2">image_product_2</label>
                    {{-- <input type="file" class="form-control-file" id="image_product_2" name="image_product_2"> --}}
                    <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output2"/>
                    <br>
                    <input type="file" class="form-control-file" id="image_product_2" name="image_product_2" accept="image/*" onchange="loadFile2(event)">
              
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
                </div>
            </div>
            <div class="form-group">
                <div class="d-flex flex-column bd-highlight mb-3">

                    <label for="image_product_3">image_product_3</label>
                    {{-- <input type="file" class="form-control-file" id="image_product_3" name="image_product_3"> --}}
                    <img style="width: 200px; display: none" src="" class="card-img-top fade-1" alt="..." id="output3"/>
                    <br>
                    <input type="file" class="form-control-file" id="image_product_3" name="image_product_3" accept="image/*" onchange="loadFile3(event)">
              
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
                </div>
            </div>
            {{-- <div class="p-2 bd-highlight">Flex item 1</div>
            <div class="p-2 bd-highlight">Flex item 2</div>
            <div class="p-2 bd-highlight">Flex item 3</div> --}}
        </div>
        <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
                <label for="discount">discount</label>
                <input type="number" class="form-control" id="discount" name="discount"  min="1" max="50">
        </div>
        <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" id="description" style="height: 150px" name="description"></textarea>
        </div>
        <h1>active</h1>            
        <select class="form-control" id="active" name="active">
        <option value="1">yes</option>
        <option value="0">no</option>
        </select>
        <button type="submit" class="btn btn-primary mt-3">Add</button>
    </form>
</div>
@endsection