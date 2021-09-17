<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Order;
use App\Models\Cart;
use Auth;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // dd(Auth::user()->name);

        $order = new Order();
            $order->deliveryaddress =  Auth::user()->deliveryaddress;
            $order->phone = Auth::user()->phone;
            $order->name = Auth::user()->name;
            $order->cart = serialize($cart);
            Auth::user()->orders()->save($order);
            Session::forget('cart');

        return redirect()->route('home')->with('success', 'Your order has been completed. We will call you soon'); 
    }

    public function myOrder($id)
    {
        $orders = Order::where('user_id', $id)->orderBy('id', 'desc')->get();
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('Customer.MenuItems.myOrder')->with('orders', $orders);
    }
}
