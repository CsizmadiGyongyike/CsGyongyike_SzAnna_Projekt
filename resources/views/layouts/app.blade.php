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
                <a href="{{route("login")}}" class="modal-button">Bejelentkezés</a>
                <a href="{{route("register")}}" class="modal-button">Regisztráció</a>
            @endauth
        </div>
        <nav>
            <ul>
                <li><a href="{{route("welcome")}}">Főoldal</a></li>
                <li><a href="{{ route('product.index') }}">Termékek</a></li>
                <li><a href="{{route("pages.rolunk")}}">Rólunk</a></li>
                <li><a href="{{route("pages.kapcsolat")}}">Kapcsolat</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
        <div class="container mt-3">
    {{-- Sikeres művelet üzenete --}}
    @if(session('success'))
        <div class="alert alert-success" style="background-color: #3cff39; color: black; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Hibaüzenet (ha pl. üres a kosár) --}}
    @if(session('error'))
        <div class="alert alert-danger" style="background-color: #ff4444; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-weight: bold;">
            {{ session('error') }}
        </div>
    @endif
</div>
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