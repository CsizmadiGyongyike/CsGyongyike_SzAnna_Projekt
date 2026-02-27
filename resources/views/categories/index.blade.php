@extends('layouts.app')

@section('content')

    <main>
        <h2>Termékkategóriák:</h2>
        <br>
        <section class="product">
            <h3>Egerek</h3>
            <div class="products">
                <a href="{{route("product.index")}}">SkullStorm Viper</a>
                <a href="{{route("product.index")}}">CyberTrace NeoPulse</a>
                <a href="{{route("product.index")}}">BlazeDragon Inferno FX</a>
            </div>
        </section>

        <section class="product">
            <h3>Billentyűzetek</h3>
            <div class="products">
                <a href="{{route("product.index")}}">SkullStorm Viper KB</a>
                <a href="{{route("product.index")}}">CyberTrace NeoPulse KB</a>
                <a href="{{route("product.index")}}">BlazeDragon Inferno KB</a>
            </div>
        </section>

        <section class="product">
            <h3>Fejhallgatók</h3>
            <div class="products">
                <a href="{{route("product.index")}}">Termék neve</a>
                <a href="{{route("product.index")}}">Termék neve</a>
                <a href="{{route("product.index")}}">Termék neve</a>
            </div>
        </section>

        <section class="product">
            <h3>Játék konzolok</h3>
            <div class="products">
                <a href="{{route("product.index")}}">Termék neve</a>
                <a href="{{route("product.index")}}">Termék neve</a>
                <a href="{{route("product.index")}}">Termék neve</a>
            </div>
        </section>
    </main>
@endsection