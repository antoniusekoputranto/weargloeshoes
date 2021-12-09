@extends('admin.index')

@section('data')
<div class="container">

    <div class="judul">

      <h1>customerservice</h1>
      <a href="/admin/create_customerservice/" class="btn btn-primary">add</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">image</th>
            <th scope="col">description_customer_service</th>
            <th scope="col">active</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customerservices as $customerservice)
                
            <tr>
              {{-- <th scope="row">{{$customerservice->id}}</th> --}}
              <th scope="row">{{$loop->iteration}}</th>
              <th><img style="width: 200px" src="{{asset('/images/customerservice/'.$customerservice->image) }}" class="card-img-top fade-1" alt="..."></th>
              <td>{{$customerservice->description_customer_service}}</td>
              <td>
                @if ($customerservice->active == 1)
                    yes
                @else
                    no
                @endif
              </td>
               <td>
                <a href="/admin/update_customerservice/{{$customerservice->id}}" class="btn btn-warning">update</a>
                <a onclick="return confirm('Are you sure?')" href="/admin/delete_customerservice/{{$customerservice->id}}" class="btn btn-info">delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endSection