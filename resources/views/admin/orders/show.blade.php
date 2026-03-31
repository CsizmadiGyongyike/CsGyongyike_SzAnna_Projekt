@extends('layouts.app')

@section('content')
<div class="container" style="padding: 50px 20px; color: white;">
    <h1>Rendelés #{{ $order->id }}</h1>
    <a href="{{ route('order.index') }}" style="color: #aaa; text-decoration: none;">← Vissza a listához</a>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin-top: 20px;">
        {{-- Termékek listája --}}
        <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333;">
            <h3 style="color: #3cff39;">Rendelt termékek</h3>
            <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                @foreach($order->orderItems as $item)
                <tr style="border-bottom: 1px solid #222;">
                    <td style="padding: 10px;">{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }} db</td>
                    <td style="text-align: right;">{{ number_format($item->unit_price * $item->quantity, 0, ',', ' ') }} Ft</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="2" style="padding-top: 15px; font-weight: bold;">Összesen:</td>
                    <td style="padding-top: 15px; text-align: right; font-weight: bold; color: #3cff39;">{{ number_format($order->amount, 0, ',', ' ') }} Ft</td>
                </tr>
            </table>
        </div>

        {{-- Státusz állítása --}}
        <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333;">
            <h3 style="color: #3cff39;">Státusz módosítása</h3>
            <form action="{{ route('order.update', $order->id) }}" method="POST" style="margin-top: 15px;">
                @csrf
                @method('PUT')
                <select name="status" style="width: 100%; padding: 10px; background: #000; color: white; border: 1px solid #333; margin-bottom: 10px;">
                    <option value="Feldolgozás alatt" {{ $order->status == 'Feldolgozás alatt' ? 'selected' : '' }}>Feldolgozás alatt</option>
                    <option value="Kiszállítás alatt" {{ $order->status == 'Kiszállítás alatt' ? 'selected' : '' }}>Kiszállítás alatt</option>
                    <option value="Teljesítve" {{ $order->status == 'Teljesítve' ? 'selected' : '' }}>Teljesítve</option>
                    <option value="Törölve" {{ $order->status == 'Törölve' ? 'selected' : '' }}>Törölve</option>
                </select>
                <button type="submit" style="width: 100%; background: #3cff39; color: black; border: none; padding: 10px; font-weight: bold; cursor: pointer;">Mentés</button>
            </form>
        </div>
    </div>
</div>
@endsection