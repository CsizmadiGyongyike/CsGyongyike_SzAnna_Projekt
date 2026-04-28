@extends('layouts.app')

@section('content')
    <main>
        <section class="welcome-hero" style="text-align: center; padding: 40px;">
            <h1>ÜDVÖZÖL A CTRL+VIBE!</h1>
        </section>

        @foreach ($categories as $category)
            <section class="product-section">
                <h3 style="color: #3cff39; margin: 20px;">{{ $category->name }}</h3>
                <div class="card-container" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
                    @foreach ($products->where('category_id', $category->id) as $product)
                        <div class="mycard">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h2 class="card-title">{{ $product->name }}</h2>
                                <p class="price-tag">{{ number_format($product->price, 0, ',', ' ') }} Ft</p>

                                @auth
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="card-button">Kosárba</button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
            <hr class="category-divider">
        @endforeach
    </main>
@endsection
