@extends('layouts.frontend')
@section('content')  


<section class="probootstrap-section probootstrap-section-colored" style="background-image: url(endlight/img/fasilitas.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate"> 
              <h2 class="h3 stunning-header-title">Kepala Sekolah SMPN 21 BANDUNG</h2>
              <h2 class="h1 stunning-header-title">Nita Hidawati, S.Pd, M.M.Pd</h2>
            </div>
          </div>
        </div>
      </section>


      <section class="probootstrap-section">
      <div class="container">
        <div class="row">
        <center><h4> Staf</h4></center>
        @foreach($stafs as $data)
          <div class="col-md-3 col-sm-6">
            <div class="probootstrap-teacher text-center probootstrap-animate">
              <figure class="media">
              <img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="Free Bootstrap Template by ProBootstrap.com" style="height: 100px; width: 100px; margin-top: 7px;" class="img-responsive"> 
              </figure>
              <div class="text">
                <h3>{{ $data->nama_staf }}</h3>
                <p>{{ $data->Jabatan->nama_jabatan }}</p>

                <ul class="probootstrap-footer-social">
                  <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                  <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                  <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                  <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                </ul>
                </div> 
              </div>
            </div>
            @endforeach
          </div>

          


      </div>
    </section>
    <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
           
          </div>
        </div>
      </section>
    @endsection