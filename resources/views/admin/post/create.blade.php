@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Judul <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
            </div>
            
            <div class="form-group">
                <label>Gambar</label>
                <input class="form-control" type="file" name="image" value="{{ old('image') }}" />
            </div>
            <div class="form-group">
                <label>Isi</label>
                <textarea class="form-control" name="content" value="{{ old('content') }}" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('post.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection