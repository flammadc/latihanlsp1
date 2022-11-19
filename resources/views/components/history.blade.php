@extends('home')

@section('history-active', 'active')

@section('component')
    <div class="card">
        <div class="card-body d-flex flex-column">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Suhu Tubuh</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($history->count() == 0)
                        <tr>
                            <td colspan="4">Tidak ada data</td>
                        </tr>
                    @endif
                    @foreach ($history as $h)
                        <tr>
                            <td>{{ $h->tanggal }}</td>
                            <td>{{ $h->jam }}</td>
                            <td>{{ $h->lokasi }}</td>
                            <td>{{ $h->suhu_tubuh }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/form" class="btn btn-primary align-self-end">Isi Data</a>
        </div>
    </div>

@endsection
