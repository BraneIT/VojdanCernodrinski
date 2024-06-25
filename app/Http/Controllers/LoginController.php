<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin(){
        return view('login.login');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required',],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = User::where('username', $request->username)->first();
            $token = $user->createToken('AdminToken')->plainTextToken;
            $user->remember_token = $token;
            $request->session()->put('auth_token', $token);
            return redirect('/admin');
        }
        return back()->withErrors([
            'login' => 'Invalid username or password.',
        ])->withInput($request->only('email'));
    }
    

    public function logout(Request $request){
        $user = Auth::user();
        $user->tokens->each->delete();
        Auth::logout();
        $request->session()->invalidate();
    
    // Regenerate the CSRF token to avoid CSRF attacks
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
