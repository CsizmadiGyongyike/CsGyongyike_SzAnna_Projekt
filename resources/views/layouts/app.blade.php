<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CTRL+Vibe Gamer Webshop</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
    <header>
        <h1><a href="{{route("welcome")}}">CTRL+Vibe Gamer Webshop</a></h1>
        <nav>
            <ul>
                <li><a href="{{route("welcome")}}">Főoldal</a></li>
                <li><a href="{{ route('category.index') }}">Kategóriák</a></li>
                <li><a href="{{route("pages.rolunk")}}">Rólunk</a></li>
                <li><a href="{{route("pages.kapcsolat")}}">Kapcsolat</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="" class="cart-btn">
                Kosár
            </a>

            <a href="{{route("auth.login")}}" class="modal-button">Belépés</a>
            <a href="{{route("auth.register")}}" class="modal-button">Regisztráció</a>
        </div>
    </header>

    @yield("content")
</body>
</html>