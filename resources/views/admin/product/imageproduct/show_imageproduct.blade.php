@extends('admin.index')
@section('data')
<div class="container">

    <div class="judul">

      <h1>imageproduct</h1>
      <a href="/admin/create_imageproduct" class="btn btn-primary">add</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">product</th>
            <th scope="col">image_product_1</th>
            <th scope="col">image_product_2</th>
            <th scope="col">image_product_3</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($imageproducts as $imageproduct)
                
            <tr>
              <th scope="row">{{$imageproduct->id}}</th>
              <td>{{$imageproduct->product}}</td>
              <th>
                @if ($imageproduct->image_product_1 == null)
                    
                @else
                    
                <img style="width: 200px" src="{{asset('/images/product/imageproduct/'.$imageproduct->image_product_1) }}" class="card-img-top fade-1" alt="..."> 
                {{-- <a onclick="return confirm('Are you sure?')" href="/admin/delete_imageproduct/{{$imageproduct->id}}/image_product_1" class="btn btn-info">delete</a> --}}
                @endif
              </th>
              <th>
                @if ($imageproduct->image_product_2 == null)
                    
                @else
                    
                <img style="width: 200px" src="{{asset('/images/product/imageproduct/'.$imageproduct->image_product_2) }}" class="card-img-top fade-1" alt="...">
                <a onclick="return confirm('Are you sure?')" href="/admin/delete_imageproduct/{{$imageproduct->id}}/image_product_2" class="btn btn-info">delete
                @endif
              </th>
              <th>
                @if ($imageproduct->image_product_3 == null)
                    
                @else
                    
                <img style="width: 200px" src="{{asset('/images/product/imageproduct/'.$imageproduct->image_product_3) }}" class="card-img-top fade-1" alt="...">
                <a onclick="return confirm('Are you sure?')" href="/admin/delete_imageproduct/{{$imageproduct->id}}/image_product_3" class="btn btn-info">delete
                @endif
              </th>
              <td>
                <a href="/admin/update_imageproduct/{{$imageproduct->id}}" class="btn btn-warning">update</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endSection