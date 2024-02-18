@extends('layouts.main')

@section('container')
    <div
        class="container my-3 text-center d-flex flex-column justify-content-center align-items-center border border-dark rounded p-3">
        <div class="img-container">
            @if ($employee->photo)
                <img src="{{ asset('storage/images/' . $employee->photo) }}" alt="Foto Karyawan" class="img-fluid rounded"
                    style="height: 400px; width: 300px; object-fit: contain;">
            @else
                <img src="{{ asset('images/blank-profile.png') }}" alt="Foto Karyawan" class="img-fluid rounded"
                    style="height: 400px; width: 300px; object-fit: contain;">
            @endif
        </div>
        <div class="mt-3">
            <h2>{{ $employee->name }}</h2>
            <p>Umur : {{ $employee->age }}</p>
            <p>Alamat : {{ $employee->address }}</p>
            <p>Nomor Telepon : {{ $employee->telp_num }}</p>
        </div>
        <div class="mt-3">
            <a href="/list-karyawan" class="btn bg-primary text-white">
                <i class="bi bi-arrow-left-square"></i> Go Back
            </a>
        </div>
    </div>
@endsection
