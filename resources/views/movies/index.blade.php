@extends('layouts.app')

@section('css')
    <!--
                    - favicon
                  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
                    - custom css link
                  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--
                  - google font link
                -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection

@section('content')

    <body id="top">

        <!--
                      - #HEADER
                    -->

        <header class="header" data-header>
            <div class="container">

                <div class="overlay" data-overlay></div>

                <a href="{{ route('cineopinion.index') }}" class="logo">
                    <img src="./assets/images/logo.jpg" width="70" alt="">
                </a>

                <div class="header-actions">






                </div>

                <button class="menu-open-btn" data-menu-open-btn>
                    <ion-icon name="reorder-two"></ion-icon>
                </button>

                <nav class="navbar" data-navbar>

                    <div class="navbar-top">

                        <a href="{{ route('cineopinion.index') }}" class="logo">
                            <img src="./assets/images/logo.jpg" width="70" alt="Filmlane logo">
                        </a>

                        <button class="menu-close-btn" data-menu-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                    </div>

                    <ul class="navbar-list">

                        <li>
                            <a href="{{ route('cineopinion.index') }}" class="navbar-link">Inicio</a>
                        </li>

                        <li>
                            <a href="{{ route('category.index') }}" class="navbar-link">Peliculas</a>
                        </li>

                        <li>
                            <a href="#" class="navbar-link">Acerca de Nosotros</a>
                        </li>

                        <li>
                            <a href="#" class="navbar-link">Contacto</a>
                        </li>

                        <li class="navbar-link">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="  inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  ease-in-out duration-150">
                                        <div>
                                            @if (Auth::user())
                                                {{ Auth::user()->name }}
                                        </div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    @else
                                        <a href="{{ route('login') }}" class="navbar-link ">Log in</a>
            </div>

            <div class="ms-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            @endif

            </button>
            </x-slot>

            @if (Auth::user())
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            @else
                <x-slot name="content">
                    <x-dropdown-link :href="route('register')">
                        @if (Route::has('register'))
                        {{ __('Register') }}
                        @endif
                    </x-dropdown-link>
                </x-slot>
            @endif

            </x-dropdown>
            </li>

            </ul>

            <ul class="navbar-social-list">

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>

            </ul>

            </nav>

            </div>
        </header>





        <main>
            <article>

                <!--
                          - #HERO
                        -->

                <section class="hero">
                    <div class="container">

                        <div class="hero-content">

                            <p class="hero-subtitle">CINEOPINIÓN</p>

                            <h1 class="h1 hero-title">
                                Películas <strong>Reseñas</strong> y más ilimitados..
                            </h1>


                            </button>

                        </div>

                    </div>
                </section>





                <!--
                          - #UPCOMING
                        -->

                <section class="upcoming">
                    <div class="container">

                        <div class="flex-wrapper">

                            <div class="title-wrapper">
                                <p class="section-subtitle"></p>

                                <h2 class="h2 section-title hero-title">Mejores <strong> 100 Películas </strong> del Momento
                                </h2>
                            </div>


                            </ul>

                        </div>

                        <ul id="top-cien" class="movies-list  has-scrollbar">




                        </ul>

                    </div>
                </section>





                <!--
                          - #SERVICE
                        -->

                <!-- <section class="service">
                          <div class="container">

                            <div class="service-banner">
                              <figure>
                                <img src="./assets/images/service-banner.jpg" alt="HD 4k resolution! only $3.99">
                              </figure>

                              <a href="./assets/images/service-banner.jpg" download class="service-btn">
                                <span>Download</span>

                                <ion-icon name="download-outline"></ion-icon>
                              </a>
                            </div>

                            <div class="service-content">

                              <p class="service-subtitle">NUESTROS SERVICIOS</p>

                              <h2 class="h2 service-title">VER RESEÑAS DE TUS PELICULAS FAVORITAS</h2>

                              <p class="service-text">
                                Aca podrás ver las reseñas de tus peliculas favoritas de igual forma podrar ver el trailer y donde puedes encontrar la pelicula en una calidad buena, de igual forma podrás descargar el poster de las peliculas en buena calidad.
                              </p>

                              <ul class="service-list">

                                <li>
                                  <div class="service-card">

                                    <div class="card-icon">
                                      <ion-icon name="tv"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                      <h3 class="h3 card-title">Disfrútalo en tu televisor.</h3>

                                      <p class="card-text">

                                      </p>
                                    </div>

                                  </div>
                                </li>

                                <li>
                                  <div class="service-card">

                                    <div class="card-icon">
                                      <ion-icon name="videocam"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                      <h3 class="h3 card-title">Míralo en todas partes.</h3>

                                      <p class="card-text">

                                      </p>
                                    </div>

                                  </div>
                                </li>

                              </ul>

                            </div>

                          </div>
                        </section> -->





                <!--
                          - #TOP RATED
                        -->

                <section class="top-rated">
                    <div class="container">

                        <p class="section-subtitle">TRANSMISIÓN EN LÍNEA</p>

                        <h2 class="h2 section-title">Películas mejor valoradas</h2>

                        <ul class="filter-list">


                        </ul>

                        <ul id="movie_rated" class="movies-list">







                        </ul>

                    </div>
                </section>





                <!--
                          - #TV SERIES
                        -->

                <section class="tv-series">
                    <div class="container">

                        <p class="section-subtitle">Peliculas</p>

                        <h2 class="h2 section-title">Proximamenteeeee....</h2>

                        <ul id="movie_upcoming" class="movies-list">




                        </ul>

                    </div>
                </section>
                <!--
                          - #CTA
                        -->
            </article>
        </main>





        <!--
                      - #FOOTER
                    -->

        <footer class="footer">

            <div class="footer-top">
                <div class="container">

                    <div class="footer-brand-wrapper">

                        <a href="{{ route('cineopinion.index') }}" class="logo">
                            <img src="./assets/images/logo.jpg" width="100" alt="">
                        </a>

                        <ul class="footer-list">

                            <li>
                                <a href="{{ route('cineopinion.index') }}" class="footer-link">Inicio</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">Peliculas</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">Acerca de Nosotros</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">Contacto</a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">Reseñas</a>
                            </li>

                        </ul>

                    </div>

                    <div class="divider"></div>

                    <div class="quicklink-wrapper">

                        <ul class="quicklink-list">

                            <li>
                                <a href="#" class="quicklink-link">PREGUNTAS MÁS FRECUENTES</a>
                            </li>

                            <li>
                                <a href="#" class="quicklink-link">CENTRO DE AYUDA</a>
                            </li>

                            <li>
                                <a href="#" class="quicklink-link">CONDICIONES DE USO
                                </a>
                            </li>

                            <li>
                                <a href="#" class="quicklink-link">PRIVACIDAD</a>
                            </li>

                        </ul>

                        <ul class="social-list">

                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-pinterest"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <div class="container" style="display: flex; justify-content: center;">

                    <p class="copyright">
                        &copy; 2023 <a href="#">Equipo 4</a>. Todos los derechos reservados
                    </p>



                </div>
            </div>

        </footer>





        <!--
                      - #GO TO TOP
                    -->

        <a href="#top" class="go-top" data-go-top>
            <ion-icon name="chevron-up"></ion-icon>
        </a>







    </body>
@endsection

@section('js')
    <!--
                      - custom js link
                    -->
    <script src="{{ asset('assets/js/best_rated.js') }}"></script>
    <script src="{{ asset('assets/js/top_100.js') }}"></script>
    <script src="{{ asset('assets/js/proximamente.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!--
                      - ionicon link
                    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
