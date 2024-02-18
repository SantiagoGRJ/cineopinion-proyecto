<header class="header" data-header>
    <div class="container">

        <div class="overlay" data-overlay></div>

        <a href="{{ route('cineopinion.index') }}" class="logo">
            <img src="{{asset('assets/images/logo.jpg')}}" width="70" alt="">
        </a>

        <div class="header-actions">


        </div>

        <button class="menu-open-btn" data-menu-open-btn>
            <ion-icon name="reorder-two"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

            <div class="navbar-top">

                <a href="{{ route('cineopinion.index') }}" class="logo">
                    <img src="{{asset('assets/images/logo.jpg')}}" width="70" alt="Filmlane logo">
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
