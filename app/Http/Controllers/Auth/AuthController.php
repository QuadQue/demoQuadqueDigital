<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //sugn up
    public function signup(Request $request)
    {
        $request->validate([

            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|min:6',

        ], [
            'name.required' => 'Register form name field is required',
            'email.required' => 'Register form email field is required',
            'password.required' => 'Register form password field is required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $inserted = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'is_admin' => 0
        ]);

        if ($inserted) {

            return back()->with('success', 'Admin has been registered successfully.but pending...');
        } else {

            return back()->with('fail', 'There  have some problem...');
        }
    }

    /**
     * 
     * Login
     * 
     */

    public function loginCheck(Request $request)
    {

        $request->validate(
            [


                'email' => 'required|exists:users',
                'password' => 'required',

            ],
            [

                'email.required' => 'Login form email field is required',
                'password.required' => 'Login form password field is required',
            ]
        );


        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'is_admin' => 1])) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'fail' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
