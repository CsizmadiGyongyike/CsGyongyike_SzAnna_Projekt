<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index(){
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('admin.messages.index', compact('messages'));
    }

    public function store(Request $request){
        $messages = [
        'required' => 'A(z) :attribute mezőt kötelező kitölteni.',
        'email'    => 'Érvényes e-mail címet adj meg!',
        'max'      => 'A(z) :attribute túl hosszú.',
        'min'      => 'A(z) :attribute legalább :min karakter legyen.',
    ];

    $attributes = [
        'nev1'   => 'Vezetéknév',
        'nev2'   => 'Keresztnév',
        'email'  => 'Email',
        'uzenet' => 'Üzenet',
    ];


        $request->validate([
            'nev1' => 'required|max:255',
            'nev2'   => 'required|max:255',
            'email'  => 'required|email',
            'uzenet' => 'required|min:5',
        ], $messages, $attributes);

        Message::create([
            'last_name'  => $request->nev1,
            'first_name' => $request->nev2,
            'email'      => $request->email,
            'message'    => $request->uzenet,
        ]);

        return back()->with('success', 'Köszönjük! Az üzenetet rögzítettük.');
    }

    public function destroy(Message $message){
        $message->delete();
        return back()->with('success', 'Üzenet törölve!');
    }
}
