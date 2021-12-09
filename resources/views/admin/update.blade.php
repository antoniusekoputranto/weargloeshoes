@extends('admin.index')

@section('data')
<div class="container mt-5">
    <form action="/update_product" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" name="id" value="{{$products->id}}">
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{($products->product_name)}}">
        </div>
        <div class="form-group">
            <label for="colour">Colour</label>
            <input type="text" class="form-control" id="colour" name="colour" value="{{($products->colour)}}">
        </div>
        <div class="form-group">
            <label for="heel_height">heel_height</label>
            <input type="text" class="form-control" id="heel_height" name="heel_height" value="{{($products->heel_height)}}">
        </div>

        <div class="form-group">
            <label for="product_type">Product Type</label>
                <select  class="form-control" id="product_type" name="product_type" value="{{($products->product_type)}}">

                    @foreach ($ktgr as $item)
                    <option value="{{$item->post_title}}" {{ $products->product_type == '$item->post_title' ? 'selected="selected"' : '' }}>{{$item->post_title}}</option>
                    @endforeach
                <!-- <option selected value="shoes">shoes</option> -->
                

                <!-- <option value="t-shirt">t-shirt</option>   -->
            </select>
            <!-- <input type="text" class="form-control" id="product_type" name="product_type" value="{{($products->product_type)}}"> -->
        </div>
        <div class=" form-group">
            <label for="featured">Featured</label>
            <select class="form-control" id="featured" name="featured" value="{{($products->featured)}}">
                <option value="y" {{ $products->product_type == 'y' ? 'selected="selected"' : '' }}>yes</option>
                <option value="n" {{ $products->product_type == 'n' ? 'selected="selected"' : '' }}>no</option>
                <!-- <option value="t-shirt">t-shirt</option>   -->
            </select>
        </div>
        {{-- <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control-file" id="product_image" name="product_image" value="{{($products->product_name)}}"> --}}
            {{-- <a href="/admin/update_imageproduct/{{$products->id}}">sda</a> --}}
        {{-- </div> --}}

        <div hidden class="form-group">
            <label for="thumbnail">thumbnail</label>
                <select onchange="thumbnailvalue()" class="form-control" id="thumbnail" name="thumbnail" >
                <option id="thumbnail1" {{ $image->image_product_1 ? '' : 'disabled'}} {{ $image->thumbnail == '1' ? 'selected="selected"' : '' }} value="1">image_product_1</option>
                <option id="thumbnail2" {{ $image->image_product_2 ? '' : 'disabled'}} {{ $image->thumbnail == '2' ? 'selected="selected"' : '' }}  value="2">image_product_2</option>
                <option id="thumbnail3" {{ $image->image_product_3 ? '' : 'disabled'}} {{ $image->thumbnail == '3' ? 'selected="selected"' : '' }}  value="3">image_product_3</option>
  

            </select>
            <script>
                function thumbnailvalue(){
                    var value=document.getElementById("thumbnail").value; 
                    var a= document.getElementsByClassName('btn-danger');
                    for(var e = 0; e < a.length; e++) { // For each element
                    var elt = a[e];
                    elt.removeAttribute("disabled");
}
                    document.getElementById('btn-danger-image-'+value).setAttribute("disabled","");
                }
            </script>
        </div>

        <div hidden>
            <div class="form-group">
                <label for="image1">image1</label>
                <input type="text" class="form-control" id="image1" name="image1" value="{{$image->image_product_1??0}}">
            </div>
            <div class="form-group">
                <label for="image2">image2</label>
                <input type="text" class="form-control" id="image2" name="image2" value="{{$image->image_product_2??0}}">
            </div>
            <div class="form-group">
                <label for="image3">image3</label>
                <input type="text" class="form-control" id="image3" name="image3"value="{{$image->image_product_3??0}}">
            </div>
        </div>

        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="form-group">
                <div class="d-flex flex-column bd-highlight mb-3">

                <label for="image_product_1">image_product_1</label>
                <button type="button" class="btn btn-danger" id="btn-danger-image-1" onclick="deleteimage1()" {{ $image->thumbnail!=1 ? '' : 'disabled'}}>Delete</button>

                <img style="width: 200px;" src="{{asset('/images/product/imageproduct/'.$image->image_product_1) }}" class="card-img-top fade-1" alt="..." id="output1"/>
                <br>
                <input type="file" class="form-control-file" id="image_product_1" name="image_product_1" accept="image/*" onchange="loadFile1(event)">
          
                <script>
                    function deleteimage1(){
                        document.getElementById("image1").value=0; 
                        document.getElementById('output1').src ="";
                        document.getElementById('image_product_1').value=null;
                        document.getElementById('thumbnail1').setAttribute("disabled","");
                        document.getElementById('thumbnail1').removeAttribute("selected");
                        // document.getElementById('thumbnail').value=null;
                        


                    }
                    var loadFile1 = function(event) {
                        var reader = new FileReader();
                        reader.onload = function(){
                        var output = document.getElementById('output1');
                        output.style.removeProperty("display");
                        output.src = reader.result;
                    };
                        reader.readAsDataURL(event.target.files[0]);
                        document.getElementById("image1").value=1; 
                        document.getElementById('thumbnail1').removeAttribute("disabled");
                        // document.getElementById('btn-danger-image-1').removeAttribute("disabled");

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
                    <button type="button" class="btn btn-danger" id="btn-danger-image-2"  onclick="deleteimage2()" {{ $image->thumbnail!=2 ? '' : 'disabled'}}>Delete</button>

                    <img style="width: 200px;" src="{{asset('/images/product/imageproduct/'.$image->image_product_2) }}" class="card-img-top fade-1" alt="..." id="output2"/>
                    <br>
                    <input type="file" class="form-control-file" id="image_product_2" name="image_product_2" accept="image/*" onchange="loadFile2(event)">
              
                    <script>
                        function deleteimage2(){
                            document.getElementById("image2").value=0; 
                            document.getElementById('output2').src ="";
                            document.getElementById('image_product_2').value=null;
                            document.getElementById('thumbnail2').setAttribute("disabled","");
                            document.getElementById('thumbnail2').removeAttribute("selected");
                            // document.getElementById('thumbnail').value=null;


                        }
                        var loadFile2 = function(event) {
                            var reader = new FileReader();
                            reader.onload = function(){
                            var output = document.getElementById('output2');
                            output.style.removeProperty("display");
                            output.src = reader.result;
                        };
                            reader.readAsDataURL(event.target.files[0]);
                            document.getElementById("image2").value=1; 
                            document.getElementById('thumbnail2').removeAttribute("disabled");
                            // document.getElementById('btn-danger-image-2').removeAttribute("disabled");
                        };

                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="d-flex flex-column bd-highlight mb-3">

                    <label for="image_product_3">image_product_3</label>
                    {{-- <input type="file" class="form-control-file" id="image_product_3" name="image_product_3"> --}}
                    <button type="button" class="btn btn-danger" id="btn-danger-image-3" onclick="deleteimage3()" {{ $image->thumbnail!=3 ? '' : 'disabled'}}>Delete</button>

                    <img style="width: 200px;" src="{{asset('/images/product/imageproduct/'.$image->image_product_3) }}" class="card-img-top fade-1" alt="..." id="output3"/>
                    <br>
                    <input type="file" class="form-control-file" id="image_product_3" name="image_product_3" accept="image/*" onchange="loadFile3(event)">
              
                    <script>
                        function deleteimage3(){
                            document.getElementById("image3").value=0; 
                            document.getElementById('output3').src ="";
                            document.getElementById('image_product_3').value=null;
                            document.getElementById('thumbnail3').setAttribute("disabled","");
                            document.getElementById('thumbnail3').removeAttribute("selected");
                            // document.getElementById('thumbnail').value=null;




                        }
                        var loadFile3 = function(event) {
                            var reader = new FileReader();
                            reader.onload = function(){
                            var output = document.getElementById('output3');
                            output.style.removeProperty("display");
                            output.src = reader.result;
                        };
                            reader.readAsDataURL(event.target.files[0]);
                            document.getElementById("image3").value=1; 
                            document.getElementById('thumbnail3').removeAttribute("disabled");
                            // document.getElementById('btn-danger-image-3').removeAttribute("disabled");

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
            <input type="text" class="form-control" id="price" name="price" value="{{($products->price)}}">
        </div>
        <div class="form-group">
            <label for="discount">discount</label>
            <input type="number" class="form-control" id="discount" name="discount" min="1" max="50" value="{{($products->discount)}}">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <textarea type="text" class="form-control" id="description" style="height: 150px" name="description" >{{($products->description)}}</textarea> 
        </div>
        <h1>active</h1>            
        <select class="form-control" id="active" name="active" value="{{($products->active)}}">
        <option value="1" {{ $products->active == '1' ? 'selected="selected"' : '' }}>yes</option>
        <option value="0" {{ $products->active == '0' ? 'selected="selected"' : '' }}>no</option>
        </select>
        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection