<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href=" {{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/forum.css') }}">
    <link rel="stylesheet" href=" {{ asset('font-awesome/css/font-awesome.min.css') }}">
    
</head>

<body>
    <header>
        <!--NavBar Section-->
        @if(Auth::check())
        @if(auth()->user()->type == "ADM")
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
        <li class="nav-item active">  
      {!! Form::open(['action' => 'App\Http\Controllers\Auth\LogoutController@store', 'method' => 'POST', 'class' => 'inline ml-3']) !!}
        <button class="nav-link active  btn-primary rounded inline">Logout <span class="sr-only">(current)</span></button>
        {!! Form::close() !!}
        </li>
    </ul>
  </div>
</nav>
        @endif
      
@if(auth()->user()->type != "ADM")
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

@endif
@else
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
@endif


@include('Customer.inc.message')

<a href="/forum/create" class="btn btn-primary m-5"><h3>Ask Question</h3></a>
    </header>
    <div class="container-post">
    
        <div class="subforum">
            <div class="subforum-title">
                <h1 class="text-center  ">My Question</h1>
            </div>
            @foreach($questions as $question)
            @auth
            @if ( $question->username  ==  auth()->user()->name)
            <div class="subforum-row">
            <div class="subforum-description subforum-column">
                    <h4>Title: {{ $question->title }}</h4>
                    <h3 style="padding-top:20px;">Question: {{ $question->description }}</h3>
                </div>
                <div class="subforum-answer subforum-column center">
                <a href="/answer/ {{ $question->id }}" class="btn " style="padding:0px;"><p>Click to view answer</p></a>
                </div>
                
                
                <div class="subforum-info subforum-column">
                    <b>Posted</b> By {{ $question->username }}
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
        </div>
        @endif
        @endauth
        @endforeach
        @guest
          <h2 class="jumbotron text-center">Login to view your questions</h2>
        @endguest
        <!--More-->
        
        <div class="subforum">
            <div class="subforum-title">
                <h1 class="text-center">Overall Question</h1>
            </div>
            @foreach($questions as $question)
            <div class="subforum-row">
            <div class="subforum-description subforum-column">
                    <h4>Title: {{ $question->title }}</h4>
                    <h3 style="padding-top:20px;">Question: {{ $question->description }}</h3>
                </div>
                <div class="subforum-answer subforum-column center">
                <a href="/answer/ {{ $question->id }}" class="btn" style="padding:0px;"><p>Click to view answer</p></a>
                </div>
                
               
                <div class="subforum-info subforum-column">
                    <b>Posted</b> By {{ $question->username }}
                    <br>on <small>{{ $question->created_at }}</small>
                </div>
            </div>
            <!-- <hr class="subforum-devider mt-5"> -->
        </div>
        <!---->
      @endforeach
    </div>
    <script type="text/javascript" src="{{ asset('bootstrap/js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>