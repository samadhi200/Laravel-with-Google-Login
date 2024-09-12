<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User;
use Auth;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');  // Ensure this view file exists
    }

    // Redirect to Google login page
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle the Google login callback
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('/home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make('google'),  
                ]);

                Auth::login($newUser);
                return redirect()->intended('/home');
            }
        } catch (Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            return redirect('/login')->with('error', 'Login failed. Please try again.');
        }
    }
}
