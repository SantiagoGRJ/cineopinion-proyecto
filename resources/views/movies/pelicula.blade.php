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

            <x-header></x-header>





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

            <x-footer></x-footer>





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
