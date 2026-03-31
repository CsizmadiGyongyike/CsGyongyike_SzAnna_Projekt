@extends('layouts.app')

@section('content')
<div class="container" style="padding: 50px 20px; color: white;">
    <h1 style="color: #3cff39; text-align: center;">Rendelések kezelése</h1>
    <a href="{{ route('admin.dashboard') }}" style="color: #aaa; text-decoration: none;">← Vissza az admin menübe</a>

    <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333; margin-top: 20px;">
        <table style="width: 100%; border-collapse: collapse; color: white;">
            <thead>
                <tr style="border-bottom: 2px solid #3cff39; text-align: left;">
                    <th style="padding: 10px;">ID</th>
                    <th>Vásárló</th>
                    <th>Dátum</th>
                    <th>Összeg</th>
                    <th>Státusz</th>
                    <th>Művelet</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr style="border-bottom: 1px solid #333;">
                    <td style="padding: 10px;">#{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->created_at->format('Y.m.d H:i') }}</td>
                    <td>{{ number_format($order->amount, 0, ',', ' ') }} Ft</td>
                    <td>
                        <span style="color: {{ $order->status == 'Teljesítve' ? '#3cff39' : '#ffcc00' }};">
                            {{ $order->status }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('order.show', $order->id) }}" style="color: #3cff39; text-decoration: none;">Részletek</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection