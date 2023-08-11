
@extends('home.layouts.app')

@section('content')


    <h1>Daftar Club</h1>
<div class="row">
    @foreach($clubs as $club)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($club->foto)
                    <img src="{{ asset('storage/foto_club/' . $club->foto) }}" class="img" alt="Foto Klub"width="100" height="100">
                @else
                    <img src="{{ asset('images/default-club.jpg') }}" class="img" alt="Default Foto Klub">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $club->nama_club }}</h5>

                    <a href="{{ route('lihatclub', $club->id) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
