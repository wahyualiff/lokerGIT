@extends('layouts.app')

@section('content')
<main>
<div class="container marketing">
    <div class="card">
        <div class="card-header">
            <h3>User</h3>
        </div>
        <div class="card-body">
            <a href="{{route('user.create')}}">[+]Tambah users</a>
            <table class="table table-bordered ">
                <tr>
                    <th>Nama</th>
                    <th>Hak Akses</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                @foreach($users as $us)
                <tr>
                    <td>{{$us->name}}</td>
                    <td>{{$us->role}}</td>
                    <td>{{$us->email}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('user.show', $us->id)}}" class="btn btn-primary m-1">Lihat</a>
                            <a href="{{route('user.edit', $us->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('user.destroy', $us->id)}}" method="POST">
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