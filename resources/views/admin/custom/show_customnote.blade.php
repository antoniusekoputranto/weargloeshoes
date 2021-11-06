@extends('admin.index')
@section('data')
<div class="container">

    <div class="custom-note">

      <h1>custom note</h1>
      <a href="/admin/customnote/create_customnote" class="btn btn-primary">add</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">description_note</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customnotes as $customnote)
                
            <tr>
              {{-- <th scope="row">{{$customnote->id}}</th> --}}
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$customnote->description_note}}</td>
              <td>
                <a href="/admin/customnote/update_customnote/{{$customnote->id}}" class="btn btn-warning">update</a>
                <a onclick="return confirm('Are you sure?')" href="/admin/customnote/delete_customnote/{{$customnote->id}}" class="btn btn-info">delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="custom-testimony">

      <h1>custom testimony</h1>
      <a href="/admin/customtestimony/create_customtestimony" class="btn btn-primary">add</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">image_testimony</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($customtestimonys as $customtestimony)
              
          <tr>
            {{-- <th scope="row">{{$customtestimony->id}}</th> --}}
            <th scope="row">{{$loop->iteration}}</th>
            <th><img style="width: 200px" src="{{asset('/images/custom/customtestimony/'.$customtestimony->image_testimony) }}" class="card-img-top fade-1" alt="..."></th>
            <td>
              <a href="/admin/customtestimony/update_customtestimony/{{$customtestimony->id}}" class="btn btn-warning">update</a>
              <a onclick="return confirm('Are you sure?')" href="/admin/customtestimony/delete_customtestimony/{{$customtestimony->id}}" class="btn btn-info">delete</a>
            </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endSection