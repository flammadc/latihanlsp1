@extends('layouts.app')

@section('content')
    <div class="container mx-auto d-flex gap-4">
        <div class="profile">
            <img style="width: 200px; height: 200px;"
                src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                class="img-thumbnail" alt="...">

        </div>
        <div class="d-flex flex-column gap-3 w-100">
            <h1>Peduli Diri</h1>
            <h6>Catatan Perjalanan</h6>
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link @yield('home-active')" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('history-active')" href="/history">Catatan Perjalanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('form-active')" href="/form">Isi Perjalanan</a>
                </li>
            </ul>

            @yield('component')
        </div>
    </div>
@endsection
