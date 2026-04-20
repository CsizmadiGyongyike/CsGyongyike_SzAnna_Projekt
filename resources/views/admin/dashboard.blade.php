@extends('layouts.app')

@section('content')
<div class="container" style="padding: 50px 20px; color: white;">
    <h1 style="color: #3cff39; text-align: center; margin-bottom: 40px;">Admin Vezérlőpult</h1>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        
        {{-- Kategóriák kártya --}}
        <a href="{{ route('category.index') }}" style="text-decoration: none; color: white;">
            <div style="background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #3cff39; text-align: center; transition: 0.3s;" onmouseover="this.style.background='#222'" onmouseout="this.style.background='#1a1a1a'">
                <h2 style="color: #3cff39;">Kategóriák</h2>
                <p>Új kategóriák felvétele és törlése</p>
            </div>
        </a>

        {{-- Termékek kártya --}}
        <a href="{{ route('admin.products.index') }}" style="text-decoration: none; color: white;">
            <div style="background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #3cff39; text-align: center; transition: 0.3s;" onmouseover="this.style.background='#222'" onmouseout="this.style.background='#1a1a1a'">
                <h2 style="color: #3cff39;">Termékek</h2>
                <p>Készletkezelés, árak és leírások</p>
            </div>
        </a>

        {{-- Rendelések kártya --}}
        <a href="{{ route('order.index') }}" style="text-decoration: none; color: white;">
            <div style="background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #3cff39; text-align: center; transition: 0.3s;" onmouseover="this.style.background='#222'" onmouseout="this.style.background='#1a1a1a'">
                <h2 style="color: #3cff39;">Rendelések</h2>
                <p>Beérkezett vásárlások áttekintése</p>
            </div>
        </a>

        {{-- Üzenetek kártya  --}}
        <a href="{{ route('admin.messages.index') }}" style="text-decoration: none; color: white;">
            <div style="background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #3cff39; text-align: center; transition: 0.3s; position: relative;">
                @if($unreadMessagesCount > 0)
                    <span style="position: absolute; top: -10px; right: -10px; background: #007bff; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 14px; box-shadow: 0 0 10px rgba(0,123,255,0.5);">
                        {{ $unreadMessagesCount }} db
                    </span>
                @endif
                <h2 style="color: #3cff39;">Üzenetek</h2>
                <p>Vásárlói megkeresések</p>
            </div>
        </a>

    </div>
</div>
@endsection