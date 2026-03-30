@extends('layouts.app')

@section('content')
<div class="container" style="padding: 50px 20px; color: white;">
    <h1 style="color: #3cff39; text-align: center;">Termék Szerkesztése</h1>
    <a href="{{ route('admin.products.index') }}" style="color: #aaa; text-decoration: none;">← Vissza a listához</a>

    <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333; margin-top: 20px;">
        {{-- FONTOS: PUT metódus kell a frissítéshez! --}}
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                <div>
                    <label>Termék neve:</label>
                    <input type="text" name="name" value="{{ $product->name }}" required style="width:100%; padding: 10px; background: #000; color: white; border: 1px solid #333;">
                </div>
                
                <div>
                    <label>Kategória:</label>
                    <select name="category_id" required style="width:100%; padding: 10px; background: #000; color: white; border: 1px solid #333;">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Ár (Ft):</label>
                    <input type="number" name="price" value="{{ $product->price }}" required style="width:100%; padding: 10px; background: #000; color: white; border: 1px solid #333;">
                </div>

                <div>
                    <label>Készlet (db):</label>
                    <input type="number" name="stock" value="{{ $product->stock }}" required style="width:100%; padding: 10px; background: #000; color: white; border: 1px solid #333;">
                </div>
                
                <div style="grid-column: span 2;">
                    <label>Leírás:</label>
                    <textarea name="description" style="width:100%; padding: 10px; background: #000; color: white; border: 1px solid #333; height: 100px;">{{ $product->description }}</textarea>
                </div>

                <div style="grid-column: span 2;">
                    <p>Jelenlegi kép:</p>
                    <img src="{{ asset($product->image) }}" width="150" style="border-radius: 5px; margin-bottom: 10px;">
                    <br>
                    <label>Új kép feltöltése (hagyd üresen, ha nem akarod módosítani):</label>
                    <input type="file" name="image" style="color: #aaa;">
                </div>
            </div>

            <button type="submit" style="margin-top: 20px; width: 100%; background: #3cff39; color: black; font-weight: bold; padding: 12px; border: none; border-radius: 5px; cursor: pointer;">
                Módosítások mentése
            </button>
        </form>
    </div>
</div>
@endsection