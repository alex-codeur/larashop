<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- flickity css -->
    <link rel="stylesheet" href="{{ asset('css/flickity.css') }}">
    @yield('extra-css')

    @yield('extra-meta')

    <!-- fontawesome -->
    <script src="{{ asset('js/all.js') }}"></script>

    @yield('extra-script')

    <title>près de vous</title>
</head>
<body>
    <!-- TOPBAR -->
    <div class="container-fluid py-0 topbar" id="top-icons">
        <div class="row">
            <div class="col-md-2 d-flex justify-content-center align-items-center">
              <a href="{{route('products.index')}}"><span class="logo"><span class="pres">près</span><span class="devous">devous</span></i></span></a>
            </div>
            <div class="col-md-7">
              @include('partials.search')
            </div>
            <div class="col-md-3 d-flex justify-content-between px-4 pt-3">
                <div class="login">
                    {{-- <a href="{{ route('register') }}">S'inscrire /</a>
                    <a href="{{ route('login') }}"> Se connecter</a> --}}

                    @guest
                                <a href="{{ route('login') }}">{{ __('Login') }} /</a>
                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}"> {{ __('Register') }}</a>
                            @endif
                        @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">Mes commandes
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </span>
                        @endguest
                </div>
                <div class="cart-btn pb-2">
                  <span class="nav-icon">
                      <a href="{{ route('cart.index') }}"><i class="fas fa-cart-plus text-dark"></i></a>
                  </span>
                  @if (Cart::count() > 0)
                      <span class="cart-items">{{ Cart::count() }}</span>
                  @endif
              </div>
            </div>
        </div>
    </div>
    <!-- END OF TOPBAR -->

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg px-2" id="navbar">
        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
                <span class="navbar-icon">
                    <i class="fas fa-bars text-dark"></i>
                </span>
                <span class="category">Toutes nos catégories</span>
            </button>
    
            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav mx-auto d-flex justify-content-between">
                  @foreach(App\Category::all() as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index', ['categorie' => $category->slug]) }}">{{ $category->name }}</a>
                    </li>
                    @endforeach
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Autres catégories</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Iphones</a>
                        <a class="dropdown-item" href="#">Ipads</a>
                        <a class="dropdown-item" href="#">Smartphones</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif

    

    @yield('content')

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container-fluid bg-dark text-secondary">
            <div class="row">
                <div class="col-md-4 py-4">
                    <h6>NOUS CONTACTER</h6>
                    <a href="contact.html">Par mail</a><br>
                    <i class="fas fa-phone-volume"></i><span>+237 656166074</span><br>
                    <i class="fas fa-phone-volume"></i><span>+237 654188685</span><br><br>
                    <h6>SUIVEZ-NOUS SUR</h6>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                </div>
                <div class="col-md-4 py-4">
                    <h6>A PROPOS DE NOUS</h6>
                    <ul>
                        <li>Qui Sommes-nous</li>
                        <li>Politique de confidentialité</li>
                        <li>Conditions générales d'utilisation</li>
                        <li>Site Map</li>
                    </ul>
                </div>
                <div class="col-md-4 py-4">
                    <h6>SERVICE CLIENT</h6>
                    <ul>
                        <li>Aide & FAQ</li>
                        <li>Comment acheter sur <a href="index.html"><span class="logo"><span class="pres">près</span><span class="devous text-secondary">devous</span></i></span></a></li>
                        <li>Options et frais de livraison</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h6>MODE DE PAIEMENT</h6>
                    <div>
                        <ul>
                            <li>Orange money</li>
                            <li>Mtn mobile money</li>
                        </ul>
                        <i class="fab fa-cc-paypal"></i>
                        <i class="fab fa-cc-apple-pay"></i>
                        <i class="fab fa-cc-amazon-pay"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <h6>NEWSLETTER</h6>
                    <div>
                        <form action="#" class="pt-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Recherche..." id="search-item">
                                <div class="input-group-prepend">
                                    <span class="input-group-text search-box text-white">
                                        SOUSCRIRE
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="row">
                <div class="col-12 text-center py-3 font-weight-bold">
                    Afrocode &copy; 2020 Compagy Night. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
    <!-- END OF FOOTER -->

    <!-- jqurey -->
    <script src="{{ asset('js/jquerymin.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- script js -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- flickity js -->
    <script src="{{ asset('js/flickity.js') }}"></script>

    @yield('extra-js')
</body>
</html>