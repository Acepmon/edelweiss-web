<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('index');
        }

        return view('account.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $remember = $request->has('remember');
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->route('index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
    {
        return view('account.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['nullable', 'string', 'max:250'],
            'last_name' => ['nullable', 'string', 'max:250'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        $user = new User([
            'first_name'  => $request->input('first_name'),
            'last_name'  => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'agreed_marketing_email' => true,
            'tax_exempt' => false,
        ]);

        if ($user->save()) {
            $user->customer()->create([
                'first_name'  => $request->input('first_name'),
                'last_name'  => $request->input('last_name'),
                'email' => $request->input('email'),
                'agreed_marketing_email' => true,
                'tax_exempt' => false,
                'subscription_status_cd' => '30',
                'account_status_cd' => '10'
            ]);

            return redirect()->route('login')->with('success', 'Successfully registered!');
        } else {
            return redirect()->back(422)->with('error', 'Failed to register!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('account.profile');
    }

    public function settings(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('account.settings');
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => ['nullable', 'string', 'max:250'],
            'last_name' => ['nullable', 'string', 'max:250'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::id()],
        ]);

        $user = Auth::user();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        if ($user->save()) {
            $user->customer()->update([
                'first_name'  => $request->input('first_name'),
                'last_name'  => $request->input('last_name'),
                'email' => $request->input('email'),
            ]);

            return redirect()->back()->with('success', 'Successfully saved!');
        } else {
            return redirect()->back(422)->with('error', 'Failed to save!');
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:6'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->input('password'));

        if ($user->save()) {
            return redirect()->back()->with('success', 'Successfully changed password!');
        } else {
            return redirect()->back(422)->with('error', 'Failed to changed password!');
        }
    }
}
