<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Question;
use Auth;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home(){
        return view('Customer.MenuItems.home');
    }
    public function insecticides()
    {
        $products = Product::where('type','Insecticides')->get();
        return view('Customer.MenuItems.insecticides')->with('products',$products);
    }
    public function pesticides(){
        $products = Product::where('type','Pesticides')->get();
        return view('Customer.MenuItems.pesticides')->with('products',$products);
    }
    public function seeds(){
        $products = Product::where('type','Seeds')->get();
        return view('Customer.MenuItems.seeds')->with('products',$products);
    }
    public function forum(){
        $questions = Question::orderBy('created_at','desc')->get();
        return view('Customer.MenuItems.forum')->with('questions',$questions);
    }
    public function aboutus(){
        return view('Customer.MenuItems.aboutus');
    }
    public function adminDashboard(){
        if(Auth::check()){
        if(auth()->user()->type == 'ADM'){
        return view('Admin.AdminMenuItems.Admindashboard');
        }else{
            return redirect('/home')->with('error', 'Admin ho ra ta');
        }
    }else{
        return redirect('/home')->with('error', 'Admin ho ra ta');

    }
    }
    public function adminOrder(){
        if(Auth::check()){
       if(auth()->user()->type == 'ADM'){
             $orders = Order::orderBy('id', 'desc')->get();
            $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('Admin.AdminMenuItems.AdminOrder', ['orders' => $orders]);
            }else{
                return redirect('/home')->with('error', 'You are not Admin');

            }
        }else{
            return redirect('/home')->with('error', 'You are not Admin');

        }
        
    }
}
