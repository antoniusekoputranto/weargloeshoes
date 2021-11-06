@extends('admin.index')

@section('data')
    <div class="container">
        <div class="judul">

            <h1>event</h1>
            @foreach ($events as $item)
            <?php $txt = $loop->count ?>

            @endforeach

            @if ($txt >= 5)

            @else
              <a href="/admin/create_event" class="btn btn-primary">add</a>
                
            @endif
            
          </div>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">image_event</th>
                  <th scope="col">link</th>
                  <th scope="col">action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($events as $event)
                      
                  <tr>
                    {{-- <th scope="row">{{$event->id}}</th> --}}
                    <th scope="row">{{$loop->iteration}}</th>
                    <th><img style="width: 200px" src="{{asset('/images/event/'.$event->image_event) }}" class="card-img-top fade-1" alt="..."></th>
                    <td>{{$event->link}}</td>
                    <td>
                      <a href="/admin/update_event/{{$event->id}}" class="btn btn-warning">update</a>
                      <a onclick="return confirm('Are you sure?')" href="/admin/delete_event/{{$event->id}}" class="btn btn-info">delete</a>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
    </div>
@endSection