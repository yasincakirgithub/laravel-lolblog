<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-blog fa-2x"></i></div>
            <h1 class="text-center">LolBlog</h1>
            @if (!Auth::guest())
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fas fa-user"></i>
                        <span class="text-center text-light">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="col-12 text-center">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="form-control" type="submit">
                                <span class="text-center">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-12 text-center">
                        <form id="login-form" action="{{ route('login') }}">
                            <button class="form-control" type="submit">
                                <span class="text-center">Login</span>
                            </button>
                        </form>
                    </div>
                </div>



            @endauth
    </div>




    <nav class="tm-nav" id="tm-nav">
        <ul>
            <li class="tm-nav-item {{ Request::routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="tm-nav-link">
                    <i class="fas fa-home"></i>
                    Blog Home
                </a>
            </li>
            <li class="tm-nav-item {{ Request::routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="tm-nav-link">
                    <i class="fas fa-users"></i>
                    About LolBlog
                </a>
            </li>
            <li class="tm-nav-item {{ Request::routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="tm-nav-link">
                    <i class="far fa-comments"></i>
                    Contact Us
                </a>
            </li>
        </ul>
    </nav>
    <div class="tm-mb-65">
        <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
            <i class="fab fa-facebook tm-social-icon"></i>
        </a>
        <a href="https://twitter.com" class="tm-social-link">
            <i class="fab fa-twitter tm-social-icon"></i>
        </a>
        <a href="https://instagram.com" class="tm-social-link">
            <i class="fab fa-instagram tm-social-icon"></i>
        </a>
        <a href="https://linkedin.com" class="tm-social-link">
            <i class="fab fa-linkedin tm-social-icon"></i>
        </a>
    </div>

</div>
</header>
