@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail Pelamar</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col-5">Nama</h4>
                <h4 class="col">: {{$pelamar->name}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Alamat</h4>
                <h4 class="col">: {{$pelamar->alamat}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Kota</h4>
                <h4 class="col">: {{$pelamar->kota}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Jenis Kelamin</h4>
                <h4 class="col">: {{$pelamar->jenis_kelamin}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tempat Lahir</h4>
                <h4 class="col">: {{$pelamar->tempat_lahir}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tanggal Lahir</h4>
                <h4 class="col">: {{$pelamar->tgl_lahir}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Status Pernikahan</h4>
                <h4 class="col">: {{$pelamar->status}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Email</h4>
                <h4 class="col">: {{$pelamar->email}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Telepon</h4>
                <h4 class="col">: {{$pelamar->telepon}} </h4>
            </div>
            
            <div class="row">
                <h4 class="col-5">Pendidikan Terakhir</h4>
                <h4 class="col">: {{$pelamar->pendidikan}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tempat Pendidikan</h4>
                <h4 class="col">: {{$pelamar->tempat_pendidikan}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Tempat Kerja Terakhir</h4>
                <h4 class="col">: {{$pelamar->tempat_kerja_terakhir}} </h4>
            </div>
            <div class="row">
                <h4 class="col-5">Pekerjaan Terakhir</h4>
                <h4 class="col">: {{$pelamar->pekerjaan_bekerja_terakhir}} </h4>
            </div>
            <hr>
            <a href="{{route('pelamar.index')}}" class="btn btn-primary float-right">Kembali</a>
        </div>
    </div>
</div>
@endsection