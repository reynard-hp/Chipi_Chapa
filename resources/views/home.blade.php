@extends('layouts.main')

@section('container')
    <div class="container p-5 bg-body-secondary rounded-3">
        <div class="py-5">
            <h1 class="display-5 fw-bold">Chipi Chapa</h1>
            <hr>
            <p class="col-md-8 fs-4">Website untuk memanage list karyawan PT Chipi Chapa</p>
            <div class="mt-3">
                <a href="/list-karyawan" type="button" class="btn btn-primary me-2">List Karyawan</a>
                <a href="/dashboard" type="button" class="btn btn-dark">Manage Karyawan</a>
            </div>
        </div>
    </div>
@endsection
