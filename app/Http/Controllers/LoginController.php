<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */

    public function showLogin(){
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/status/{id}');
        }
 
        return redirect('/login')->with('msg', 'Senha ou Email inválidos, tente novamente.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();    
        return redirect('/');
    }
}