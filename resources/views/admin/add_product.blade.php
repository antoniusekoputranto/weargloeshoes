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
                <option value="boots" >boots</option>
                <option value="heels" >heels</option>
                <option value="wedges" >wedges</option>
                <option value="flat" >flat</option>

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
        <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control-file" id="product_image" name="product_image">
        </div>
        <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add</button>
    </form>
</div>
@endsection