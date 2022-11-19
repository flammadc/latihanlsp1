@extends('home')

@section('home-active', 'active')

@section('component')
    <div class="card">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">Hello!</h5>
            <p class="card-text">Selamat datang {{ Auth::user()->name }}
                di aplikasi peduli diri</p>

            <a href="/form" class="btn btn-primary align-self-end">Isi Data</a>
        </div>
    </div>
@endsection
