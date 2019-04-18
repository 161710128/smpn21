<div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Gg. Lumbung 2, Babakan Ciparay, Kota Bandung, Jawa Barat 40233</span>
              <span><i class="icon-phone2"></i>+62-22-5402000 </span>
              <span><i class="icon-mail"></i>smpn21bdg@yahoo.co.id</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="https://twitter.com/search?f=homes&vertical=default&q=SMP%20Negeri%2021%20Bandung&src=typd&lang=en"><i class="icon-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/smpn21bandung/"><i class="icon-facebook2"></i></a></li>
                <li><a href="https://www.instagram.com/smpnegeri21bdg/"><i class="icon-instagram2"></i></a></li>
                <!-- <li><a href="#"><i class="icon-youtube"></i></a></li> -->
                <!-- <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.html" title="ProBootstrap"><img src="{{asset('endlight/img/log.jpg')}}" style="height:70px; width: 90px;"></a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="{{route('beranda')}}">Home</a></li>
              <li><a href="{{route('eskul')}}">Extracurriculer</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Curriculum</a>
              <ul class="dropdown-menu">
                  <li><a href="{{route('kurikulum')}}">All</a></li>
                  <li><a href="{{route('gurus')}}">Teachers</a></li>
                  <li><a href="{{route('stafs')}}">Stafs</a></li>
                </ul>
              </li>
              <li><a href="{{route('fasilitas')}}">Facillities</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('about')}}">About Us</a></li>
                  <!-- <li><a href="courses.html">Courses</a></li> -->
                  <li><a href="{{route('artikel')}}">Artikel Single</a></li>
                  <li><a href="{{route('galeri')}}">Gallery</a></li>
                  <!-- <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                    </ul>
                  </li> -->
                  <!-- <li><a href="news.html">News</a></li> -->
                </ul>
              </li>
              <!-- <li><a href="contact.html">Contact</a></li> -->
            </ul>
          </div>
        </div>
      </nav>