@extends('layouts.app')

@section('content')
<body>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('storage/B1.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('storage/B2.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('storage/B3.png')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <hr>
    <main>
        <div class="row judul">
            <div class="col-md-12 text-center">
                <h1>Lowongan</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($lowongan as $low)
                <div class="col-lg-4 d-flex align-items-stretch col-md-offset-2">
                    <div class="card" style="width: 25rem;">
                    <img src="{{ Storage::url('public/').$low->gambar }}" alt="" style="height: 250px; object-fit-contain; width:100%">
                        <div class="card-body">
                            <h4><a href="{{route('lihat.show', $low->id)}}" style="line-height: 16px;">{{$low->judul}}</a></h4>
                            <p class="card-text">{{$low->tgl_buka}} s.d. {{$low->tgl_tutup}}</p>
                            <i class="fa fa-map-marker"></i> {{$low->kota}} &nbsp;&nbsp;
                            <i class="fa fa-tags icon-info"></i> {{$low->kategori}} <br/>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{--  <h1><center>Lowongan</center></h1>
        <div class="container marketing">
            <div class="row">
                @foreach($lowongan as $low)
                <div class="col-md-4">
                    <br>
                    <img class="card" src="{{ Storage::url('public/').$low->gambar }}" alt="" style="height: 250px; object-fit:contain; width:100%" >
                    <div class="card-body" style="height: 250px; object-fit:contain; width:100%">
                    <h4><a href="{{route('lowongan.show', $low->id)}}" style="line-height: 16px;">{{$low->judul}}</a></h4>
                    <p class="card-text">{{$low->tgl_buka}} s.d. {{$low->tgl_tutup}}</p>
                    <i class="fa fa-map-marker"></i> {{$low->kota}} &nbsp;&nbsp;
                    <i class="fa fa-tags icon-info"></i> {{$low->kategori}} <br/>
                    </div>
                </div>
                @endforeach
            </div>
        </div>  --}}
        <br><br>
    </main>
</body>
@endsection