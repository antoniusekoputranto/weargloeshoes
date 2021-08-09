@extends('admin.index')

@section('data')
<div class="container">

    <h1>sizecartinfo</h1>
    <form action="/admin/update_sizecartinfo/{{$sizecartinfos->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>image</h1>
        <img style="width: 200px" src="{{asset('/images/sizecartinfo/'.$sizecartinfos->image) }}" class="card-img-top fade-1" alt="..." id="output"/>
        <br>
        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" onchange="loadFile(event)">

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

        <button type="submit" name="sizecartinfo" class="btn btn-primary mt-3">Submit</button>
    </form>

    <div class="judul">
      <h1>size_cart</h1>
      <a href="/admin/sizecartinfo/create_sizecart" class="btn btn-primary">add</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">size</th>
          <th scope="col">foot_length</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($sizecarts as $sizecart)
              
          <tr>
            <th scope="row">{{$sizecart->id}}</th>
            <td>{{$sizecart->size}}</td>
            <td>{{$sizecart->foot_length}}</td>
            <td>
              <a href="/admin/sizecartinfo/update_sizecart/{{$sizecart->id}}" class="btn btn-warning">update</a>
              <a href="/admin/sizecartinfo/delete_sizecart/{{$sizecart->id}}" class="btn btn-info">delete</a>
            </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endSection