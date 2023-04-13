@extends('layouts.template')

@section('content')
    <!-- START DATA -->
    <div class="my-0 p-5 bg-body rounded shadow-sm">
        <div class="pb-1">
            <h2>Data Mahasiswa</h2>
            <p>Kelola data mahasiswa</p>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-4">
            <a href='{{ url('mahasiswa/create') }}' class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i>&nbsp; Tambah Data Mahasiswa</a>
        </div>

        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-2" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan katakunci Ex: 300310211 or Dinda or Teknik Informatika" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="text-align: center;">#</th>
                    <th>NIM</th>
                    <th>Foto</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Waktu Daftar</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem() ?>
                    @if($data->count() > 0)
                    @foreach ($data as $item)
                    <tr>
                        <td style="text-align: center;">{{ $i }}</td>
                        <td>{{ $item->nim }}</td>
                        <td><img src="{{ asset('img/nurse.png') }}" style="max-width: 25px; max-height: 25px"></td>
                        <td><a style="text-decoration: none" href="{{ url('mahasiswa/'.$item->nim) }}">{{ $item->nama }}</a></td>
                        <td>Laki-laki</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td style="text-align: center;">
                            <a href='{{ url('mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')" class="d-inline" action="{{ url('mahasiswa/'.$item->nim) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" name="submit">Delete</button>
                            </form>
                            {{-- <a href='{{ url('mahasiswa/'.$item->nim) }}' class="btn btn-primary btn-sm">Detail</a> --}}
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8" style="text-align: center;">Data tidak ditemukan</td>
                    </tr>
                    @endif
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
    <!-- AKHIR DATA -->
@endsection