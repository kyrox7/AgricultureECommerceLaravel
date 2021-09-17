<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="/home">BNRY Admin</a>
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
        <li class="nav-item">
          <a class="nav-link" href="/user">Users</a>
        </li>
        <li>
        {!! Form::open(['action' => 'App\Http\Controllers\Auth\LogoutController@store', 'method' => 'POST', 'class' => 'inline ml-3']) !!}
        <button class="nav-link active  btn-primary rounded inline">Logout <span class="sr-only">(current)</span></button>
        {!! Form::close() !!}
        </li>
    </ul>
  </div>
</nav>