<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm(){
        
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login.loginForm');
    }
    public function login( Request $request): RedirectResponse{
        
 
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        
        $user = User::where('email', $request->email)->first();
        /*
        if ($user) {
        // If password is MD5, rehash it
        if (strlen($user->password) === 32) {  // MD5 hash length
            if (md5($request->password) === $user->password) {
                $user->password = bcrypt($request->password);
                $user->save();
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('/admin6688/post');
            }
        } else {
            // Regular bcrypt check
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('/admin6688/post');
            }
        }
        }
        */
        
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/admin6688/post');
        }
        
        return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }

    public function logout(): RedirectResponse{
        Auth::logout();
        return redirect('/');
    }
}
