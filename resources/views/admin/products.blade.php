@extends('admin.index')

@section('data')
<div class="container mt-5">
    <!-- <a href="/admin/products/add_size"><button type="button" class="btn btn-primary mb-2">Shoes Size</button></a> -->
    {{-- <a href="/admin/products/add_product_type"><button type="button" class="btn btn-primary mb-2">Product Type</button></a> --}}
    <a href="/admin/products/add_product"><button type="button" class="btn btn-primary mb-2">Add</button></a>
    {{-- <a href="/show_feed"><button type="button" class="btn btn-primary mb-2">Feed</button></a> --}}

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Colour</th>
                <th scope="col">heel_height</th>
                <th scope="col">Product Type</th>
                <th scope="col">Featured</th>
                <th scope="col">Product Image</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
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
                <td><img src="/images/{{$p->product_image}}" width="100" height="100"></td>
                <td>{{$p->price}}</td>
                <td>{{$p->description}}</td>
                <td>
                    <div>

                        <a href="/admin/products/edit/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-success">Update</button></a>
                        <a href="/admin/products/delete/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-danger">Delete</button></a>
                        <!-- <a href="/admin/products/detail/{{$p->id}}"><button type="button" style="width:50px; font-size:10px"class="btn btn-primary">Detail</button></a> -->
                        
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endSection