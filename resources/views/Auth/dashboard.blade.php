@extends('Auth.layouts')
@section('link_text', 'All Posts')
@section('link1_text', 'All Albums')
@section('link', '/foto')
@section('link1', '/album')
@section('content')


<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
                @else
                <div class="alert alert-dark text-center">
                    Hai, selamat datang di Web Galeri Foto!
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="row">
        @foreach ($fotos as $foto)
        <div class="col-lg-4 mb-4">
            <div class="card h-100 custom-card">
                <!-- Added custom-card class -->
                    <img src="/image/{{ $foto->image }}" class="card-img-top" alt="Image"
                        style="height: 200px; object-fit: cover;">
                <div class="card-body" style="background-color: #ffffff;">
                    <h5 class="card-title fw-bold btn btn-success rounded-pill text-white">{{ $foto->album->nama_album }}</h5>
                    <br>
                    <br>
                    <p class="card-text fw-bold btn btn-outline-success rounded-pill btn-sm text-dark">{{ $foto->judul_foto }}</p>
                    <p class="text-dark text-dark">{{ $foto->deskripsi_foto }}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <form action="{{ route('foto.like', $foto->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger me-md-2" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                  </svg>
                                  {{ $foto->likes()->count() }}
                            </button>
                        </form>
                        <button
                            onclick="window.location='{{ route('comments.show', $foto->id) }}'"class="btn btn-info me-md-2"
                            type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                              </svg>
                              {{ $foto->comments->count() }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection