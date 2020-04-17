<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Svara Planing') }}</title>
        <meta name="author" content="George Yankov">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    </head>
    <body class="bg-gray-400 font-sans tracking-normal">

        <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6">
            <div class="text-white mr-6">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="{{url('/')}}">
                    <span class="text-2xl pl-2">Svara Planing</span>
                </a>
            </div>

            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
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
                        <a class="inline-block px-4 text-white no-underline" href="{{route('scrum_planing')}}">Scrum Planing</a>
                    </li>
                    @if (Route::has('login'))

                        @auth
                            <li class="mr-3 pt-2">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline px-4" href="{{url('/home')}}">Home</a>
                            </li>
                        @else
                            <li class="mr-3 pt-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline px-4" href="{{route('login')}}">Login</a>
                            </li>
                            @if(Route::has('register'))
                            <li class="mr-3 pt-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline px-4" href="{{route('register')}}">Register</a>
                            </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>

        <div class="container text-2xl mx-auto mt-4">
            <div>
                <h2>Hello mates, ... you have a <span style="color:darkred">plan</span>, xm ?</h2>
                <h2>Are you brave enough to bet on it ? </h2>
                <br>
                <p>
                    <img class="w-9/12"  src="{{asset('images/shallwe.gif')}}" alt="animated">
                </p>
            </div>
        </div>
    </body>
</html>
