@extends('admin.index')

@section('data')
<div class="container">

  <h1>custom note</h1>
  <form action="/admin/customnote/create_customnote" method="post" enctype="multipart/form-data">
      @csrf
      <label for="description_note">description_note</label>
      <textarea type="text" class="form-control" id="description_note" name="description_note"></textarea>
      <h1>active</h1>            
      <select class="form-control" id="active" name="active">
      <option value="1">yes</option>
      <option value="0">no</option>
      </select>
      <button type="submit" name="customnote" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
@endSection