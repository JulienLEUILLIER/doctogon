<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\VerificationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailVerificationController extends Controller
{
    public function notice() {
        if (auth()->user()->email_verified_at) {
            return redirect()->route('home');
        }
        return view('auth.verify');
    }

    public function verify($id, $activation_code) {
        $user = User::find($id);

        if (!now() > $user->activation_expiry) {
            return redirect()->route('expired');
        }

        if ($user->activation_code === $activation_code) {
            
            $user->email_verified_at = now();
            $user->active = 1;
            $user->save();
    
            return redirect()->route('home');
        }

        return response(null, 409);
    }

    public function send() {
        Mail::to(auth()->user())->send(new VerificationMail(auth()->user()));

        return redirect()->route('login');
    }
}
