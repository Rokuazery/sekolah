<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // startup function
    public function create()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('register');
        }
    }

}
