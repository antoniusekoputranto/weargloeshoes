@extends('admin.index')

@section('data')
<div class="container mt-5">
    <form action="{{url()->current()}}/updatecolour" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$productcolours->name}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$productcolours->price}}">
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size" name="size" value="{{$productcolours->size}}">
            </div>
            <div class="form-group">
                <label for="colour">Colour</label>
                <input type="text" class="form-control" id="colour" name="colour" value="{{$productcolours->colour}}">
            </div>
            <div class="form-group">
                <label for="heel_height">Heel Height</label>
                <input type="text" class="form-control" id="heel_height" name="heel_height" value="{{$productcolours->heel_height}}">
            </div>
            <div class="form-group">
                <label for="size_chart">Size Chart</label>
                <input type="text" class="form-control" id="size_chart" name="size_chart" value="{{$productcolours->size_chart}}">
            </div>

            <!-- <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div> -->
            <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>

@endsection
