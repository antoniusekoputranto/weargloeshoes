@extends('admin.index')

@section('data')
<div class="container mt-5">
    @foreach ($products as $p)
    <form action="/update_product" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" name="id" value="{{$p->id}}">
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{($p->product_name)}}">
        </div>
        <div class="form-group">
            <label for="colour">Colour</label>
            <input type="text" class="form-control" id="colour" name="colour" value="{{($p->colour)}}">
        </div>
        <div class="form-group">
            <label for="heel_height">heel_height</label>
            <input type="text" class="form-control" id="heel_height" name="heel_height" value="{{($p->heel_height)}}">
        </div>

        <div class="form-group">
            <label for="product_type">Product Type</label>
                <select  class="form-control" id="product_type" name="product_type" value="{{($p->product_type)}}">

                    @foreach ($ktgr as $item)
                    <option value="{{$item->post_title}}" {{ $p->product_type == '$item->post_title' ? 'selected="selected"' : '' }}>{{$item->post_title}}</option>
                    @endforeach
                <!-- <option selected value="shoes">shoes</option> -->
                

                <!-- <option value="t-shirt">t-shirt</option>   -->
            </select>
            <!-- <input type="text" class="form-control" id="product_type" name="product_type" value="{{($p->product_type)}}"> -->
        </div>
        <div class=" form-group">
            <label for="featured">Featured</label>
            <select class="form-control" id="featured" name="featured" value="{{($p->featured)}}">
                <option value="y" {{ $p->product_type == 'y' ? 'selected="selected"' : '' }}>yes</option>
                <option value="n" {{ $p->product_type == 'n' ? 'selected="selected"' : '' }}>no</option>
                <!-- <option value="t-shirt">t-shirt</option>   -->
            </select>
        </div>
        <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control-file" id="product_image" name="product_image" value="{{($p->product_name)}}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{($p->price)}}">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <textarea type="text" class="form-control" id="description" name="description" >{{($p->description)}}</textarea> 
        </div>
        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
    @endforeach
</div>
@endsection