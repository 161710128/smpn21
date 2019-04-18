

    @extends('layouts.frontend')
    @section('content')

<section class="probootstrap-section probootstrap-section-colored" style="background-image: url(endlight/img/fasilitas.jpg)" class="img-responsive">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Our Extracurricular</h1>
            </div>
          </div>
        </div>
      </section>

<!-- <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          @foreach($eskuls as $data)
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                  <img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"> 
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>{{$data->judul}}</h3>
                  <p>{!!($data->deskripsi) !!}</p>
                 
                </div>
              </div>

            </div>
            @endforeach
          </div>
        </div>
</section> -->

<section class="probootstrap-section">
        <div class="container">
          <div class="row">
              @foreach($eskuls as $data)
            <div class="col-md-12">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" alt="Free Bootstrap Template by ProBootstrap.com"  class="img-responsive" />
                  </div>
                </div>
                <div class="text">
                  <!-- <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span> -->
                  <h3>{{$data->judul}}</h3>
                  <p>{!!($data->deskripsi) !!}</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p> -->
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
