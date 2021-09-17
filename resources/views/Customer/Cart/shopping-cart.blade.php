@extends('Customer.layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/customerproducttable.css') }}">

</head>
<body>
    
@section('content')

    @if(Session::has('cart'))
    <h1 class="justify-center">Your Shopping Cart</h1>
                <h2 class="mt-5 ml-4 text-white">Total Price: {{ $totalPrice }}</h2>
        <hr>
        <div class="row">
                <a  href=" {{ route('order') }}" type="button" class="btn btn-success text-white" style="margin-left:50px; font-size:25px;">Confirm Order</a>
            </div>
        </div>
    <div class="tbl-header mt-4">
    <table cellpadding="0" cellspacing="0" border="2">
      <thead>
        <tr>
        <th class="text-center">Image</th>
          <th class="text-center">Name</th>
          <th class="text-center">Type</th>
          <th class="text-center">Quantity</th>
          <th class="text-center">Total Price</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
        <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><img src="{{ asset('uploads/product/' . $product['item']['image']) }}" alt="Loading" height="200px" width="200px"></td>
                        <td>{{ $product['item']['name'] }}</td>
                        <td>{{ $product['item']['type'] }}</td>
                        <td>{{ $product['qty'] }}</td>
                        <td>{{ $product['price'] }}</td>
                        <td>
                            <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}" class="btn btn-primary">Reduce by 1</a></li>
                            <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" class="btn btn-primary">Reduce All</a></li>
                        </td>
                    </tr>
                @endforeach
    </tbody>
    </table>
  
    @else
    <div class="row">
          
                <h1 style="padding-top:400px; padding-left:800px;">No Items in Cart!</h1>
        </div>
    @endif
@endsection
</body>
</html>