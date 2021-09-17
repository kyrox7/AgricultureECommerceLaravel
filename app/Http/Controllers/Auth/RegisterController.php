<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Customer.auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'deliveryaddress' => 'required',
            'phone' => 'required|digits_between:10,10',
            

        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'deliveryaddress' => $request->deliveryaddress,
            'phone' => $request->phone,
        ]);

        //Sign In
            auth()->attempt($request->only('email', 'password'));
            

        return redirect()->route('home');
       
    }
}
