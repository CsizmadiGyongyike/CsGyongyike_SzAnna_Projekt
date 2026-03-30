<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CTRL+Vibe Gamer Webshop</title>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
    <header>
        <div class="auth-buttons">
            @auth
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="modal-button" style="background:none; border:none; color:#3cff39; cursor:pointer;">Kijelentkezés</button>
                </form>
            @else
                <div class="justify-content-around row">
                    <a href="{{route("login")}}" class="modal-button col-5">Bejelentkezés</a>
                    <a href="{{route("register")}}" class="modal-button col-5">Regisztráció</a>
                </div>
            @endauth
        </div>
        <nav>
            <div class="row">
                <ul>
                    <li><a class="col-2" href="{{route("welcome")}}">Főoldal</a></li>
                    <li><a class="col-2" href="{{ route('product.index') }}">Termékek</a></li>
                    <li><a class="col-2" href="{{route("pages.rolunk")}}">Rólunk</a></li>
                    <li><a class="col-2" href="{{route("pages.kapcsolat")}}">Kapcsolat</a></li>

                    @auth
                @if(Auth::user()->is_admin)
                    <li>
                        <a class="col-2" href="{{ route('category.index') }}" style="color: #ffcc00; font-weight: bold; border: 1px solid #ffcc00; border-radius: 5px; padding: 2px 10px;">
                            ADMIN
                        </a>
                    </li>
                @endif
            @endauth
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @if(session('success'))
    <div style="background-color: #3cff39; color: black; padding: 15px; margin: 20px; text-align: center; font-weight: bold; border-radius: 8px;">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div style="background-color: #ff4444; color: white; padding: 15px; margin: 20px; text-align: center; font-weight: bold; border-radius: 8px;">
        {{ session('error') }}
    </div>
@endif
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 CTRL+Vibe. Minden jog fenntartva.</p>
    </footer>

    <a href="{{ route('cart.index') }}" class="floating-cart">
        Kosár
        @if(session('cart') && count(session('cart')) > 0)
            <span class="cart-count">{{ count(session('cart')) }}</span>
        @endif
    </a>
</body>
</html>