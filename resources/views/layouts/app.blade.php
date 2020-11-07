<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="border-b-2 border-gray-200 py-3">
                <div class="lg:flex lg:items-center lg:justify-between px-4 sm:px-6">
                    <div class="flex-1 min-w-0">
                        <a class="text-xl font-extrabold text-indigo-700 hover:text-indigo-900 hover:no-underline transition duration-150 ease-in-out" href="{{ url('/') }}">
                            <i class="fas fa-feather-alt"></i> {{ config('app.name', 'Back End Developer') }}
                        </a>
                    </div>
                    <nav class="flex lg:mt-0 lg:ml-4">
                        @guest
                            <div class="hidden md:flex items-center justify-end space-x-8 md:flex-1 lg:w-0">
                                <a href="{{ route('login') }}" class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:text-gray-900 hover:no-underline focus:outline-none focus:text-gray-900">
                                    Sign in
                                </a>
                                @if(Route::has('register'))
                                    <span class="inline-flex rounded-md shadow-sm">
                                        <a href="{{ route('register') }}" class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 hover:no-underline focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                            Sign up
                                        </a>
                                    </span>
                                @endif
                            </div>
                        @else
                            <div class="hidden md:block md:ml-10 md:pr-4">
                                <span class="font-medium text-gray-500">{{ Auth::user()->name }}</span>
                                <a
                                    href="{{ route('logout') }}"
                                    class="ml-4 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>

<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
