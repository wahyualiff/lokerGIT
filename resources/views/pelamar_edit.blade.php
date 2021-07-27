@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Data Pelamar</h1>
        </div>
        <div class="card-body">
            <form action="{{route('pelamar.update', $pelamar->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" required value="{{$pelamar->name}}">
                    Alamat <input type="text" name="alamat" required value="{{$pelamar->alamat}}" >
                    Kota <input type="text" name="kota" required value="{{$pelamar->kota}}" >
                    Jenis Kelamin
                    <select name="jenis_kelamin" id="">
                        <option value="Laki-laki" {{($pelamar->jenis_kelamin == "Laki-laki") ? "selected" : ""}}>Laki-laki</option>
                        <option value="Perempuan" {{($pelamar->jenis_kelamin == "Perempuan") ? "selected" : ""}}>Perempuan</option>
                    </select>
                    Tempat Lahir <input type="text" name="tempat_lahir" required value="{{$pelamar->tempat_lahir}}" >
                    Tanggal Lahir <input type="date" name="tgl_lahir" required value="{{$pelamar->tgl_lahir}}" >
                    Status <input type="text" name="status" required value="{{$pelamar->status}}">
                    Email <input type="text" name="email" required value="{{$pelamar->email}}">
                    Telepon <input type="number" name="telepon" required value="{{$pelamar->telepon}}">
                    Pendidikan Terakhir <input type="text" name="pendidikan" required value="{{$pelamar->pendidikan}}">
                    Tempat Pendidikan <input type="text" name="tempat_pendidikan" required value="{{$pelamar->tempat_pendidikan}}">
                    Tempat Kerja Terakhir <input type="text" name="tempat_kerja_terakhir" required value="{{$pelamar->tempat_kerja_terakhir}}">
                    Pekerjaan Terakhir <input type="text" name="pekerjaan_bekerja_terakhir" required value="{{$pelamar->pekerjaan_bekerja_terakhir}}">
                </ul>
                <hr>
                <a href="{{route('pelamar.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection