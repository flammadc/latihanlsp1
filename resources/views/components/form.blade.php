@extends('home')

@section('form-active', 'active')

@section('component')
    <div class="card">
        <div class="card-body d-flex flex-column">
            <form class="d-flex flex-column" action="{{ url('history') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" aria-describedby="emailHelp"
                        autofocus required>
                </div>
                <div class="mb-3">
                    <label for="jam" class="form-label">Jam</label>
                    <input type="time" name="jam" class="form-control" id="jam" required>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" id="lokasi" required>
                </div>
                <div class="mb-3">
                    <label for="suhu_tubuh" class="form-label">Suhu Tubuh</label>
                    <input type="number" name="suhu_tubuh" class="form-control" id="suhu_tubuh" required>
                </div>

                <button type="submit" class="btn btn-primary align-self-end">Submit</button>
            </form>
        </div>
    </div>
@endsection
