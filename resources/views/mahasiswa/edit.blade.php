@extends('layouts.template')

@section('content')

    <!-- START FORM -->
    <form action='{{ url('mahasiswa/'.$data->nim) }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-0 p-5 bg-body rounded shadow-sm">
        <div class="pb-1">
            <h2>Kampus Kami | <label style="color:rgb(113, 113, 113);">Modifikasi Data Mahasiswa</label></h2>
            <p>Form untuk memodifikasi data Mahasiswa, Mohon isi dengan benar</p>
        </div>
    
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $data->nim }}" name='nama' id="nama" disabled>
                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $data->nama }}" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $data->jurusan }}" name='jurusan' id="jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <a href="{{ url('mahasiswa') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i></a>
                <button type="submit" class="btn btn-primary" name="submit">Simpan Perubahan</button>
            </div>
        </div>
    </div>
    </form>
    <!-- AKHIR FORM -->
@endsection