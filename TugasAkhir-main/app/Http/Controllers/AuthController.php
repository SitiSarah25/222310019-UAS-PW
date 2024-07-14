<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        // Validate the request data
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // $validated["password"] = Hash::make($request->password);

        // Attempt to log in
        $authAttempt = Auth::attempt($validated);

        // dd($authAttempt);

        if ($authAttempt) {
            return redirect()->route('dashboard.admin');
        }

        // Flash login error message
        session()->flash('loginError', 'Email or password is incorrect.');

        // Redirect back with input
        return redirect()->back()->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate and regenerate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
