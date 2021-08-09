@extends('admin.index')

@section('data')
<div class="container">

    <h1>size_cart</h1>
    <form action="/admin/sizecartinfo/update_sizecart/{{$sizecarts->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>size</h1>
        <input class="form-control" type="text" placeholder="Default input" name="size" aria-label="default input example" value="{{($sizecarts->size)}}">
        <h1>foot_length</h1>
        <input class="form-control" type="text" placeholder="Default input" name="foot_length" aria-label="default input example" value="{{($sizecarts->foot_length)}}">
 
        <button type="submit" name="sizecart" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endSection