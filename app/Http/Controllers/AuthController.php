<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Login users
     */
    public function Authenticate(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('failedLogin', "Login failed");
    }

    /**
     * Register User
     */
    public function Register(Request $request) {
        // controller to user register
        $validatedData = $request->validate([
            'username' => 'required|unique:users|min:3|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8|max:255'
        ]);

        // hash password input
        $validatedData["password"] = Hash::make($validatedData["password"]);
        User::create($validatedData);

        $request->session()->flash('success', 'Successfully register, please login now');
        return redirect("/login");
    }

    /**
     * Logut user
     */
    public function Logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
