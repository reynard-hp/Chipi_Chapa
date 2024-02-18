@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Tambahkan Karyawan</h1>
        <div class="mt-3">
            <form action="/store-karyawan" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Umur Karyawan</label>
                    <input type="number" class="form-control @error('age') is-invalid @enderror" id="age"
                        name="age" value="{{ old('age') }}">
                    @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat Karyawan</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="3">{{ old('address') }}</textarea>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="telp_num" class="form-label">Nomor Telepon Karyawan</label>
                    <input type="text" class="form-control @error('telp_num') is-invalid @enderror" name="telp_num"
                        id="telp_num" value="{{ old('telp_num') }}">
                    @error('telp_num')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Foto Karyawan</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
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
