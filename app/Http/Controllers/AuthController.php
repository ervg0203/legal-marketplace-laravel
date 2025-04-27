<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LegalWorker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        if ($request->role === 'legal_worker') {
            LegalWorker::create([
                'user_id' => $user->id,
                'role' => $request->input('worker_role'),
                'specialization' => $request->input('specialization'),
                'location' => $request->input('location'),
                'contact' => $request->email,
                'phone' => $request->input('phone'),
                'image' => $request->input('image'),
            ]);
        }

        Auth::login($user);
        return redirect('/dashboard');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}