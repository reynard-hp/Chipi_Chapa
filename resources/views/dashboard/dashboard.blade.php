@extends('layouts.main')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">
        @yield('dashboard-content')
        <h1>Dashboard</h1>

        <div class="table-responsive col-lg-8 mt-3">
            <a href="/add-karyawan" type="button" class="btn btn-primary">
                Add Karyawan
            </a>

            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Telephone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->age }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->telp_num }}</td>
                            <td>
                                <a href="/dashboard/karyawan/{{ $employee->id }}" class="badge bg-primary">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="/edit-karyawan/{{ $employee->id }}" class="badge bg-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="/delete-karyawan/{{ $employee->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Are you sure want to delete [{{ $employee->name }}] ?')">
                                        <i class="bi bi-x-square"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
