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

        {{-- Rendelések kártya (ha van már OrderController-ed) --}}
        <a href="{{ route('order.index') }}" style="text-decoration: none; color: white;">
            <div style="background: #1a1a1a; padding: 30px; border-radius: 15px; border: 1px solid #3cff39; text-align: center; transition: 0.3s;" onmouseover="this.style.background='#222'" onmouseout="this.style.background='#1a1a1a'">
                <h2 style="color: #3cff39;">Rendelések</h2>
                <p>Beérkezett vásárlások áttekintése</p>
            </div>
        </a>

    </div>
</div>
@endsection