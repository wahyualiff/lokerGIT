@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Lowongan PT {{$lowongan->perusahaan}} </h3>
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
                <p>
                    <br><i class="fa fa-envelope"></i> {{$lowongan->email}}
                    <br><i class="fa fa-phone" style="text-align: right;"></i> {{$lowongan->telepon}}
                </p>
            <hr>
            <div class="row">
                &nbsp;
            @role('pelamar')
            <a href="{{route('pelamar.create')}}" class="btn btn-success float-right" >Apply</a> &nbsp;
            @endrole
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
</div>
@endsection