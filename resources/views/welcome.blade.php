<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Svara Planing</title>
        <meta name="author" content="George Yankov">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    </head>
    <body class="bg-gray-400 font-sans leading-normal tracking-normal">

        <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6 fixed w-full z-10 top-0">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                    <span class="text-2xl pl-2"><i class="em em-grinning"></i>Svara Planing</span>
                </a>
            </div>

            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Voting Room</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">History</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Scrum Planing</a>
                    </li>
                    @if (Route::has('login'))

                        @auth
                            <li class="mr-3">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{url('/home')}}">Home</a>
                            </li>
                        @else
                            <li class="mr-3">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{route('login')}}">Login</a>
                            </li>
                            @if(Route::has('register'))
                            <li class="mr-3">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="{{route('register')}}">Register</a>
                            </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <div class="container shadow-lg mx-auto bg-white mt-24 md:mt-18">
            <div>
                dzag
            </div>
        </div>
    </body>
</html>
