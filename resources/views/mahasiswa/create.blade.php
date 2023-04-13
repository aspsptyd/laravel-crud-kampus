@extends('layouts.template')

@section('content')

    <!-- START FORM -->
    <form action='{{ url('mahasiswa') }}' method='post'>
    @csrf
    <div class="my-0 p-5 bg-body rounded shadow-sm">
        <div class="pb-1">
            <h2>Tambah Data Mahasiswa</h2>
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
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <a href="{{ url('mahasiswa') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i></a>
                <button type="submit" class="btn btn-primary" name="submit">Simpan Data</button>
            </div>
        </div>
    </div>
    </form>
    <!-- AKHIR FORM -->
@endsection