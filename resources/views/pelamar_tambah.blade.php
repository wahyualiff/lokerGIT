@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Data Pelamar</h1>
            <form action="{{route('pelamar.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="name" required>
                    Alamat <input type="text" name="alamat" required>
                    Kota <input type="text" name="kota" required>
                    <div class="form-group">
                        <label>Jenis Kelamin </label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    Tempat Lahir <input type="text" name="tempat_lahir" required>
                    Tanggal Lahir <input type="date" name="tgl_lahir" required>
                    Status <input type="text" name="status" required>
                    Email <input type="text" name="email" required>
                    Telepon <input type="number" name="telepon" required>
                    Pendidikan Terakhir <input type="text" name="pendidikan">
                    Tempat Pendidikan <input type="text" name="tempat_pendidikan">
                    Tempat Kerja Terakhir <input type="text" name="tempat_kerja_terakhir">
                    Pekerjaan Terakhir <input type="text" name="pekerjaan_bekerja_terakhir">
                </ul>
                <hr>
                <a href="{{route('pelamar.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection