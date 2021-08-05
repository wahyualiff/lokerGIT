@extends('layouts.app')

@section('content')
<main>
<div class="container">
    <div class="row">
        @foreach($lowongan as $low)
        <div class="col-lg-4 d-flex align-items-stretch col-md-offset-2">
            <div class="card" style="width: 25rem;">
            <img src="{{ Storage::url('public/').$low->gambar }}" alt="" style="height: 250px; object-fit-contain; width:100%">
                <div class="card-body">
                    <h4><a href="{{route('lowongan.show', $low->id)}}" style="line-height: 16px;">{{$low->judul}}</a></h4>
                    <p class="card-text">{{$low->tgl_buka}} s.d. {{$low->tgl_tutup}}</p>
                    <i class="fa fa-map-marker"></i> {{$low->kota}} &nbsp;&nbsp;
                    <i class="fa fa-tags icon-info"></i> {{$low->kategori}} <br/>
                    <br>
                @role('admin')
                <i class="fa fa-pencil"></i><a href="{{route('lowongan.edit', $low->id)}}"> Edit</a> &nbsp;&nbsp;
                <i class="fa fa-warning"></i><a href="{{route('lowongan.destroy', $low->id)}}"> Delete</a>
                @endrole
                @role('perusahaan')
                <i class="fa fa-pencil"></i><a href="{{route('lowongan.edit', $low->id)}}"> Edit</a> &nbsp;&nbsp;
                <i class="fa fa-warning"></i><a href="{{route('lowongan.destroy', $low->id)}}"> Delete</a>
                @endrole
                </div>
            </div>
        </div>
    @endforeach
</div>
    {{--  <div class="container">
        <div class="row d-flex align-items-stretch">
            @foreach($lowongan as $low)
            <div class="col-md-3">
                <br>
                <img class="card" src="{{ Storage::url('public/').$low->gambar }}" alt="" style="height: 200px; object-fit:contain; width:100%" >
                <div class="card-body" style="height: 250px; object-fit:contain; width:100%">
                <h4><a href="{{route('lowongan.show', $low->id)}}" style="line-height: 16px;">{{$low->judul}}</a></h4>
                <p class="card-text">{{$low->tgl_buka}} s.d. {{$low->tgl_tutup}}</p>
                <i class="fa fa-map-marker"></i> {{$low->kota}} &nbsp;&nbsp;
                <i class="fa fa-tags icon-info"></i> {{$low->kategori}} <br/>
                <br>
                @role('admin')
                <i class="fa fa-pencil"></i><a href="{{route('lowongan.edit', $low->id)}}"> Edit</a> &nbsp;&nbsp;
                <i class="fa fa-warning"></i><a href="{{route('lowongan.destroy', $low->id)}}"> Delete</a>
                @endrole
                @role('perusahaan')
                <i class="fa fa-pencil"></i><a href="{{route('lowongan.edit', $low->id)}}"> Edit</a> &nbsp;&nbsp;
                <i class="fa fa-warning"></i><a href="{{route('lowongan.destroy', $low->id)}}"> Delete</a>
                @endrole
                </div>
            </div>
            @endforeach
        </div>
    </div>  --}}
{{--  <div class="container">
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
</div>  --}}
</main>
@endsection