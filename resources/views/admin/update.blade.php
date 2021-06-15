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
                <!-- <option selected value="shoes">shoes</option> -->
                <option value="boots" {{ $p->product_type == 'boots' ? 'selected="selected"' : '' }}>boots</option>
                <option value="heels" {{ $p->product_type == 'heels' ? 'selected="selected"' : '' }}>heels</option>
                <option value="wedges" {{ $p->product_type == 'wedges' ? 'selected="selected"' : '' }}>wedges</option>
                <option value="flat" {{ $p->product_type == 'flat' ? 'selected="selected"' : '' }}>flat</option>

                <!-- <option value="t-shirt">t-shirt</option>   -->
            </select>
            <!-- <input type="text" class="form-control" id="product_type" name="product_type" value="{{($p->product_type)}}"> -->
        </div>
        <div class=" form-group">
            <label for="new_arrival">New Arrival</label>
            <select class="form-control" id="new_arrival" name="new_arrival" value="{{($p->new_arrival)}}">
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