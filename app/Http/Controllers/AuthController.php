<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Stwórz widok login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard?page=main'); // Po udanym logowaniu, przekieruj użytkownika
        }

        return back()->withErrors([
            'email' => 'Te dane logowania nie pasują do naszych rekordów.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        // $request->session()->invalidate(); // Usunięcie sesji
        // $request->session()->regenerateToken();
        return redirect('/login'); // Przekierowanie po wylogowaniu
    }
}
