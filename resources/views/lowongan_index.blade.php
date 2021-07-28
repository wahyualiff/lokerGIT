@extends('layouts.app')

@section('content')
<main>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Lowongan</h3>
        </div>
        <div class="card-body">
            <a href="{{route('lowongan.create')}}">[+]Tambah Lowongan</a>
            <table class="table table-bordered ">
                <tr>
                    <th>Gambar</th>
                    <th>Perusahaan</th>
                    <th>Email</th>
                    <th>Lowongan</th>
                    <th>Alamat</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Buka</th>
                    <th>Tanggal Tutup</th>
                    <th>Aksi</th>
                </tr>
                @foreach($lowongan as $low)
                <tr>
                    <td>
                        <img src="{{ Storage::url('public/').$low->gambar }}" style="width: 150px">
                    </td>
                    <td>{{$low->perusahaan}}</td>
                    <td>{{$low->email}}</td>
                    <td>{{$low->judul}}</td>
                    <td>{{$low->alamat}}</td>
                    <td>{{$low->deskripsi}}</td>
                    <td>{{$low->tgl_buka}}</td>
                    <td>{{$low->tgl_tutup}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('lowongan.show', $low->id)}}" class="btn btn-primary m-1">Lihat</a>
                            <a href="{{route('lowongan.edit', $low->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('lowongan.destroy', $low->id)}}" method="POST">
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