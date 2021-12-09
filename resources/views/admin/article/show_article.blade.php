@extends('admin.index')
@section('data')
<div class="container">

    <div class="judul">

      <h1>Article</h1>
      <a href="/admin/create_article" class="btn btn-primary">add</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">title</th>
            <th scope="col">image_article</th>
            <th scope="col">contents</th>
            <th scope="col">active</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                
            <tr>
              {{-- <th scope="row">{{$feed->id}}</th> --}}
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$article->title}}</td>
              <th><img style="width: 200px" src="{{asset('/images/article/'.$article->image_article) }}" class="card-img-top fade-1" alt="..."></th>
              <td>
                {{$article->contents}}
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  detail
                </button> --}}

                <!-- Modal -->
                {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contents</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body modal-dialog modal-dialog-scrollable">
                        <p>{{$article->contents}}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div> --}}
              </td>
              <td>
                @if ($article->active == 1)
                    yes
                @else
                    no
                @endif
              </td>
              <td>
                <a href="/admin/update_article/{{$article->id}}" class="btn btn-warning">update</a>
                <a onclick="return confirm('Are you sure?')" href="/admin/delete_article/{{$article->id}}" class="btn btn-info">delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endSection