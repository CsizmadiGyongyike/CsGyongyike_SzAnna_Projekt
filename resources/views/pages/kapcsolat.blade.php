@extends('layouts.app')

@section('content')

    <main >
        <h3>Lépj velünk kapcsolatba ha bármi probléma lenne vagy kérdése van!</h3>
        <form class="kapcsolat">
            <label for="nev1">Vezetéknév:</label> <br>
            <input type="text" name="nev1" id="nev1"> <br>
            <label for="nev2">Keresztnév:</label> <br>
            <input type="text" name="nev2" id="nev2"> <br>
            <label for="email">Email:</label> <br>
            <input type="email" name="email" id="email"> <br>
            <label for="uzenet">Üzenet:</label> <br>
            <textarea name="uzenet" id="uzenet">Írj ide valamit...</textarea> <br><br>
            <button type="submit">Küldés</button>
        </form>
    </main>
@endsection