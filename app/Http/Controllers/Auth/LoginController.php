<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Customer.auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('error', 'Invalid Login Credentials');
        }
        $type = auth()->user()->type;
        if($type == "ADM"){
        return redirect()->route('adminDashboard'); 
        }else{
            return redirect()->route('home');  
        }
    }
}
