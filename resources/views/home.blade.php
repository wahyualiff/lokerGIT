@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (Auth::user()->role == 'perusahaan')
                    <div class="panel-body">
                        Halaman Perusahaan
                    </div>
                    @else
                    <div class="panel-body">
                        Halaman Pelamar
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
