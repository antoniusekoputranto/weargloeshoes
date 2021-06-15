@extends('admin.index')

@section('data')
<!-- <div class="container mt-5">
    <form action="/add_product" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size" name="size">
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
                <label for="size_chart">Size Chart</label>
                <input type="text" class="form-control" id="size_chart" name="size_chart">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add</button>
    </form>
</div> -->


<div class="container mt-5">
    <a href="{{url()->current()}}/add_colour"><button type="button" class="btn btn-primary mb-2">Add</button></a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">size</th>
                <th scope="col">colour</th>
                <th scope="col">heel_height</th>
                <th scope="col">size_chart</th>
                <th scope="col">control</th>
                <!-- <th scope="col">image</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($productcolours as $p)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$p->name}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->size}}</td>
                <td>{{$p->colour}}</td>
                <td>{{$p->heel_height}}</td>
                <td>{{$p->size_chart}}</td>
                <!-- <td><img src="/images/{{$p->product_image}}" width="100" height="100"></td> -->
                <td>
                    <div>

                        <a href="{{url()->current()}}/edit_colour/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-success">Update</button></a>
                        <a href="{{url()->current()}}/delete_colour/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-danger">Delete</button></a>
                        <!-- <a href="/admin/products/detail/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-primary">Detail</button></a> -->
                        
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>



@endsection
