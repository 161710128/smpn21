@extends('layouts.frontend')
@section('content')
        <section class="probootstrap-section">
        <div class="container">
          
          <div class="col-md-6">
            <p>
              <img src="{{ asset('assets/img/gambar/'.$artikels->gambar) }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
            </p>
          </div>
          <div class="col-md-6 col-md-push-1">
            <h2>{{ $artikels->judul }}</h2>
            <p>{!! $artikels->deskripsi !!}</p>
          </div>
          

        </div>
      </section>
        @endsection