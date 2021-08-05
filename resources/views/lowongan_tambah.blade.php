@extends('layouts.app')

@section('content')
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Lowongan</h1>
            <form action="{{route('lowongan.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Gambar <input type="file" name="gambar" class="form-control my-2" required>
                    Perusahaan <input type="text" name="perusahaan" class="form-control my-2" required>
                    Email <input type="email" name="email" class="form-control my-2" required>
                    Lowongan <input type="text" name="judul" class="form-control my-2" required>
                    Alamat <input type="text" name="alamat" class="form-control my-2" required>
                    Telepon <input type="number" name="telepon" class="form-control my-2" required>
                    Kota <input type="text" name="kota" class="form-control my-2" required>
                    Kategori <input type="text" name="kategori" class="form-control my-2" required>
                    Deskripsi <input type="text" name="deskripsi" class="form-control my-2" required>
                    Tanggal Buka <input type="date" name="tgl_buka" class="form-control my-2" required>
                    Tanggal Tutup <input type="date" name="tgl_tutup" class="form-control my-2" required>
                </ul>
                <hr>
                <a href="{{route('lowongan.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection