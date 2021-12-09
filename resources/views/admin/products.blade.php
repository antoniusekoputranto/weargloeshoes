@extends('admin.index')
@section('data')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.25/datatables.min.css"/> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" />
<div class="container mt-5">
    <!-- <a href="/admin/products/add_size"><button type="button" class="btn btn-primary mb-2">Shoes Size</button></a> -->
    {{-- <a href="/admin/products/add_product_type"><button type="button" class="btn btn-primary mb-2">Product Type</button></a> --}}
    <a href="/admin/products/add_product"><button type="button" class="btn btn-primary mb-2">Add</button></a>
    {{-- <a href="/show_feed"><button type="button" class="btn btn-primary mb-2">Feed</button></a> --}}
<div class="table-responsive">
    <table class="table" id="example" >
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Colour</th>
                <th scope="col">heel_height</th>
                <th scope="col">Product Type</th>
                <th scope="col">Featured</th>
                <th scope="col">Product Image</th>
                <th scope="col" style="width: 10%">price</th>
                <th scope="col">discount</th>
                {{-- <th scope="col">afterdiscount</th> --}}
                <th scope="col">description</th>
                <th scope="col">active</th>
                <th scope="col" class="text-center" style="width: 15%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $p)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$p->product_name}}</td>
                <td>{{$p->colour}}</td>
                <td>{{$p->heel_height}}</td>
                <td>{{$p->product_type}}</td>
                <td>{{$p->featured}}</td>
                {{-- <td><img src="/images/{{$p->product_image}}" width="100" height="100"></td> --}}
                <td>
                    {{-- <button class="btn btn-primary" type="submit">Button</button> --}}
                    <!-- Button trigger modal -->
                    {{-- <img src="/images/{{$p->product_image}}" width="100" height="100"> --}}
                    <button type="button" class="btn btn-primary more" data-id="{{$p->id}}"data-toggle="modal" data-target="#fotoproduct">
                        Detail
                    </button>
                    
                    
                </td>

                <td>Rp. {{ number_format($p->price, 0, ',', '.') }}</td>
                {{-- <td>{{$p->discount}}%</td> --}}
                <td>
                    @if($p->discount== null)
                    @else
                    {{$p->discount}}%
                    @endif
                </td>

                {{-- <td>{{$discountitem}}</td> --}}
                {{-- <td>{{$p->price}}</td> --}}
                <td>{{$p->description}}</td>
                <td>
                    @if ($p->active == 1)
                        yes
                    @else
                        no
                    @endif
                </td>
                <td>
                    <div class="text-center">
                        <a href="/admin/products/edit/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-success">Update</button></a>
                        <a onclick="return confirm('Are you sure?')" href="/admin/products/delete/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-danger">Delete</button></a>
                        {{-- <a href="/admin/products/discount/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-success">discount</button></a> --}}

                        <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            discount
                        </button> --}}
                        
                        <!-- Modal -->
                        <form action="/admin/products/discount/{{$p->id}}" method="GET" enctype="multipart/form-data">
                           @csrf
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$p->product_name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="discount">Discount</label>
                                        <input type="text" class="form-control" id="discount" name="discount">
                                        <input type="text" class="form-control" id="productid" name="productid" value="{{$p->id}}" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>


                        <!-- <a href="/admin/products/detail/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-primary">Detail</button></a> -->
                        <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Launch static backdrop modal
                        </button> --}}                      
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    {{ $products ->links() }}
     {{-- <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        ...
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div> --}}


  
  <!-- Modal -->
  <div class="modal fade" id="fotoproduct" tabindex="-1" role="dialog" aria-labelledby="fotoproductLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fotoproductLabel">Product Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img style="width: 300px;" src="" alt="..." id="output1"/>
            <img style="width: 300px;" src="" alt="..." id="output2"/>
            <img style="width: 300px;" src="" alt="..." id="output3"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>

 </div>


 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script>
    $(".more").click(function(){
        var id= $( this ).data( "id" );
        var url= window.location.origin+"/admin/show_imageproduct/" + id;
        

        fetch(url)
        .then(response => response.json())
        .then(dt => {
            // $("#output1").attr('src',"asset('/images/product/imageproduct/"+dt.image.image_product_1+"')");
            $("#output1").attr('src',`{{asset('/images/product/imageproduct/${dt.image.image_product_1}')}}`);
            
            $("#output2").attr('src',`{{asset('/images/product/imageproduct/${dt.image.image_product_2}')}}`);
            // $("#output2").attr('src',"asset('/images/product/imageproduct/"+dt.image.image_product_2+"')");
            $("#output3").attr('src',`{{asset('/images/product/imageproduct/${dt.image.image_product_3}')}}`);

            // $("#output3").attr('src',"asset('/images/product/imageproduct/"+dt.image.image_product_3+"')");
            
        })
        .catch(error => {
        // handle the error
        console.log(error.message);
        });

        // $.ajax({ 
        //     type: 'GET', 
        //     url: url, 
        //     datatype: 'json', 
        //     success: function (dt) { 
        //             $("#output1").attr('src',"asset('/images/product/imageproduct/'"+dt.image.image_product_1);
        //             $("#output2").attr('src',"asset('/images/product/imageproduct/'"+dt.image.image_product_2);
        //             $("#output3").attr('src',"asset('/images/product/imageproduct/'"+dt.image.image_product_3);
        //             alert("hghjghjgjhvhmbhjbhvcvb");
        //     }
        // });
    });


    //   $.getJSON(url, function (dt) {
    //             if (dt) {
    //                 $("#output1").attr('src',"asset('/images/product/imageproduct/'"+dt.image.image_product_1);
    //                 $("#output2").attr('src',"asset('/images/product/imageproduct/'"+dt.image.image_product_2);
    //                 $("#output3").attr('src',"asset('/images/product/imageproduct/'"+dt.image.image_product_3);
    //     alert("setan");

    //                 feather.replace();
    //                 NProgress.done();
    //             }
    //         })
    // });

    
      

</script>
@endSection