<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use Session;
use App\Models\Cart;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            if(auth()->user()->type == 'ADM'){
        $products = Product::orderBy('type','asc')->get();
        return view('Admin.AdminMenuItems.AdminProduct')->with('products',$products);
        }else{
            return redirect('/home')->with('error', 'Admin ho ra ta');
        }
    }else{
        return redirect('/home')->with('error', 'Admin ho ra ta');

    }
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            if(auth()->user()->type == 'ADM'){
                return view('Admin.AdminMenuItems.AdminCreate');

            }else{
                return redirect('/home')->with('error', 'You are not an admin');
            }
        }else{
                return redirect('/home')->with('error', 'You are not an admin');

            }
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'type' => 'required',
            'image' => 'required'

        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->type = $request->input('type');
        //for image

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }else{
            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect('/products')->with('success','Product Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()){
            if(auth()->user()->type == 'ADM'){
                $product = Product::find($id);
                return view('Admin.AdminMenuItems.AdminEdit')->with('product',$product);
            }else{
                return redirect('/home')->with('error', 'You are not an admin');
            }
        }else{
                return redirect('/home')->with('error', 'You are not an admin');

            }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'type' => 'required',
            'image' => 'required'

        ]);

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->type = $request->input('type');
        //for image

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
            $old_image = $request->input('old_image');
            $old_image_path = public_path('uploads/product/' .$old_image);
            unlink($old_image_path);
        }else{
            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect('/products')->with('success','Product Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $old_image=$product->image;
        $old_image_path = public_path('uploads/product/' .$old_image);
        unlink($old_image_path);
        $product->delete();
        return redirect('/products')->with('success','Product Deleted Successfully');
    }

    
}
