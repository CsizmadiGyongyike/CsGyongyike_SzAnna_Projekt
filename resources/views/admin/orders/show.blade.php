@extends('layouts.app')

@section('content')
    <div class="container" style="padding: 50px 20px; color: white;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h1>Rendelés #{{ $order->id }}</h1>
            <a href="{{ route('order.index') }}" style="color: #aaa; text-decoration: none;">← Vissza a listához</a>
        </div>

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin-top: 20px; align-items: stretch;">

            {{-- Terméklista --}}
            <div
                style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333; display: flex; flex-direction: column;">
                <h3 style="color: #3cff39; margin-bottom: 20px;">Rendelt termékek</h3>
                <form action="{{ route('order.update', $order->id) }}" method="POST" id="main-order-form">
                    @csrf
                    @method('PUT')
                    <table style="width: 100%; border-collapse: collapse;" id="order-items-table">
                        <thead>
                            <tr style="border-bottom: 1px solid #444; color: #888; text-align: left;">
                                <th style="padding: 10px;">Termék</th>
                                <th style="padding: 10px;">Mennyiség</th>
                                <th style="padding: 10px;">Részösszeg</th>
                                <th style="padding: 10px; text-align: center;">Törlés</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderItems as $item)
                                <tr style="border-bottom: 1px solid #222;" class="order-item-row">
                                    <td style="padding: 15px 10px;">
                                        <strong>{{ $item->product->name }}</strong><br>
                                        <small style="color: #666;">Egységár: <span
                                                class="unit-price">{{ $item->unit_price }}</span> Ft</small>
                                    </td>
                                    <td>
                                        <input type="number" name="items[{{ $item->id }}]"
                                            value="{{ $item->quantity }}" min="1" oninput="updateTotal()"
                                            class="item-quantity"
                                            style="width: 50px; background: #000; color: white; border: 1px solid #3cff39; padding: 5px; border-radius: 5px; text-align: center;">
                                    </td>
                                    <td style="color: #eee;">
                                        <span
                                            class="item-subtotal">{{ number_format($item->unit_price * $item->quantity, 0, ',', ' ') }}</span>
                                        Ft
                                    </td>
                                    <td style="text-align: center;">
                                        <button type="button"
                                            onclick="if(confirm('Biztosan eltávolítod ezt a terméket a rendelésből?')) { document.getElementById('delete-item-{{ $item->id }}').submit(); }"
                                            style="background:none; border:none; color:#ff4444; cursor:pointer;">
                                            Törlés
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" style="padding-top: 20px; font-weight: bold; font-size: 1.2em;">Összesen:
                                </td>
                                <td colspan="2"
                                    style="padding-top: 20px; text-align: right; font-weight: bold; color: #3cff39; font-size: 1.5em;">
                                    <span id="grand-total">{{ number_format($order->amount, 0, ',', ' ') }}</span> Ft
                                </td>
                            </tr>
                        </tfoot>
                    </table>
            </div>

            <div style="display: flex; flex-direction: column; justify-content: center;">

                {{-- Szállítási cím kártya --}}
                <div
                    style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #3cff39; margin-bottom: 20px;">
                    <h3 style="color: #3cff39; margin-top: 0;">Szállítási cím</h3>
                    @if ($order->address)
                        <div style="margin-top: 15px;">
                            <input type="hidden" name="type" value="{{ $order->address->type }}">

                            <p style="color: #888; font-size: 0.85em; margin-bottom: 10px; text-transform: uppercase;">
                                Vásárló típusa:
                                <strong>{{ $order->address->type == 'business' ? 'Cég' : 'Magánszemély' }}</strong>
                            </p>

                            @if ($order->address->type == 'business')
                                <div style="margin-bottom: 15px;">
                                    <input type="text" name="tax_number" value="{{ $order->address->tax_number }}"
                                        placeholder="Adószám"
                                        style="width: 100%; background: #000; color: white; border: 1px solid #444; padding: 10px; border-radius: 5px; font-weight: bold;">
                                </div>
                            @endif

                            <div style="margin-bottom: 15px;">
                                <input type="text" name="postcode" value="{{ $order->address->city }}"
                                    placeholder="Város"
                                    style="background: #000; color: white; border: 1px solid #333; padding: 8px; border-radius: 5px;">
                            </div>

                            <div style="margin-bottom: 15px;">
                                <input type="text" name="city" value="{{ $order->address->postcode }}"
                                    placeholder="Ir. szám"
                                    style="background: #000; color: white; border: 1px solid #333; padding: 8px; border-radius: 5px;">
                            </div>

                            <div style="margin-bottom: 15px;">
                                <textarea name="address" rows="2" placeholder="Utca, házszám"
                                    style="width: 100%; background: #000; color: white; border: 1px solid #333; padding: 8px; border-radius: 5px;">{{ $order->address->address }}</textarea>
                            </div>
                        </div>
                    @endif
                </div>

                <div
                    style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333; margin-bottom: 20px;">
                    <h3 style="color: #3cff39; margin-top: 0;">Rendelés állapota</h3>
                    <select name="status"
                        style="width: 100%; padding: 10px; background: #000; color: white; border: 1px solid #333; margin: 15px 0;">
                        <option value="Feldolgozás alatt" {{ $order->status == 'Feldolgozás alatt' ? 'selected' : '' }}>
                            Feldolgozás alatt</option>
                        <option value="Kiszállítás alatt" {{ $order->status == 'Kiszállítás alatt' ? 'selected' : '' }}>
                            Kiszállítás alatt</option>
                        <option value="Teljesítve" {{ $order->status == 'Teljesítve' ? 'selected' : '' }}>Teljesítve
                        </option>
                        <option value="Törölve" {{ $order->status == 'Törölve' ? 'selected' : '' }}>Törölve</option>
                    </select>

                    <button type="submit" form="main-order-form"
                        style="width: 100%; background: #3cff39; color: black; padding: 12px; border: none; font-weight: bold; cursor: pointer; border-radius: 5px; transition: 0.2s;">
                        MÓDOSÍTÁSOK MENTÉSE
                    </button>
                </div>
                </form>

                <div style="background: #1a1a1a; padding: 15px; border-radius: 10px; border: 1px solid #4d1a1a;">
                    <form action="{{ route('order.destroy', $order->id) }}" method="POST"
                        onsubmit="return confirm('FIGYELEM! Biztosan törölni akarod a TELJES rendelést? Ez a művelet nem vonható vissza!')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            style="width: 100%; background: none; color: #ff4d4d; border: 1px solid #ff4d4d; padding: 10px; cursor: pointer; border-radius: 5px; font-weight: normal; font-size: 0.9em;">
                            Egész rendelés törlése
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateTotal() {
            let grandTotal = 0;
            const rows = document.querySelectorAll('.order-item-row');

            rows.forEach(row => {
                const unitPrice = parseFloat(row.querySelector('.unit-price').innerText.replace(/\s/g, ''));
                const quantity = parseInt(row.querySelector('.item-quantity').value) || 0;
                const subtotal = unitPrice * quantity;

                row.querySelector('.item-subtotal').innerText = subtotal.toLocaleString('hu-HU');
                grandTotal += subtotal;
            });

            document.getElementById('grand-total').innerText = grandTotal.toLocaleString('hu-HU');
        }
    </script>

    @foreach ($order->orderItems as $item)
        <form id="delete-item-{{ $item->id }}" action="{{ route('order.item.destroy', [$order->id, $item->id]) }}"
            method="POST" style="display:none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
@endsection
