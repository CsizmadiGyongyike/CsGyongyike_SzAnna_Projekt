@extends('layouts.app')

@section('content')
<main style="padding: 50px 20px;">
    <h1 style="color: #3cff39; text-align: center;">Kosarad tartalma</h1>

    <div class="cart-container" style="max-width: 900px; margin: 0 auto; background: #1a1a1a; padding: 20px; border-radius: 15px; border: 1px solid #333;">
        @if(session('cart') && count(session('cart')) > 0)
            <table style="width: 100%; color: white; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid #3cff39; text-align: left;">
                        <th style="padding: 10px;">Termék</th>
                        <th style="padding: 10px;">Ár</th>
                        <th style="padding: 10px;">Mennyiség</th>
                        <th style="padding: 10px;">Művelet</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity']; @endphp
                        <tr style="border-bottom: 1px solid #333;">
                            <td style="padding: 15px;">{{ $details['name'] }}</td>
                            <td style="padding: 15px;">{{ number_format($details['price'], 0, ',', ' ') }} Ft</td>
                            <td style="padding: 15px;">
                                <form action="{{ route('cart.update', $id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" 
                                           onchange="this.form.submit()" 
                                           style="width: 60px; background: #000; color: #3cff39; border: 1px solid #3cff39; text-align: center; padding: 5px;">
                                </form>
                            </td>
                            <td style="padding: 15px;">
                                <form action="{{ route('cart.destroy', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none; border: none; color: #ff4d4d; cursor: pointer; font-weight: bold;">Törlés</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div style="margin-top: 30px; text-align: right;">
                <h2 style="color: #3cff39;">Összesen: {{ number_format($total, 0, ',', ' ') }} Ft</h2>
                <a href="{{ route('product.index') }}" class="modal-button" style="text-decoration: none; background: #444;">Vásárlás folytatása</a>
<form action="{{ route('cart.checkout') }}" method="POST">
    @csrf
    <button type="submit" class="modal-button">Fizetés</button>
</form>
            </div>
        @else
            <div style="text-align: center; padding: 40px;">
                <p>A kosarad jelenleg üres.</p>
                <a href="{{ route('product.index') }}" class="modal-button" style="text-decoration: none;">Vissza a termékekhez</a>
            </div>
        @endif
    </div>
</main>
@endsection