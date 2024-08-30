<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/style.css">

        <title>{{config('app.name')}}</title>


    </head>
    <body>
        <header class="header">
            <div class="logo"><a href="#">{{config('app.name')}}</a></div>
            <div class="search">
                <form action="#" method="post">
                    <input type="search" name="search" id="search">
                    <button type="submit">search</button>
                </form>
            </div>
            <nav class="navbar">
                <a href="#home" class="links">home</a>
                <a href="#services" class="links">services</a>
                <a href="#about" class="links">about</a>
                <a href="#contact" class="links">contact</a>
            </nav>
            <div class="log">
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class=""
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"

                            class="log"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"

                                class="log"
                                >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
            </div>
        </header>

        @yield('contant')

        <footer>
            <ul>
                <li>contact</li>
                <li>0655544</li>
                <li>0795545632</li>
                <li>0796632195</li>
            </ul>
            <ul>
                <li>contact</li>
                <li>0655544</li>
                <li>0795545632</li>
                <li>0796632195</li>
            </ul>
            <ul>
                <li>contact</li>
                <li>0655544</li>
                <li>0795545632</li>
                <li>0796632195</li>
            </ul>
        </footer>

    </body>
</html>
