@extends('auth.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Album</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('album.index') }}" enctype="multipart/form-data">
                Back</a>
        </div>
    </div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<form action="{{ route('album.update',$album->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Album:</strong>
                <input type="text" name="nama_album" value="{{ $album->nama_album }}" class="form-control"
                    placeholder="Nama Album">
                @error('nama_album')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi"
                    value="{{ $album->deskripsi }}">
                @error('deskripsi')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Dibuat:</strong>
                <input type="date" name="tanggal_dibuat" value="{{ $album->tanggal_dibuat }}" class="form-control"
                    placeholder="Tanggal Dibuat">
                @error('tanggal_dibuat')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
</form>
@endsection