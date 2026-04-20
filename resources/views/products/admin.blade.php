@extends('layouts.app')

@section('content')
<div class="container" style="padding: 50px 20px; color: white;">
    <h1 style="color: #3cff39; text-align: center;">Termékek Kezelése</h1>
    <a href="{{ route('admin.dashboard') }}" style="color: #aaa; text-decoration: none;">← Vissza az admin menübe</a>
    {{-- Új termék űrlap --}}
    <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333; margin-bottom: 30px;">
        <h4 style="color: #3cff39;">Új termék hozzáadása</h4>
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                <input type="text" name="name" placeholder="Termék neve" required style="padding: 10px; background: #000; color: white; border: 1px solid #333;">
                
                <select name="category_id" required style="padding: 10px; background: #000; color: white; border: 1px solid #333;">
                    <option value="">Válassz kategóriát...</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <input type="number" name="price" placeholder="Ár (Ft)" required style="padding: 10px; background: #000; color: white; border: 1px solid #333;">
                <input type="number" name="stock" placeholder="Készlet" required style="padding: 10px; background: #000; color: white; border: 1px solid #333;">
                
                <input type="file" name="image" style="grid-column: span 2; color: #aaa;">
                
                <textarea name="description" placeholder="Leírás" style="grid-column: span 2; padding: 10px; background: #000; color: white; border: 1px solid #333; height: 80px;"></textarea>
            </div>
            <button type="submit" class="modal-button" style="margin-top: 15px; width: 100%;">Mentés</button>
        </form>
    </div>

    {{-- Termék lista --}}
    <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid #3cff39; text-align: left;">
                    <th>Kép</th>
                    <th>Név</th>
                    <th>Ár</th>
                    <th>Készlet</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr style="border-bottom: 1px solid #333;">
                    <td><img src="{{ asset($product->image) }}" width="50" style="border-radius: 5px;"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price, 0, ',', ' ') }} Ft</td>
                    <td>{{ $product->stock }} db</td>
                    <td>
                    {{-- SZERKESZTÉS GOMB --}}
                        <form action="{{ route('admin.products.edit', $product->id) }}">
                            <button type="submit" style="background:none; border:none; color:#e5ff39; cursor:pointer; font-weight: bold;">
                                Szerkesztés
                            </button>
                        </form>

                    {{-- TÖRLÉS GOMB --}}
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Biztos törlöd?')">
                        @csrf
                        @method('DELETE')
                            <button type="submit" style="background:none; border:none; color:#ff4444; cursor:pointer; font-weight: bold;">
                                Törlés
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection