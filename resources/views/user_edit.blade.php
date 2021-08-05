@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit data users</h1>
        </div>
        <div class="card-body">
            <form action="{{route('user.update', $users->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" class="form-control my-2" required value="{{$users->name}}">
                    Akses 
                    <select name="role" class="form-control my-2" id="">
                        <option value="Pelamar" {{($users->role == "Pelamar") ? "selected" : ""}}>Pelamar</option>
                        <option value="Perusahaan" {{($users->role == "Perusahaan") ? "selected" : ""}}>Perusahaan</option>
                    </select>
                    Alamat <input type="text" name="alamat" class="form-control my-2" value="{{$users->alamat}}" >
                    Kota <input type="text" name="kota" class="form-control my-2" value="{{$users->kota}}" >
                    Jenis Kelamin
                    <select name="jenis_kelamin" class="form-control my-2" id="">
                        <option value="Laki-laki" {{($users->jenis_kelamin == "Laki-laki") ? "selected" : ""}}>Laki-laki</option>
                        <option value="Perempuan" {{($users->jenis_kelamin == "Perempuan") ? "selected" : ""}}>Perempuan</option>
                    </select>
                    Tempat Lahir <input type="text" name="tempat_lahir" class="form-control my-2" value="{{$users->tempat_lahir}}" >
                    Tanggal Lahir <input type="date" name="tgl_lahir" class="form-control my-2" value="{{$users->tgl_lahir}}" >
                    Status 
                    <select name="status" class="form-control my-2" id="">
                        <option value="Belum Menikah" {{($users->status == "Belum Menikah") ? "selected" : ""}}>Belum Menikah</option>
                        <option value="Menikah" {{($users->status == "Menikah") ? "selected" : ""}}>Menikah</option>
                        <option value="Duda/Janda" {{($users->status == "Duda/Janda") ? "selected" : ""}}>Duda/Janda</option>
                    </select>
                    Email <input type="email" name="email" class="form-control my-2" required value="{{$users->email}}">
                    Password <input type="password" name="password" class="form-control my-2" required value="{{$users->password}}">
                    Telepon <input type="number" name="telepon" class="form-control my-2" required value="{{$users->telepon}}">
                    Pendidikan Terakhir 
                    <select name="pendidikan" class="form-control my-2" id="">
                        <option value="SD" {{($users->status == "SD") ? "selected" : ""}}>SD</option>
                        <option value="SMP Sederajat" {{($users->status == "SMP Sederajat") ? "selected" : ""}}>SMP Sederajat</option>
                        <option value="SMA Sederajat"  {{($users->status == "SMA Sederajat") ? "selected" : ""}}>SMA Sederajat</option>
                        <option value="Diploma"  {{($users->status == "Diploma") ? "selected" : ""}}>Diploma</option>
                        <option value="S1" {{($users->status == "S1") ? "selected" : ""}}>S1</option>
                        <option value="S2" {{($users->status == "S2") ? "selected" : ""}}>S2</option>
                    </select>
                    Tempat Pendidikan <input type="text" name="tempat_pendidikan" class="form-control my-2" value="{{$users->tempat_pendidikan}}">
                    Tempat Kerja Terakhir <input type="text" name="tempat_kerja" class="form-control my-2" value="{{$users->tempat_kerja}}">
                    Pekerjaan Terakhir <input type="text" name="pekerjaan_terakhir" class="form-control my-2" value="{{$users->pekerjaan_terakhir}}">
                </ul>
                <hr>
                <a href="{{route('user.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection