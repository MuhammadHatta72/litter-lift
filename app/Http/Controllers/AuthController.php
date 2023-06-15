<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                $request->session()->regenerate();
                toast()->success('Login successful.', 'Success');
                return redirect()->route('dashboard');
            } else {
                $request->session()->regenerate();
                toast()->success('Login successful.', 'Success');
                return redirect()->route('trash-scales.index');
            }
        }

        toast()->error('Login failed, please try again.', 'Error');
        return back()->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toast()->success('Logout successful.', 'Success');
        return redirect('/');
    }

    public function register(StoreRegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
        $request->validated();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => '-',
            'address' => '-',
            'phone' => '08',
            'photo' => 'not_found',
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        toast()->success('Registration successful.', 'Success');
        return redirect()->route('index');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }
}
