<header class="header" data-header>
    <div class="container">

        <div class="overlay" data-overlay></div>

        <a href="{{ route('cineopinion.index') }}" class="logo">
            <img src="{{ asset('assets/images/logo.jpg') }}" width="70" alt="">
        </a>

        <div class="header-actions">


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
                    <a href="{{ route('cineopinion.index') }}" class="navbar-link">{{__('Index')}}</a>
                </li>

                <li>
                    {{-- <a href="{{ route('category.index') }}" class="navbar-link">Peliculas</a> --}}

                    <div class="navbar-link  sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ __('Categories') }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <a href="{{route('accion.index')}}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out">
                                    {{__('Action')}}
                                </a>
                               <a href="{{route('terror.index')}}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out">
                                Terror</a>
                               <a href="{{route('comedia.index')}}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" >
                                {{__('Comedy')}}</a>
                               <a href="{{route('romance.index')}}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out"
                               >
                                {{__('Romance')}}</a>

                                <!-- Authentication -->

                            </x-slot>
                        </x-dropdown>
                    </div>


                </li>

                {{-- <li>
                    <a href="#" class="navbar-link">Acerca de Nosotros</a>
                </li>

                <li>
                    <a href="#" class="navbar-link">Contacto</a>
                </li> --}}

    <li class="navbar-link">

        <div class="navbar-link  sm:flex sm:items-center sm:ms-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        @if (Auth::user())
                        {{ Auth::user()->name }}
                        @else
                        <a href="{{ route('login') }}" class="">{{__('Log in')}}</a>
                        @endif
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
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
        </div>


{{-- <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="  inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  ease-in-out duration-150">
                                <div>
                                    @if (Auth::user())
                                        {{ Auth::user()->name }}

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
        </button>
    </x-slot>
        @endif



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
--}}
    </li>

    <li>

          @if (config('locale.status') && count(config('locale.languages')) > 1)
          <div class="lang-wrapper">
            <label for="language">
              <ion-icon name="globe-outline"></ion-icon>
            </label>
                    @foreach (array_keys(config('locale.languages')) as $lang)
                        @if ($lang != App::getLocale())
                            <a href="{!! route('lang.swap', $lang) !!}"class="navbar-link">
                                    {!! $lang !!} <small>{!! $lang !!}</small>

                            </a>
                        @endif
                    @endforeach
                </div>
            @endif
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
