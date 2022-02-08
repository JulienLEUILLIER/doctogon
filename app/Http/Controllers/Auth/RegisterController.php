<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|max:255|confirmed',
        ]);

        $activation_code = str_replace('/', '', Hash::make($request->password));

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'activation_code' => $activation_code,
            'activation_expiry' => now()->addDay(),
        ]);

        Auth::login($user, $request->remember);

        Mail::to($user)->send(new VerificationMail($user));

        return redirect()->route('verification.notice');
    }
}
