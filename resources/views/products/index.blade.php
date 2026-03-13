@extends('layouts.app')

@section('content')
    <main>
    {{-- Ide költöztesd át az üdvözlő szöveget a app.blade.php-ből, ha szeretnéd --}}
    <section class="welcome-hero" style="text-align: center; padding: 40px;">
        <h1>ÜDVÖZÖL A CTRL+VIBE!</h1>
        <p>A legmenőbb gamer cuccok egy helyen.</p>
    </section>

    {{-- Termékek kategóriánként --}}
    @foreach($categories as $category)
        <section class="product-section">
            <h3>{{ $category->name }}</h3>
            <div class="card-container">
                @foreach($products->where('category_id', $category->id) as $product)
                    <div class="mycard">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $product->name }}</h2>
    
                            <div class="description-box">
                                <p class="card-text">{{ $product->description }}</p>
                            </div>

                            <div class="price-section">
                                <p class="price-tag"><strong>{{ number_format($product->price, 0, ',', ' ') }} Ft</strong></p>
                            </div>

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
    @endforeach
</main>
@endsection