@extends('layouts.app')

@section('css')

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

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
              <a href="{{route('cineopinion.index')}}" class="navbar-link">Inicio</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Peliculas</a>
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
          - #UPCOMING
        -->




        <!--
          - #SERVICE
        -->




        <!--
          - #TOP RATED
        -->

        <section class="top-rated">
          <div class="container">


            <center><img src="./assets/images/accion.png"  width="80"  height="80"></center>

            <h2 class= "h2 section-title"> ACCIÓN</h2>



            <ul class="movies-list">
              <li>
                <div class="movie-card">

                  <a href="./movie-details.html">
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



        </section>



        <section class="top-rated">
          <div class="container">


            <center><img src="./assets/images/pelicula-de-terror.png"  width="80"  height="80"></center>

            <h2 class= "h2 section-title"> TERROR</h2>



            <ul class="movies-list">
              <li>
                <div class="movie-card">

                  <a href="./movie-details.html">
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

        </section>

        <section class="top-rated">
          <div class="container">


            <center><img src="./assets/images/comedia.png"  width="80"  height="80"></center>

            <h2 class= "h2 section-title"> COMEDIA</h2>



            <ul class="movies-list">
              <li>
                <div class="movie-card">

                  <a href="./movie-details.html">
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

        </section>
        <section class="top-rated">
          <div class="container">


            <center><img src="./assets/images/romance.png"  width="80"  height="80"></center>

            <h2 class= "h2 section-title"> ROMANCE</h2>



            <ul class="movies-list">
              <li>
                <div class="movie-card">

                  <a href="./movie-details.html">
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
                <a href="{{route('cineopinion.index')}}" class="footer-link">Inicio</a>
              </li>

              <li>
                <a href="{{route('category.index')}}" class="footer-link">Peliculas</a>
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

          <img src="./assets/images/footer-bottom-img.png" alt="Online banking companies logo" class="footer-bottom-img">

        </div>
      </div>

    </footer>





    <!--
      - #GO TO TOP
    -->

    <a href="#top" class="go-top" data-go-top>
      <ion-icon name="chevron-up"></ion-icon>
    </a>





    <!--
      - custom js link
    -->



  </body>

@endsection

@section('js')
<script src="{{asset('assets/js/script.js')}}"></script>

    <!--
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
