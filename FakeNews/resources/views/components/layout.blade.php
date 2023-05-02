<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuws</title>
    <link href="/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <script src="/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="weather.css">
    <script src="weather.js" defer></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body style="background-color: black;" data-theme="light">

    <nav class="nav" id="nav" style="background-color: gray; border-bottom: 2px solid lightgray;">

        <header id="top">
            <div class="container-1">
                <div class="row-1">
                    <div class="logo">
                        <a id="fakenewslogo" href="justinmind_afb/logo.png"></a>
                    </div>
                    <div class="linkerkant">
                        <nav>
                            <ul class="main-menu-1">
                                <li>
                                    <a href="#" id="toggleBtn">
                                        <i id="icon_mode" class="fa-solid fa-moon"></i>
                                    </a>
                                </li>
                                <li class="Home">
                                    <a href="/home">Home</a>
                                </li>
                                <li class="Weer">
                                    <a href="/weer">Weer</a>
                                </li>
                                <li class="Contact">
                                    <a href="#contact">Contact</a>
                                </li>
@if (isset(Auth::user()->is_admin) && Auth::user()->is_admin === 1)
                                    <li class="Upload">
                                        <a href="/upload">Upload</a>
                                    </li>
@endif
                            </ul>
                        </nav>
                    </div>
                    <div class="midden">
                        <a id="logo-1" href="/home">
                            <img id="logo" src="/images/L_Logo.png" alt="Fake" width="150">
                        </a>
                    </div>
                    <div class="rechterkant" id="sm_mode">
                        <ul class="main-menu-2">
                            <li>
                                <a href="#Instagram">
                                    <span class="screenreadertext">Instagram</span>
                                    <i class="fa-brands fa-instagram " aria-hidden="true"></i>
                                </a>
                                <a href="#Youtube">
                                    <span class="screenreadertext">Youtube</span>
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="#Twitter">
                                    <span class="screenreadertext">Twitter</span>
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#Facebook">
                                    <span class="screenreadertext">Facebook</span>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="midden">
                        <ul class="main-menu-3">
                            <li id="abonneer-btn" class="button-primary">
                                <a href="#Abonneer">
                                    <!-- <button type="button" class="btn btn-primary">Abonneer</button> -->
                                    <button class="button-24" role="button">ABONNEER</button>
                                    <span class="screenreadertext">Abonneer</span>
                                </a>
                            </li>
                            <li id="login-btn">

@guest
            <a href="inloggen">
                <span class="screenreadertext">Inloggen</span>
                <i class="fa-solid fa-user icon"></i>
            </a>
@else
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md hover:text-gray-700 dark:hover:text-white-300 focus:outline-none transition ease-in-out duration-150">
                            <div class="textColor">{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current textColor h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content" class="back-color2">
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
                </x-dropdown>
            </div>
@endauth



                            </li>
                            <li id="search-btn">
                                <a href="#zoeken">
                                    <span class="screenreadertext">Zoeken</span>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="row row-2">
                    <div class="col">
                        <div class="search-bar">
                            <form method="GET" action="/home">
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search...">
                                <button class="button-28" id="search-submit" type="submit" role="button">SEARCH</button>
                            </form>


                                {{-- @if (request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}" />
                                @endif

                                <input
                                value="{{ request('search') }}"
                                class="bg-transparent placeholder-black font-semibold text-sm"> --}}

                        </div>
                    </div>
                </div>
        </header>
    </nav>

    {{ $slot }}

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
