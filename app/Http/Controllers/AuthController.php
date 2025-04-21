<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            if(auth()->user()->role == 'admin' && auth()->user()->status == 'active'){
                return redirect()->intended('/admin');
            }else if(auth()->user()->role == 'teacher' && auth()->user()->status == 'active'){
                return redirect()->intended('/teacher');
            }else if(auth()->user()->role == 'recruiter' && auth()->user()->status == 'active'){
                return redirect()->intended('/recruiter');
            }else if(auth()->user()->role == 'prisonner' && auth()->user()->status == 'active'){
                return redirect()->intended('/prisonner');
            }else if(auth()->user()->status == 'suspended'){
                return redirect()->back()->withErrors([
                    'Status' => 'Vous êtes Suspendu pour le Moment !'
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
