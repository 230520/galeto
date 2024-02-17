@extends('Auth.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Foto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('foto.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mx-auto">
        <div class="card" style="width: 20rem;">
            <img src="/image/{{ $foto->image }}" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title fw-bold btn btn-success text-white">{{ $foto->album->nama_album }}</h4>
                    <br>
                    <p class="card-text fw-bold btn btn-outline-success">{{ $foto->judul_foto }}</p>
                    <p class="text-dark">{{ $foto->deskripsi_foto }}</p>
                    <p class="text-secondary">{{ $foto->tgl_unggah }}</p>
                </div>
                    <form action="{{ route('foto.destroy',$foto->id) }}" class="text-center"  method="POST">

                        <a class="btn btn-warning" href="{{ route('foto.edit',$foto->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <br>
        </div>
    </div>

    @endsection