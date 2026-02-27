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
            <a href="" class="cart-btn">
                Kosár
            </a>
            
            @auth
                <form action="{{route("logout")}}" method="POST">
                    @csrf
                    <button class="like-a-tag">Kijelentkezés</button>
                </form>
                @else
                <a href="{{route("login")}}" class="modal-button">Bejelentkezés</a>
                <a href="{{route("register")}}" class="modal-button">Regisztráció</a>
            @endauth
        </div>
        <nav>
            <ul>
                <li><a href="{{route("welcome")}}">Főoldal</a></li>
                <li><a href="{{ route('category.index') }}">Kategóriák</a></li>
                <li><a href="{{route("pages.rolunk")}}">Rólunk</a></li>
                <li><a href="{{route("pages.kapcsolat")}}">Kapcsolat</a></li>
            </ul>
        </nav>
        
    </header>

    @if(Route::is('welcome'))
        <section class="welcome">
            <main>
                <section class="welcome" style="padding: 60px 20px;">
                    <h2 style="color: #c3ff00; font-size: 3rem;">ÜDVÖZÖL A CTRL+VIBE!</h2>
                    <p style="font-size: 1.2rem;">A legmenőbb gamer cuccok egy helyen.</p>
                    <a href="{{ route('category.index') }}" class="modal-button" style="text-decoration: none; display: inline-block; margin-top: 20px;">Böngéssz a kínálatban</a>
                </section>
            </main>
        </section>
    @endif

    @yield("content")

    <footer>
        <p>&copy; 2026 CTRL+Vibe Gamer Webshop</p>
    </footer>
</body>
</html>