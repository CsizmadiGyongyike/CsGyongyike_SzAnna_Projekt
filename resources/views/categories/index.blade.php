@extends('layouts.app')

@section('content')
<div class="container" style="padding: 50px 20px; color: white;">
    <h1 style="color: #3cff39; text-align: center; margin-bottom: 30px;">Kategóriák Kezelése</h1>

    {{-- Új kategória hozzáadása --}}
    <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333; margin-bottom: 30px;">
        <h4 style="color: #3cff39;">Új kategória</h4>
        <form action="{{ route('category.store') }}" method="POST" style="display: flex; gap: 10px;">
            @csrf
            <input type="text" name="name" placeholder="Kategória neve" required 
                   style="flex-grow: 1; padding: 10px; border-radius: 5px; border: 1px solid #333; background: #000; color: white;">
            <button type="submit" class="modal-button">Hozzáadás</button>
        </form>
    </div>

    {{-- Kategóriák táblázata --}}
    <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid #3cff39; text-align: left;">
                    <th style="padding: 10px;">ID</th>
                    <th style="padding: 10px;">Név</th>
                    <th style="padding: 10px; text-align: center;">Műveletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr style="border-bottom: 1px solid #333;">
                    <td style="padding: 10px;">#{{ $category->id }}</td>
                    <td style="padding: 10px;">{{ $category->name }}</td>
                    <td style="padding: 10px; text-align: center;">
                        {{-- Törlés gomb --}}
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Biztosan törlöd?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: #ff4444; cursor: pointer; font-weight: bold;">Törlés</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection