@extends('layouts.app')

@section('content')
    <main>
    <section class="welcome-hero" style="text-align: center; padding: 40px;">
        <h1>ÜDVÖZÖL A CTRL+VIBE!</h1>
        <p>A legmenőbb gamer cuccok egy helyen.</p>
    </section>

    @foreach($categories as $category)
        <section class="product-section">
            <h3>{{ $category->name }}</h3>
            <div class="card-container">
                @foreach($products->where('category_id', $category->id) as $product)
                    <div class="mycard">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $product->name }}</h2>
    
                            <div class="description-box">
                                <p class="card-text">{{ $product->description }}</p>
                            </div>

                            <div class="price-section">
                                <p class="price-tag"><strong>{{ number_format($product->price, 0, ',', ' ') }} Ft</strong></p>
                            </div>

                            @auth
                                <div class="cart-action-area" style="margin-top: 15px;">
                                    @if($product->stock > 0)
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button type="submit" class="card-button">Kosárba</button>
                                        </form>
                                        <small style="color: #c8ff00; display: block; margin-top: 5px;">
                                            Készleten: {{ $product->stock }} db
                                        </small>
                                    @else
                                        <button class="card-button" style="background: #555; cursor: not-allowed; border-color: #555;" disabled>
                                            Elfogyott
                                        </button>
                                        <small style="color: #ff4444; display: block; margin-top: 5px;">
                                            Jelenleg nem rendelhető
                                        </small>
                                    @endif
                                </div>
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