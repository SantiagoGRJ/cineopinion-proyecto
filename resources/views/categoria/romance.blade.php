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

    <x-header></x-header>











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


            <center><img src="./assets/images/romance.png"  width="80"  height="80"></center>

            <h2 class= "h2 section-title"> ROMANCE</h2>



            <ul id="movie_romance" class="movies-list">



            </ul>

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





    <!--
      - custom js link
    -->



  </body>

@endsection

@section('js')

<script src="{{asset('assets/js/accion.js')}}"></script>
<script src="{{asset('assets/js/terror.js')}}"></script>
<script src="{{asset('assets/js/comedia.js')}}"></script>
<script src="{{asset('assets/js/romance.js')}}"></script>
<script src="{{asset('assets/js/proximamente.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

    <!--
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
