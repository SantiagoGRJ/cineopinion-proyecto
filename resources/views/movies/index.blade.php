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

                <a href="./index.html" class="logo">
                    <img src="./assets/images/logo.jpg" width="70" alt="">
                </a>

                <div class="header-actions">






                </div>

                <button class="menu-open-btn" data-menu-open-btn>
                    <ion-icon name="reorder-two"></ion-icon>
                </button>

                <nav class="navbar" data-navbar>

                    <div class="navbar-top">

                        <a href="./index.html" class="logo">
                            <img src="./assets/images/logo.svg" alt="Filmlane logo">
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

                                <h2 class="h2 section-title hero-title">Mejores <strong> 100 Películas </strong> del Momento</h2>
                            </div>


                            </ul>

                        </div>

                        <ul class="movies-list  has-scrollbar">

                            <li>
                                <div class="movie-card">

                                    <a href="peli1.html">
                                        <figure class="card-banner">
                                            <img src="./assets/images/upcoming-1.png" alt="The Northman movie poster">
                                        </figure>
                                    </a>

                                    <div class="title-wrapper">
                                        <a href="peli1.html">
                                            <h3 class="card-title">The Northman</h3>
                                        </a>

                                        <time datetime="2022">2022</time>
                                    </div>

                                    <div class="card-meta">
                                        <div class="badge badge-outline">HD</div>

                                        <div class="duration">
                                            <ion-icon name="time-outline"></ion-icon>

                                            <time datetime="PT137M">137 min</time>
                                        </div>

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>

                                            <data>8.5</data>
                                        </div>
                                    </div>

                                </div>
                            </li>



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

                            <li>
                                <div class="movie-card">

                                  <a href="PELICULA1.html">
                                    <figure class="card-banner">
                                      <img src="./assets/images/PELICULA1.jpg" alt="">
                                    </figure>
                                  </a>

                                  <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                      <h3 class="card-title">resident evil the final chapter</h3>
                                    </a>

                                    <time datetime="2022">2017</time>
                                  </div>

                                  <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                      <ion-icon name="time-outline"></ion-icon>

                                      <time datetime="PT122M">106 min</time>
                                    </div>

                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>

                                      <data>7.8</data>
                                    </div>
                                  </div>

                                </div>
                              </li>





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

                        <ul class="movies-list">



                            <li>
                                <div class="movie-card">

                                    <a href="">
                                        <figure class="card-banner">
                                            <img src="./assets/images/PELICULA 5.jpg" alt="Moon Knight movie poster">
                                        </figure>
                                    </a>

                                    <div class="title-wrapper">
                                        <a href="./movie-details.html">
                                            <h3 class="card-title">DEADPOOL 3 </h3>
                                        </a>

                                        <time datetime="2022">2024</time>
                                    </div>

                                    <div class="card-meta">
                                        <div class=""></div>

                                        <div class="duration">
                                            <ion-icon name=""></ion-icon>

                                            <time datetime="PT47M"></time>
                                        </div>

                                        <div class="rating">
                                            <ion-icon name=""></ion-icon>

                                            <data></data>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="movie-card">

                                    <a href="">
                                        <figure class="card-banner">
                                            <img src="./assets/images/PELICULA 5.jpg" alt="Moon Knight movie poster">
                                        </figure>
                                    </a>

                                    <div class="title-wrapper">
                                        <a href="./movie-details.html">
                                            <h3 class="card-title">DEADPOOL 3 </h3>
                                        </a>

                                        <time datetime="2022">2024</time>
                                    </div>

                                    <div class="card-meta">
                                        <div class=""></div>

                                        <div class="duration">
                                            <ion-icon name=""></ion-icon>

                                            <time datetime="PT47M"></time>
                                        </div>

                                        <div class="rating">
                                            <ion-icon name=""></ion-icon>

                                            <data></data>
                                        </div>
                                    </div>

                                </div>
                            </li>
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

                        <a href="./index.html" class="logo">
                            <img src="./assets/images/logo.jpg" width="100" alt="">
                        </a>

                        <ul class="footer-list">

                            <li>
                                <a href="./index.html" class="footer-link">Inicio</a>
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
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!--
          - ionicon link
        -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
