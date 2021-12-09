@extends('admin.index')

@section('data')
<div class="container">

    <h1>customnote</h1>
    <form action="/admin/update_customnote/{{$customnotes->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="description_note">description_note</label>
        <textarea type="text" class="form-control" id="description_note" name="description_note">{{($customnotes->description_note)}}</textarea>
        <h1>active</h1>            
        <select class="form-control" id="active" name="active" value="{{($customnotes->active)}}">
        <option value="1" {{ $customnotes->active == '1' ? 'selected="selected"' : '' }}>yes</option>
        <option value="0" {{ $customnotes->active == '0' ? 'selected="selected"' : '' }}>no</option>
        </select>
        <button type="submit" name="customnote" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endSection