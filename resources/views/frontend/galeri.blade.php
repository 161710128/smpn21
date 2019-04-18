

@extends('layouts.frontend')
@section('content')

<section class="probootstrap-section probootstrap-section-colored" style="background-image: url(endlight/img/fasilitas.jpg)" class="img-responsive">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
              <h1 class="mb0">School Gallery</h1>
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
                    <h3>More Courses</h3>
                    <ul class="probootstrap-side-menu">
                    <li data-filter="*"><a href="/galeri">All</a></li>
                    @foreach($kategorigaleris as $data)
                      <li data-filter=".painting{{$data->id}}"><a href="{{url('/galeri',$data->id)}}">{{$data->nama_galeri}}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  
	  <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
        <div class="row">
          <div class="col-md-13">
            <div class="portfolio-feed three-cols">
              <div class="grid-sizer"></div>
              <div class="gutter-sizer"></div>
              <div class="probootstrap-gallery">
              @foreach($galeris as $data)
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                  <a href="{{ asset('/assets/img/gambar/' .$data->gambar)}}" itemprop="contentUrl" data-size="1000x632">
					        <img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com"
					        style="height: 250px; width: 250px; margin-top: 7px;" class="img-responsive" />
                  </a>
                  <figcaption itemprop="caption description">{!! str_limit($data->deskripsi,50) !!}</figcaption>
                </figure>
                @endforeach

              </div>
            </div>    
		  </div>
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

	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">

          <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
          </div>

          <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                  <div class="pswp__counter"></div>
                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                  <button class="pswp__button pswp__button--share" title="Share"></button>
                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                  <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                  <div class="pswp__share-tooltip"></div> 
              </div>
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>
              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>
              <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
              </div>
          </div>
      </div>
    </div>
	  
















