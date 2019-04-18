

@extends('layouts.frontend')
@section('content')

<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Single Artikel</h1>
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
            <img src="{{ asset('/assets/img/gambar/' .$artikels->gambar)}}" itemprop="thumbnail" alt="Free Bootstrap Template by ProBootstrap.com"
             style="height:auto; max-width:100%; ">
          </div>
        </div>
        <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
          <h2>{{$artikels->judul}}</h2>
          
         
          <p>{!!($artikels->deskripsi)!!}</p>
          <!-- <p><a href="#" class="btn btn-primary">Enroll with this course now</a> <span class="enrolled-count">2,928 students enrolled</span></p> -->
        </div>
      </div>
    </div>

  </div>

  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://smp21.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            



</div>
</section>
      
 @endsection