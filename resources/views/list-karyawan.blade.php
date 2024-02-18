@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <h1>List Karyawan</h1>

        <div class="row">
            @forelse ($employees as $employee)
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card" style="width: 20rem;">
                        @if ($employee->photo)
                            <img src="{{ asset('storage/images/' . $employee->photo) }}" alt="Foto Karyawan"
                                class="img-fluid rounded" style="max-height: 325px; object-fit: cover;">
                        @else
                            <img src="{{ asset('images/blank-profile.png') }}" alt="Foto Karyawan" class="img-fluid rounded">
                        @endif

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $employee->name }} ({{ $employee->age }})</h5>
                            <p>Telepon: {{ $employee->telp_num }}</p>
                            <a href="/karyawan/{{ $employee->id }}" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2>Belum ada karyawan</h2>
            @endforelse
        </div>
    </div>
@endsection
