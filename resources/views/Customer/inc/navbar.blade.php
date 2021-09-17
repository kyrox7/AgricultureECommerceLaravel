
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/home">BNRY Agriculture</a>
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

