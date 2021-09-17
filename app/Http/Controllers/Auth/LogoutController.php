<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LogoutController extends Controller
{
    public function store(Request $request)
    {
        Session::forget('cart');
        auth()->logout();

        return redirect()->route('home');
    }
    
}
