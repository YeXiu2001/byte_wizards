<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'member';

        $user->save();

        return back()->with('success', 'Registered');
    }

    public function login()
    {
        return view('/register'); 
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Get the authenticated user
            if ($user->role === 'member') {
                return redirect()->route('userfeedback.home')->with('success', 'Logged in successfully.');
            } elseif ($user->role === 'ethics_com') {
                return redirect()->route('ethicsCom.home')->with('success', 'Logged in successfully.');
            }elseif ($user->role === 'internal_audit') {
                return redirect()->route('complaintsIA.home')->with('success', 'Logged in successfully.');
            } else {
                Auth::logout(); 
                return back()->with('error', 'You do not have permission to access this page.');
            }
        }

        return back()->with('error', 'Invalid email or password.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
