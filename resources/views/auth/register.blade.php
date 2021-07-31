@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{--  <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Akses Sebagai') }}</label>

                            <div class="col-md-6">
                                <select name="role" class="form-control">
                                    <option value="perusahaan">Perusahaan</option>
                                    <option value="pelamar">Pelamar</option>
                                </select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  --}}

                        <div class="form-group row">
                            {{--  <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="alamat" type="hidden" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="kota" type="hidden" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ old('kota') }}" required autocomplete="kota" autofocus>

                                @error('kota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="jenis_kelamin" type="hidden" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required autocomplete="jenis_kelamin" autofocus>

                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="tempat_lahir" type="hidden" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus>

                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="tgl_lahir" type="hidden" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir" autofocus>

                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="status" type="hidden" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="telepon" class="col-md-4 col-form-label text-md-right">{{ __('Telepon') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="telepon" type="hidden" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon" autofocus>

                                @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="pendidikan" class="col-md-4 col-form-label text-md-right">{{ __('Pendidikan') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="pendidikan" type="hidden" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan') }}" required autocomplete="pendidikan" autofocus>

                                @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="tempat_pendidikan" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Pendidikan') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="tempat_pendidikan" type="hidden" class="form-control @error('tempat_pendidikan') is-invalid @enderror" name="tempat_pendidikan" value="{{ old('tempat_pendidikan') }}" required autocomplete="tempat_pendidikan" autofocus>

                                @error('tempat_pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="tempat_kerja" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Kerja') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="tempat_kerja" type="hidden" class="form-control @error('tempat_kerja') is-invalid @enderror" name="tempat_kerja" value="{{ old('tempat_kerja') }}" required autocomplete="tempat_kerja" autofocus>

                                @error('tempat_kerja')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--  <label for="pekerjaan_terakhir" class="col-md-4 col-form-label text-md-right">{{ __('Pendidikan') }}</label>  --}}

                            <div class="col-md-6">
                                <input id="pekerjaan_terakhir" type="hidden" class="form-control @error('pekerjaan_terakhir') is-invalid @enderror" name="pekerjaan_terakhir" value="{{ old('pekerjaan_terakhir') }}" required autocomplete="pekerjaan_terakhir" autofocus>

                                @error('pekerjaan_terakhir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
