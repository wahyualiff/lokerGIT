@extends('layouts.app')

@section('content')
<main>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Pelamar</h3>
        </div>
        <div class="card-body">
            @role('admin')
            <a href="{{route('pelamar.create')}}">[+]Tambah Data Pelamar</a>
            @endrole
            <table class="table table-bordered ">
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    {{--  <th>Status Pernikahan</th>  --}}
                    <th>Email</th>
                    <th>Telepon</th>
                    {{--  <th>Pendidikan Terakhir</th>
                    <th>Tempat Pendidikan</th>
                    <th>Tempat Kerja Terakhir</th>
                    <th>Pekerjaan Terakhir</th>  --}}
                    <th>Aksi</th>
                </tr>
                @foreach($pelamar as $pmr)
                <tr>
                    <td>{{$pmr->name}}</td>
                    <td>{{$pmr->alamat}}</td>
                    <td>{{$pmr->kota}}</td>
                    <td>{{$pmr->jenis_kelamin}}</td>
                    <td>{{$pmr->tempat_lahir}}</td>
                    <td>{{$pmr->tgl_lahir}}</td>
                    {{--  <td>{{$pmr->status}}</td>  --}}
                    <td>{{$pmr->email}}</td>
                    <td>{{$pmr->telepon}}</td>
                    {{--  <td>{{$pmr->pendidikan}}</td>
                    <td>{{$pmr->tempat_pendidikan}}</td>
                    <td>{{$pmr->tempat_kerja_terakhir}}</td>
                    <td>{{$pmr->pekerjaan_bekerja_terakhir}}</td>  --}}
                    <td>
                        <ul class="nav">
                            <a href="{{route('pelamar.show', $pmr->id)}}" class="btn btn-primary m-1">Lihat</a>
                            <a href="{{route('pelamar.edit', $pmr->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('pelamar.destroy', $pmr->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Hapus</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</main>
@endsection