@extends('layouts.app')

@section('content')

    <main >
        <h3>Lépj velünk kapcsolatba ha bármi probléma lenne vagy kérdése van!</h3>
        @if(session('success'))
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert" style="max-width: 500px; margin-top: 20px;">
                <ul class="mb-0 list-unstyled text-center">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form class="kapcsolat" action="{{route('contact.store')}}" method="POST">
            @csrf
            <label for="nev1">Vezetéknév:</label> <br>
            <input type="text" name="nev1" id="nev1"> <br>
            <label for="nev2">Keresztnév:</label> <br>
            <input type="text" name="nev2" id="nev2"> <br>
            <label for="email">Email:</label> <br>
            <input type="email" name="email" id="email"> <br>
            <label for="uzenet">Üzenet:</label> <br>
            <textarea name="uzenet" id="uzenet"></textarea> <br><br>
            <button type="submit">Küldés</button>
        </form>
    </main>
@endsection