@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Lowongan Perusahaan {{$lowongan->perusahaan}} </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col text-center"><img src="{{ Storage::url('public/').$lowongan->gambar }}" style="width: 300px" alt=""></h4>
            </div>
            <div class="row">
                <h4 class="col"><center>{{$lowongan->judul}}</center> </h4>
            </div>
            <div class="row">
                <p class="col" style="text-align: justify;">{{$lowongan->deskripsi}} </p>
            </div>
            <hr>
            @role('admin')
            <a href="{{route('lowongan.index')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
            @role('perusahaan')
            <a href="{{route('lowongan.index')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
            @role('pelamar')
            <a href="{{route('beranda')}}" class="btn btn-primary float-right" >Kembali</a>
            @endrole
        </div>
    </div>
</div>
@endsection