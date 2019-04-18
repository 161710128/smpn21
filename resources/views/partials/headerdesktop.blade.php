<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light navbar-static-top" role="navigation">
        <a href="/home" class="logo navbar-brand mr-0">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <h3 style="color:blue">SMPN 21</h3>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        
        <div class="navbar-right ml-auto">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu nav-item dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle padding-user nav-link dropdown-toggle" data-toggle="dropdown" id="userDropdown">
                        <img src="{{ asset ('clean/img/authors/user.jpg')}}" class="rounded-circle img-fluid pull-left" alt="User Image">

                        <div class="riot">
                            <span class="fa fa-sort-down caret"></span>
                        </div>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- User name-->
                        <li class="user-name text-center">
                            <span>Admin</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('beranda') }}"><b>Frontend<b></a>
                        </li>
                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>