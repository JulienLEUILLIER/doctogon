<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function index() {

        if (auth()->user()) {
            return view('appointments');
        } else {
            return redirect()->route('login');
        }
    }
}
