@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Users</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col-5">Nama</h4>
                <h4 class="col">: {{$users->name}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Akses sebagai</h4>
                <h4 class="col">: {{$users->role}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Alamat</h4>
                <h4 class="col">: {{$users->alamat}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Kota</h4>
                <h4 class="col">: {{$users->kota}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Jenis Kelamin</h4>
                <h4 class="col">: {{$users->jenis_kelamin}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tempat Lahir</h4>
                <h4 class="col">: {{$users->tempat_lahir}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tanggal Lahir</h4>
                <h4 class="col">: {{$users->tgl_lahir}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Status Pernikahan</h4>
                <h4 class="col">: {{$users->status}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Email</h4>
                <h4 class="col">: {{$users->email}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Telepon</h4>
                <h4 class="col">: {{$users->telepon}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Pendidikan Terakhir</h4>
                <h4 class="col">: {{$users->pendidikan}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tempat Pendidikan</h4>
                <h4 class="col">: {{$users->tempat_pendidikan}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tempat Kerja Terakhir</h4>
                <h4 class="col">: {{$users->tempat_kerja}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Pekerjaan Terakhir</h4>
                <h4 class="col">: {{$users->pekerjaan_terakhir}} </h4>
            </div>
            <hr>
            <a href="{{route('user.index')}}" class="btn btn-primary float-right">Kembali</a>
        </div>
    </div>
</div>
@endsection