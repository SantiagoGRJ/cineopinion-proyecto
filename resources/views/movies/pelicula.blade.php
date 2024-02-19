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
                    <p class="detail-subtitle">TRAILER <!-- Modal toggle -->
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-custom-orange dark:hover:bg-custom-orange dark:focus:ring-custom-orange" type="button">
                          Toggle modal
                        </button></p>
                </CENTER>
                <CENTER><span id="video"></span> </CENTER>

                <!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Comentarios
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
               
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-custom-orange dark:hover:bg-custom-orange dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
        </div>
    </div>
</div>







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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


    <!--
          - ionicon link
        -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
