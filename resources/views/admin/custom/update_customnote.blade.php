@extends('admin.index')

@section('data')
<div class="container">

    <h1>customnote</h1>
    <form action="/admin/update_customnote/{{$customnotes->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="description_note">description_note</label>
        <textarea type="text" class="form-control" id="description_note" name="description_note">{{($customnotes->description_note)}}</textarea>

        <button type="submit" name="customnote" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endSection