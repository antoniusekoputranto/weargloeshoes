@extends('admin.index')

@section('data')
    <div class="container">
        <h1>event</h1>
        <form action="/admin/update_event/{{$events->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>image_event</h1>
            <img style="width: 200px" src="{{asset('/images/event/'.$events->image_event) }}" class="card-img-top fade-1" alt="..." id="output"/>
            <br>
            <input type="file" class="form-control-file" id="image_event" name="image_event" accept="image/*" onchange="loadFile(event)">
    
            <script>
              var loadFile = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                  var output = document.getElementById('output');
                  output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
              };
            </script>
            {{-- <img style="width: 200px" src="{{asset('/images/feed/'.$feeds->image_feed) }}" class="card-img-top fade-1" alt="...">
            <br>
            <input type="file" class="form-control-file" id="image_feed" name="image_feed"> --}}
            <h1>link</h1>
            <input class="form-control" type="text" placeholder="Default input" name="link" aria-label="default input example" value="{{($events->link)}}">
    
            <button type="submit" name="event" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endSection