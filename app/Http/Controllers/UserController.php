<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if(Auth::check()){
            if(auth()->user()->type == 'ADM'){
                $users  = User::all();
                return view('Admin.UserList')->with('users', $users);
            }else{
                return redirect('/home')->with('error', 'You are not an admin');
            }
        }else{
                return redirect('/home')->with('error', 'You are not an admin');

            }
    }
    public function store(Request $request){
      if(auth()->user()->id != $request->Id){
        if($request->typec == "ADMC"){
            $id = $request->Id;
            $user = User::find($id);
            $user->type = "ADM";
            $user->save();
            return back();

        }
        if($request->typec == ""){
            $id = $request->Id;
            $user = User::find($id);
            $user->type = "USR";
            $user->save();
            return back();

        }
    }else{
        return back()->with('error', 'You cannot change your type');
    }
        
    }

}
