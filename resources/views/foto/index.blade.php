@extends('auth.layouts')
@section('link_text', 'Dashboard')
@section('link', '/dashboard')

@section('content')
    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('foto.create') }}">+ Ayo buat foto baru!</a>
        </div>
        <br>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container mt-4">
    <div class="row">
        @foreach ($fotos as $foto)
        <div class="col-lg-4 mb-4">
            <div class="card h-100 custom-card">
                <!-- Added custom-card class -->
                <a href="foto/{{ $foto->id }}">
                    <img src="/image/{{ $foto->image }}" class="card-img-top" alt="Image"
                        style="height: 200px; object-fit: cover;">
                </a>
                <div class="card-body" style="background-color: #ffffff;">
                    <h5 class="card-title fw-bold btn btn-success rounded-pill text-dark">{{ $foto->album->nama_album }}</h5>
                    <br>
                    <br>
                    <p class="card-text fw-bold btn btn-outline-success rounded-pill btn-sm text-dark">
                        {{ $foto->judul_foto }}</p>
                    <p class="text-dark text-dark">{{ $foto->deskripsi_foto }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{!! $fotos->links() !!}
    

@endsection
