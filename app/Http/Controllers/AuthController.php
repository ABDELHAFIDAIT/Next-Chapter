<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\AccountMail;
use Illuminate\Support\Facades\Mail;

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
    
        $user = User::where('email', $credentials['email'])->first();
    
        if ($user && $user->status == 'suspended') {
            return back()->withErrors([
                'status' => 'Vous êtes suspendu pour le moment !'
            ]);
        }
    
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
    
            if(auth()->user()->role == 'admin'){
                return redirect()->intended('/admin/dashboard');
            } elseif(auth()->user()->role == 'teacher'){
                if(auth()->user()->first_login){
                    return redirect()->intended('/password');
                }
                return redirect()->intended('/teacher/dashboard');
            } elseif(auth()->user()->role == 'recruiter'){
                if(auth()->user()->first_login){
                    return redirect()->intended('/password');
                }
                return redirect()->intended('/recruiter');
            } elseif(auth()->user()->role == 'prisonner'){
                if(auth()->user()->first_login){
                    return redirect()->intended('/password');
                }
                return redirect()->intended('/prisonner');
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


    public function generatePassword(){
        $caracters = '0987654321AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghklmwxcvbn&-_)(#{[|`\^@]}*+=';
        $password = '';
        for($i = 0; $i < 10; $i++){
            $password .= $caracters[rand(0, strlen($caracters) - 1)];
        }
        return $password;
    }

    public function createAccount(Request $request){
        $validator = Validator::make($request->all(), [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'role' => 'required|string|in:teacher,recruiter,prisonner',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $email = $request->input('email');
        $role = $request->input('role');
        
        $password = $this->generatePassword();
        $hashedPassword = bcrypt($password);

        $user = User::create([
            'f_name' => $f_name,
            'l_name' => $l_name,
            'email' => $email,
            'photo' => 'storage/images/user.png',
            'password' => $hashedPassword,
            'role' => $role,
        ]);

        if($user){
            Mail::to($email)->send(new AccountMail($email, $password));
            return redirect()->back()->with('success', 'Account created successfully. An email has been sent to the user with the password.');
        }
    }

    public function showChangePassword(){
        return view('pages.change-password');
    }

    public function changePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->first_login = false;
        $user->save();

        if($user->role == 'recruiter'){
            return redirect()->route('recruiter');
        }else if($user->role == 'teacher'){
            return redirect()->route('teacher.update.profile');
        }else if($user->role == 'prisonner'){
            return redirect()->route('prisonner.update.profile');
        }

    }
}
