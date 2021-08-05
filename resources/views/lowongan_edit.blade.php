@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Lowongan</h1>
        </div>
        <div class="card-body">
            <form action="{{route('lowongan.update', $lowongan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Gambar <input type="file" name="gambar" class="form-control my-2" required value="{{$lowongan->gambar}}" >
                    Perusahaan <input type="text" name="perusahaan" class="form-control my-2" required value="{{$lowongan->perusahaan}}" readonly>
                    Email <input type="text" name="email" class="form-control my-2" required value="{{$lowongan->email}}" readonly>
                    Judul Lowongan <input type="text" name="judul" class="form-control my-2" required value="{{$lowongan->judul}}">
                    Alamat <input type="text" name="alamat" class="form-control my-2" required value="{{$lowongan->alamat}}">
                    Telepon <input type="number" name="telepon" class="form-control my-2" required value="{{$lowongan->telepon}}">
                    Kota <input type="text" name="kota" class="form-control my-2" required value="{{$lowongan->kota}}">
                    Kategori <input type="text" name="kategori" class="form-control my-2" required value="{{$lowongan->kategori}}">
                    Deskripsi <textarea name="deskripsi" class="form-control my-2" required value="{{$lowongan->deskripsi}}"></textarea>
                    Tanggal Buka <input type="date" name="tgl_buka" class="form-control my-2" required value="{{$lowongan->tgl_buka}}">
                    Tanggal Tutup <input type="date" name="tgl_tutup" class="form-control my-2" required value="{{$lowongan->tgl_tutup}}">
                </ul>
                <hr>
                <a href="{{route('lowongan.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
    </div>
</div>
@endsection