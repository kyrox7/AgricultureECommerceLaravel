<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="/home">BNR Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/adminDashboard">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/products">All Products</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="/adminOrderView">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/forum">Forum</a>
        </li>
        <li>
        {!! Form::open(['action' => 'App\Http\Controllers\Auth\LogoutController@store', 'method' => 'POST', 'class' => 'inline ml-3']) !!}
        <button class="nav-link active  btn-primary rounded inline">Logout <span class="sr-only">(current)</span></button>
        {!! Form::close() !!}
        </li>
    </ul>
  </div>
</nav> -->
@extends('Admin.Adminlayouts.AdminApp')
@section('Admincontent')
<h1 class="text-center">Total Orders</h1>
<hr class="bg-dark">
@foreach($orders as $order)
<div class="container mb-5">
  <div class="card">
<div class="card-header">
Order ID:
<strong>{{ $order['id']}}</strong> 
  <span class="float-right"> <strong>Order Date:</strong> {{ $order['created_at'] }}</span>

</div>
<div class="card-body">
<div class="row mb-4">
<div class="col-sm-6">

<div>
<strong>Name: {{ $order['name'] }} </strong> 
</div>
<div>
<strong>Delivery Address: {{ $order['deliveryaddress'] }}</strong>
</div>
<div>
<strong>Phone Number: {{ $order['phone'] }}</strong>
</div>
</div>
</div>
</div>

<div class="table-responsive-sm">
<table class="table table-striped">
<thead>

<tr>
<th class="center">#</th>
<th>Name</th>

<th class="right">Unit Cost</th>
  <th class="center">Qty</th>
<th class="right">Total</th>
</tr>
</thead>
<?php $count=1 ?>
@foreach($order->cart->items as $item)

<tbody>
<tr>
<td class="center">{{$count++}}</td>
<td class="left strong">{{ $item['item']['name'] }}</td>

<td class="right">{{ $item['price'] / $item['qty']  }}</td>
  <td class="center"> {{ $item['qty'] }} Units</td>
<td class="right">Rs {{ $item['price'] }}</td>
</tr>

</tbody>
@endforeach
</table>
</div>
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

<div class="col-lg-4 col-sm-5 ml-auto">
<table class="table table-clear">
<tbody>
<tr>
<td class="left">
<strong>Subtotal</strong>
</td>
<td class="right">{{ $order->cart->totalPrice }}</td>
</tr>
<!-- <tr>
<td class="left">
<strong>Discount (20%)</strong>
</td>
<td class="right">$1,699,40</td>
</tr>
<tr>
<td class="left">
 <strong>VAT (10%)</strong>
</td>
<td class="right">$679,76</td>
</tr>
<tr>
<td class="left">
<strong>Total</strong>
</td>
<td class="right">
<strong>$7.477,36</strong>
</td>
</tr> -->
</tbody>

</table>

</div>

</div>

</div>
</div>
</div>
@endforeach
@endsection
<!-- </body>
</html> -->

