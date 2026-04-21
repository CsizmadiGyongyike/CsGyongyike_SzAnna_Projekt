@extends('layouts.app')

@section('content')
<main style="padding: 50px 20px;">
    <h1 style="color: #3cff39; text-align: center;">Kosarad tartalma</h1>

    <div class="cart-container" style="max-width: 900px; margin: 0 auto; background: #1a1a1a; padding: 20px; border-radius: 15px; border: 1px solid #333;">
        @if(session('cart') && count(session('cart')) > 0)
            
            <div id="step-1">
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
                                <td style="padding: 15px;">{{ $details['quantity'] }} db</td>
                                <td style="padding: 15px;">
                                    <form action="{{ route('cart.destroy', $id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; color: #ff4d4d; cursor: pointer;">Törlés</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div style="margin-top: 30px; text-align: right;">
                    <h2 style="color: #3cff39;">Összesen: {{ number_format($total, 0, ',', ' ') }} Ft</h2>
                    <a href="{{ route('product.index') }}" class="modal-button" style="text-decoration: none; background: #444; margin-right: 10px; display: inline-block; padding: 10px 20px; border-radius: 5px; color: white;">Vásárlás folytatása</a>
                    
                    <button type="button" onclick="showStep2()" class="modal-button" style="background: #3cff39; color: #000; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                        Tovább a szállítási adatokhoz
                    </button>
                </div>
            </div>

            <div id="step-2" style="display: none;">
                <h3 style="color: #3cff39; border-bottom: 2px solid #3cff39; padding-bottom: 10px; margin-bottom: 20px;">Szállítási adatok</h3>
                
                <form action="{{ route('cart.checkout') }}" method="POST">
                    @csrf
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; color: white; text-align: left;">
                        <div>
                            <label>Típus</label>
                            <select name="type" style="width: 100%; background: #000; color: #fff; border: 1px solid #333; padding: 8px;" required>
                                <option value="private">Magánszemély</option>
                                <option value="business">Cég</option>
                            </select>
                        </div>
                        <div>
                            <label>Adószám (opcionális)</label>
                            <input type="text" name="tax_number" style="width: 100%; background: #000; color: #fff; border: 1px solid #333; padding: 8px;">
                        </div>
                        <div>
                            <label>Irányítószám</label>
                            <input type="text" name="postcode" style="width: 100%; background: #000; color: #fff; border: 1px solid #333; padding: 8px;" required>
                        </div>
                        <div>
                            <label>Város</label>
                            <input type="text" name="city" style="width: 100%; background: #000; color: #fff; border: 1px solid #333; padding: 8px;" required>
                        </div>
                        <div style="grid-column: span 2;">
                            <label>Utca, házszám</label>
                            <input type="text" name="address" style="width: 100%; background: #000; color: #fff; border: 1px solid #333; padding: 8px;" required>
                        </div>
                    </div>

                    <div style="margin-top: 30px; display: flex; justify-content: space-between;">
                        <button type="button" onclick="showStep1()" class="modal-button" style="background: #444; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;">Vissza a kosárhoz</button>
                        <button type="submit" class="modal-button" style="background: #3cff39; color: #000; font-weight: bold; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;">Rendelés véglegesítése</button>
                    </div>
                </form>
            </div>

        @else
            <div style="text-align: center; padding: 40px; color: white;">
                <p>A kosarad jelenleg üres.</p>
                <a href="{{ route('product.index') }}" class="modal-button" style="text-decoration: none; color: #3cff39;">Vissza a termékekhez</a>
            </div>
        @endif
    </div>
</main>

<script>
    function showStep2() {
        document.getElementById('step-1').style.display = 'none';
        document.getElementById('step-2').style.display = 'block';
    }

    function showStep1() {
        document.getElementById('step-1').style.display = 'block';
        document.getElementById('step-2').style.display = 'none';
    }
</script>
@endsection