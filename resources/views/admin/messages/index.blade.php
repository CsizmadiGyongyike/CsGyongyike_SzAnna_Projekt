@extends('layouts.app')

@section('content')
<div class="container" style="padding: 50px 20px; color: white;">
    <h1 style="color: #3cff39; text-align: center;">Beérkező üzenetek</h1>
    <a href="{{ route('admin.dashboard') }}" style="color: #aaa; text-decoration: none;">← Vissza az admin menübe</a>

    <div style="margin-top: 20px; display: grid; gap: 15px;">
        @forelse($messages as $msg)
            <div style="background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333;">
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <strong style="color: #3cff39;">{{ $msg->last_name }} {{ $msg->first_name }}</strong> 
                        <span style="color: #aaa;">({{ $msg->email }})</span>
                    </div>
                    <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:none; border:none; color:#ff4444; cursor:pointer;">Törlés</button>
                    </form>
                </div>
                <p style="margin-top: 10px;">{{ $msg->message }}</p>
                <small style="color: #555;">Küldve: {{ $msg->created_at }}</small>
            </div>
        @empty
            <p>Nincsenek üzenetek.</p>
        @endforelse
    </div>
</div>
@endsection