@extends('layouts.app')

@section('content')
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Data User</h1>
            <form action="{{route('user.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="name" class="form-control my-2" required>
                    <div class="form-group my-2">
                        <label>Sebagai </label>
                        <select name="role" class="form-control my-2">
                            <option value="Pelamar">Pelamar</option>
                            <option value="Perusahaan">Perusahaan</option>
                        </select>
                    </div>
                    Alamat <input type="text" name="alamat" class="form-control my-2"  required>
                    Kota <input type="text" name="kota" class="form-control my-2"  required>
                    <div class="form-group my-2">
                        <label>Jenis Kelamin </label>
                        <select name="jenis_kelamin" class="form-control my-2">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    Tempat Lahir <input type="text" name="tempat_lahir" class="form-control my-2"  required>
                    Tanggal Lahir <input type="date" name="tgl_lahir" class="form-control my-2"  required>
                    <div class="form-group my-2">
                        <label>Status </label>
                        <select name="status" class="form-control my-2" >
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Duda/Janda">Duda/Janda</option>
                        </select>
                    </div>
                    Email <input type="email" name="email" class="form-control my-2"  required>
                    Password <input type="password" name="password" class="form-control my-2"  required>
                    Telepon <input type="number" name="telepon" class="form-control my-2"  required>
                    <div class="form-group my-2">
                    <label>Pendidikan </label>
                        <select name="pendidikan" class="form-control my-2">
                            <option value="SD">SD</option>
                            <option value="SMP SEDERAJAT">SMP SEDERAJAT</option>
                            <option value="SMA SEDERAJAT">SMA SEDERAJAT</option>
                            <option value="Diploma">SD</option>
                            <option value="S1">SD</option>
                            <option value="S2">SD</option>
                        </select>
                    </div>
                    Tempat Pendidikan <input type="text" name="tempat_pendidikan" class="form-control my-2" >
                    Tempat Kerja Terakhir <input type="text" name="tempat_kerja" class="form-control my-2" >
                    Pekerjaan Terakhir <input type="text" name="pekerjaan_terakhir" class="form-control my-2" >
                </ul>
                <hr>
                <a href="{{route('user.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection