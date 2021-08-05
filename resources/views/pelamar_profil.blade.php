@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Profil</h2>
        </div>
        <div class="card-body">
            <form action="{{ Auth::user()->id }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" class="form-control my-2" readonly value="{{ Auth::user()->name }}">
                    Email <input type="text" name="email" class="form-control my-2" readonly value="{{ Auth::user()->email }}">
                    Alamat <input type="text" name="alamat" class="form-control my-2" required value="{{ Auth::user()->alamat }}">
                    Kota 
                    <select name="kota" id="" class="form-control my-2">
                        <option value="Jakarta"     {{ Auth::user()->kota == "Jakarta" ? "selected" : ""}}>Jakarta</option>
                        <option value="Bogor"       {{ Auth::user()->kota == "Bogor" ? "selected" : ""}}>Bogor</option>
                        <option value="Depok"       {{ Auth::user()->kota == "Depok" ? "selected" : ""}}>Depok</option>
                        <option value="Tangerang"   {{ Auth::user()->kota == "Tangerang" ? "selected" : ""}}>Tangerang</option>
                        <option value="Bekasi"      {{ Auth::user()->kota == "Bekasi" ? "selected" : ""}}>Bekasi</option>
                    </select>
                    @role('pelamar')
                    Jenis Kelamin
                    <select name="jenis_kelamin" id="" class="form-control my-2">
                        <option value="Laki-laki" {{ Auth::user()->jenis_kelamin == "Laki-laki" ? "selected" : ""}}>Laki-laki</option>
                        <option value="Perempuan" {{ Auth::user()->jenis_kelamin == "Perempuan" ? "selected" : ""}}>Perempuan</option>
                    </select>
                    Tempat Lahir <input type="text" name="tempat_lahir" class="form-control my-2" required value="{{ Auth::user()->tempat_lahir }}">
                    Tanggal Lahir <input type="date" name="tgl_lahir" class="form-control my-2" required value="{{ Auth::user()->tgl_lahir }}">
                    Status 
                    <select name="status" id="" class="form-control my-2">
                        <option value="Belum Menikah" {{ Auth::user()->status == "Belum Menikah" ? "selected" : ""}}>Belum Menikah</option>
                        <option value="Menikah" {{ Auth::user()->status == "Menikah" ? "selected" : ""}}>Menikah</option>
                        <option value="Duda/Janda" {{ Auth::user()->status == "Duda/Janda" ? "selected" : ""}}>Duda/Janda</option>
                    </select>
                    @endrole
                    Telepon <input type="number" name="telepon" class="form-control my-2" required value="{{ Auth::user()->telepon }}">
                    @role('pelamar')
                    Pendidikan Terakhir
                    <select name="pendidikan" id="" class="form-control my-2">
                        <option value="SD" {{ Auth::user()->pendidikan == "SD" ? "selected" : ""}}>SD</option>
                        <option value="SMP Sederajat" {{ Auth::user()->pendidikan == "SMP Sederajat" ? "selected" : ""}}>SMP Sederajat</option>
                        <option value="SMA Sederajat" {{ Auth::user()->pendidikan == "SMA Sederajat" ? "selected" : ""}}>SMA Sederajat</option>
                        <option value="Diploma" {{ Auth::user()->pendidikan == "Diploma" ? "selected" : ""}}>Diploma</option>
                        <option value="S1" {{ Auth::user()->pendidikan == "S1" ? "selected" : ""}}>S1</option>
                        <option value="S2" {{ Auth::user()->pendidikan == "S2" ? "selected" : ""}}>S2</option>
                    </select>
                    Tempat Pendidikan Terakhir <input type="text" name="tempat_pendidikan" class="form-control my-2" required value="{{ Auth::user()->tempat_pendidikan }}">
                    Tempat Bekerja Terakhir <input type="text" name="tempat_kerja" class="form-control my-2" required value="{{ Auth::user()->tempat_kerja }}">
                    Posisi Pekerjaan Terakhir <input type="text" name="pekerjaan_terakhir" class="form-control my-2" required value="{{ Auth::user()->pekerjaan_terakhir }}">
                    @endrole
                </ul>
                <hr>
                <center><a href="/beranda" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success"></center>
            </form>
        </div>
    </div>
</div>
@endsection