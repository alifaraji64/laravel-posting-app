<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body class="bg-gray-100">
        <nav class="flex justify-between bg-white mb-6 text-lg">
            <ul class="flex items-center">
                <li class="p-2"><a href="">Home</a></li>
                <li class="p-2"><a href="">Dashboard</a></li>
                <li class="p-2"><a href="">Post</a></li>
            </ul>
            <ul class="flex items-center">
                <li class="p-2"><a href="">Ali faraji</a></li>
                @if (auth()->user())
                    {{-- we are logged in --}}
                    <li class="p-2"><a href="">Logout</a></li>    
                @else
                    <li class="p-2"><a href="">Login</a></li>
                    <li class="p-2"><a href="{{ route('register') }}">Register</a></li>                    
                @endif

                
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
