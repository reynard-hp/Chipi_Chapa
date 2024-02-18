@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Edit Karyawan</h1>
        <div class="mt-3">
            <form action="/update-karyawan/{{ $employee->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" value="{{ old('name', $employee->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Umur Karyawan</label>
                    <input type="number" class="form-control @error('age') is-invalid @enderror" id="age"
                        name="age" value="{{ old('age', $employee->age) }}">
                    @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat Karyawan</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="3">{{ old('address', $employee->address) }}</textarea>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="telp_num" class="form-label">Nomor Telepon Karyawan</label>
                    <input type="text" class="form-control @error('telp_num') is-invalid @enderror" name="telp_num"
                        id="telp_num" value="{{ old('telp_num', $employee->telp_num) }}">
                    @error('telp_num')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Foto Karyawan</label>
                    @if ($employee->photo)
                        <img src={{ asset('storage/images/' . $employee->photo) }}
                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo"
                        name="photo" onchange="previewImage()">
                    @error('photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#photo');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
