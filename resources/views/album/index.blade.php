@extends('auth.layouts')
@section('link_text', 'Dashboard')
@section('link', '/dashboard')
@section('link1', '/dashboard')

@section('content')
<div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('album.create') }}"> + Buat Album</a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>Nama Album</th>
            <th>Deskripsi</th>
            <th>Tanggal Dibuat</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($albums as $album)
            <tr>
                <td>{{ $album->nama_album }}</td>
                <td>{{ $album->deskripsi }}</td>
                <td>{{ $album->tanggal_dibuat }}</td>
                <td>
                    <form action="{{ route('album.destroy',$album->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('album.edit', $album->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>

{!! $albums->links() !!}

@endsection