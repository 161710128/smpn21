<aside class="left-aside">
        <!-- sidebar: style can be found in sidebar-->
       <section class="sidebar metismenu">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="javascript:void(0)">
                            <img src="{{ asset ('clean/img/authors/user.jpg')}}" class="rounded-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            
                        <h4><p>Admin</p><h4>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li class="active" id="active">
                        <a href="/home">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Dashboard </span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="{{ route('eskul.index') }}">
                            <i class="menu-icon fa fa-fw fa-cube"></i>
                            <span class="mm-text ">Eskul</span>
                        </a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="{{ route('artikel.index') }}">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Artikel</span>
                            
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('tag.index') }}">
                                    Tag
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('kategoriartikel.index') }}">
                                    Kategori Artikel
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    
                    <li class="menu-dropdown">
                        <a href="{{ route('guru.index') }}">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Guru</span>
                            
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('jabatan.index') }}">
                                     Jabatan
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('staf.index') }}">
                                     Staf
                                </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="menu-dropdown">
                        <a href="{{ route('fasilitas.index') }}">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Fasilitas</span>
                            
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('kategorifasilitas.index') }}">
                                     Kategori Fasilitas
                                </a>
                            </li>
                            </ul>

                    <li class="menu-dropdown">
                        <a href="{{ route('galeri.index') }}">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Galeri</span>
                            
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('kategorigaleri.index') }}">
                                     Kategori Galeri
                                </a>
                            </li>
                            </ul>
                    
                    
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>