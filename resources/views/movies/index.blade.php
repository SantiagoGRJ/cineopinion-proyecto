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

       <x-header></x-header>





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

       <x-footer></x-footer>





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
