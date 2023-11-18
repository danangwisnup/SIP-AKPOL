<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        // Jika sudah login, redirect ke dashboard
        if (Auth::check()) {
            return redirect()->route('dahsboard');
        } else {
            // Jika belum login, tampilkan halaman login
            return view('auth.login', [
                'title' => 'Login'
            ]);
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'identifier' => 'required|string',
            'password' => 'required',
        ]);

        if (filter_var($credentials['identifier'], FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $credentials['identifier'];
            unset($credentials['identifier']);
        } else {
            $credentials['username'] = $credentials['identifier'];
            unset($credentials['identifier']);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'identifier' => 'Error! Terjadi kesalahan saat login. Silahkan coba lagi.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
