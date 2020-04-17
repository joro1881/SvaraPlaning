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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-400 font-sans tracking-normal">

        <div id="app" v-cloak>
            <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <a class="text-white no-underline hover:text-white hover:no-underline" href="{{url('/')}}">
                        <span class="text-2xl pl-2"><i class="em em-grinning"></i>Svara Planing</span>
                    </a>
                </div>

                <div class="block lg:hidden">
                    <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-300 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
                                Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                    </button>
                </div>

                <div id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3 pt-2">
                            <a class="inline-block px-4 text-white no-underline" href="{{route('voting_room')}}">Voting Room</a>
                        </li>
                        <li class="mr-3 pt-2">
                            <a class="inline-block px-4 text-white no-underline" href="{{route('history')}}">History</a>
                        </li>
                        <li class="mr-3 pt-2">
                            <a class="inline-block px-4 text-white no-underline" href="{{route('scrum_planing')}}">Scrum
                                Planing</a>
                        </li>
                        @guest
                            <li class="mr-3 pt-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline px-4"
                                   href="{{route('login')}}">{{__('Login')}}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="mr-3 pt-2">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline px-4"
                                       href="{{route('register')}}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="mr-3 pt-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline px-4"
                                   href="{{url('/home')}}">{{__('Home')}}</a>
                            </li>
                            <li class="mr-3 pt-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline px-4"
                                   v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div>
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline px-4"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </nav>

            <main class="py-2 shadow-lg mx-auto">
                @yield('content')
            </main>
        </div>
    </body>
</html>
