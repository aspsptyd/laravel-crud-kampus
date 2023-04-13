@extends('layouts.template')

@section('content')

    <!-- START FORM -->
    <form action='{{ url('mahasiswa') }}' method='post' enctype="multipart/form-data">
    @csrf
    <div class="my-0 p-5 bg-body rounded shadow-sm">
        <div class="pb-1">
            <h2>Kampus Kami | <label style="color:rgb(113, 113, 113);">Tambah Data Mahasiswa</label></h2>
            <p>Form untuk menambahkan data Mahasiswa, Mohon isi lengkap</p>
        </div>
    
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input class="form-control" value="{{ Session::get('nim') }}" name='nim' id="nim" placeholder="Ex: 311310300">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ Session::get('nama') }}" name='nama' id="nama" placeholder="Ex: Winda Ayunda">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ Session::get('jurusan') }}" name='jurusan' id="jurusan" placeholder="Ex: Teknik Informatika">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ Session::get('jk') }}" name='jk' id="jk" placeholder="Ex: Laki-laki/Perempuan">
            </div>
        </div>
        <div class="row">
            <label for="fotomhs" class="col-sm-2 col-form-label">Foto Mahasiswa</label>
            <div class="col-sm-10">
                <input type="file" class="form-control @error('fotomhs') is-invalid @enderror" value="{{ Session::get('fotomhs') }}" id="fotomhs" name="fotomhs"
                accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                @error('fotomhs')
                    <span class="invalid-feedback" role="alert">
                        <strong>Error load image</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <div class="mt-3"><img style="border-radius: 50%;" src="{{ asset('img/default-profile.png') }}" id="output" width="200"></div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <a href="{{ url('mahasiswa') }}" class="btn btn-outline-success"><i class="bi bi-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-primary" name="submit">Simpan Data</button>
            </div>
        </div>
    </div>
    </form>
    <!-- AKHIR FORM -->
@endsection