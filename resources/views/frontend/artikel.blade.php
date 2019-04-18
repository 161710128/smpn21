@extends('layouts.frontend')
@section('content')

<section class="probootstrap-section probootstrap-section-colored" style="background-image: url(endlight/img/fasilitas.jpg)" class="img-responsive">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>School Events</h1>
            </div>
          </div>
        </div>
      </section>
      
      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                  <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                    <h3>More Artikel</h3>
                    <ul class="probootstrap-side-menu">
                    <li data-filter="*"><a href="/artikel">All</a></li>
                    @foreach($kategoriartikels as $data)
                      <li data-filter=".painting{{$data->id}}"><a href="{{url('/artikel',$data->id)}}">{{$data->nama_artikel}}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      
      <section class="probootstrap-section">
        <div class="container">
        @foreach($artikels as $data)
          <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-8 col-xxs-16 probootstrap-animate painting{{$data->kategoriartikel->id}}">
              <a href="/single/{{$data->slug}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="Free Bootstrap Template by ProBootstrap.com"
                style="height: 250px; width: 250px; " class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>{{$data->judul}}</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>{{$data->created_at}}</span>
                  <span class="probootstrap-location">{!! str_limit($data->deskripsi,50) !!}</span>
                </div>
              </a>
			      </div>
          </div>
          @endforeach
          {{$artikels->links()}}
        </div>
      </section>
      
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <!-- <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div> -->
          </div>
        </div>
      </section>
        @endsection