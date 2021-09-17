
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/home">BNR Agriculture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/insecticides">Insecticides</a>
          <a class="dropdown-item" href="/pesticides">Pesticides</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/seeds">Seeds</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/forum">Forum <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/aboutus">About Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
  </div>
  <ul class="navbar-nav mr-auto pull-right">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('product.shoppingCart') }}">
        <i class="fa fa-shopping-cart" aria-hidder="true"></i> Shopping Cart
        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
      </a>
    </li>
      @auth
      <li class="nav-item active">  
        <a class="nav-link" href="#"> Welcome {{ auth()->user()->name }} <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">  
        <a class="nav-link" href="myorder/{{ auth()->user()->id }}"> My Orders <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">  
      {!! Form::open(['action' => 'App\Http\Controllers\Auth\LogoutController@store', 'method' => 'POST', 'class' => 'inline ml-3']) !!}
        <button class="nav-link active  btn-primary rounded inline">Logout <span class="sr-only">(current)</span></button>
        {!! Form::close() !!}
        </li>
      @endauth
      @guest
      <li class="nav-item active">  
        <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">  
        <a class="nav-link" href="{{ route('register') }}">Register <span class="sr-only">(current)</span></a>
        </li>
      @endguest
        
      
        
    </ul>
</nav>



<h1 class="text-center">My Orders</h1>
<hr class="bg-dark">
@foreach($orders as $order)
<div class="container mb-5">
  <div class="card">
<div class="card-header">
  <span class="float-right"> <strong>Order Date:</strong> {{ $order['created_at'] }}</span>

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

</tbody>

</table>

</div>

</div>

</div>
</div>
</div>
@endforeach

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>

