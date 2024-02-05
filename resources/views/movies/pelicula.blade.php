@extends('layouts.app')

@section('css')
    <!--
            - favicon
          -->


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

    <body id="#top">

        <!--
              - #HEADER
            -->

        <header class="header" data-header>
            <div class="container">

                <div class="overlay" data-overlay></div>

                <a href="{{ route('cineopinion.index') }}" class="logo">
                    <img src="{{ asset('assets/images/logo.jpg') }}" width="70" alt="">
                </a>

                <div class="header-actions">



                    <div class="lang-wrapper">
                        <label for="language">
                            <ion-icon name="globe-outline"></ion-icon>
                        </label>

                        <select name="language" id="language">
                            <option value="en">EN</option>
                            <option value="au">AU</option>
                            <option value="ar">AR</option>
                            <option value="tu">TU</option>
                        </select>
                    </div>


                </div>

                <button class="menu-open-btn" data-menu-open-btn>
                    <ion-icon name="reorder-two"></ion-icon>
                </button>

                <nav class="navbar" data-navbar>

                    <div class="navbar-top">

                        <a href="{{ route('cineopinion.index') }}" class="logo">
                            <img src="{{ asset('assets/images/logo.jpg') }}" width="70" alt="Filmlane logo">
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

                        <li>
                            <a href="#" class="navbar-link">Reseñas</a>
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






        <!--
                  - #MOVIE DETAIL
                -->

                <section id="individual" class="movie-detail">

                </section>

                <CENTER>
                    <p class="detail-subtitle">TRAILER</p>
                </CENTER>
                <CENTER><span id="video"></span></CENTER>



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
              - #FOOTER
            -->

        <footer class="footer">
            <footer class="footer">

                <div class="footer-top">
                    <div class="container">

                        <div class="footer-brand-wrapper">

                            <a href="{{ route('cineopinion.index') }}" class="logo">
                                <img src="{{ asset('assets/images/logo.jpg') }}" width="100" alt="">
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
                    <div class="container">

                        <p class="copyright">
                            &copy; 2023 <a href="#">equipo4</a>. Todos los derechos reservados
                        </p>



                    </div>
                </div>

            </footer>





            <!--
                - #GO TO TOP
              -->
            <input id="id" type="hidden" value="{{ $pelicula }}">
            <a href="#top" class="go-top" data-go-top>
                <ion-icon name="chevron-up"></ion-icon>
            </a>







    </body>
@endsection

@section('js')
    <!--
              - custom js link
            -->
    <script src="{{ asset('assets/js/indivual.js') }}"></script>
    <script src="{{ asset('assets/js/proximamente_only.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!--
          - ionicon link
        -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
