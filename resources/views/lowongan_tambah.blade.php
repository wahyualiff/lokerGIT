@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Lowongan</h1>
            <form action="{{route('lowongan.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Gambar <input type="file" name="gambar" required>
                    Perusahaan <input type="text" name="perusahaan" required>
                    Email <input type="email" name="email" required>
                    Lowongan <input type="text" name="judul" required>
                    Alamat <input type="text" name="alamat" required>
                    Telepon <input type="number" name="telepon" required>
                    Kota <input type="text" name="kota" required>
                    Kategori <input type="text" name="kategori" required>
                    Deskripsi <input type="text" name="deskripsi" required>
                    Tanggal Buka <input type="date" name="tgl_buka" required>
                    Tanggal Tutup <input type="date" name="tgl_tutup" required>
                </ul>
                <hr>
                <a href="{{route('lowongan.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection