@extends('admin.index')

@section('data')
<div class="container">

    <h1>customerservice</h1>
    <form action="/admin/update_customerservice/{{$customerservices->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>image</h1>
        <img style="width: 200px" src="{{asset('/images/customerservice/'.$customerservices->image) }}" class="card-img-top fade-1" alt="..." id="output"/>
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
        <label for="description_customer_service">description_customer_service</label>
        <textarea type="text" class="form-control" id="description_customer_service" name="description_customer_service">{{($customerservices->description_customer_service)}}</textarea>
        <h1>active</h1>            
        <select class="form-control" id="active" name="active" value="{{($customerservices->active)}}">
        <option value="1" {{ $customerservices->active == '1' ? 'selected="selected"' : '' }}>yes</option>
        <option value="0" {{ $customerservices->active == '0' ? 'selected="selected"' : '' }}>no</option>
        </select>
        <button type="submit" name="customerservice" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endSection