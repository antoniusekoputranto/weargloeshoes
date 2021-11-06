@extends('admin.index')
@section('data')
<div class="container">

    <div class="judul">

      <h1>feed</h1>
      <a href="/admin/create_feed" class="btn btn-primary">add</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">image_feed</th>
            <th scope="col">link</th>
            <th scope="col">active</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($feeds as $feed)
                
            <tr>
              {{-- <th scope="row">{{$feed->id}}</th> --}}
              <th scope="row">{{$loop->iteration}}</th>
              <th><img style="width: 200px" src="{{asset('/images/feed/'.$feed->image_feed) }}" class="card-img-top fade-1" alt="..."></th>
              <td>{{$feed->link}}</td>
              <td>
                  
                
                @if ($feed->active == 1)
                    yes
                @else
                    no
                @endif
                
              
            
            
              </td>
              <td>
                <a href="/admin/update_feed/{{$feed->id}}" class="btn btn-warning">update</a>
                <a onclick="return confirm('Are you sure?')" href="/admin/delete_feed/{{$feed->id}}" class="btn btn-info">delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endSection