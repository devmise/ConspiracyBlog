<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ConspiracyBlog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-green-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'ConspiracyBlog') }}
                    </a>

                    <form action="{{ route('posts.search') }}" method="GET" class="flex items-center ml-4">
                        <input type="text" name="search" placeholder="Search for a keyword" class="rounded-l-lg px-4 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <button type="submit" class="bg-green-500 text-white rounded-r-lg px-4 py-2 ml-2 hover:bg-green-600 transition duration-300 ease-in-out">Search</button>
                    </form>
                </div>
                
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
