@extends('Customer.layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/customerproducttable.css') }}">

</head>
<body>
@section('content')
    <section>
  <h1>Pesticides</h1>
  @if(count($products)>0)
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="2">
      <thead>
        <tr>
          <th class="text-center">Image</th>
          <th class="text-center">Name</th>
          <th class="text-center">Price</th>
          <th class="text-center">Type </th>
          <th class="text-center">Action </th>
        </tr>
      </thead>
        <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><img src="{{ asset('uploads/product/' . $product->image) }}" alt="Loading" height="200px" width="200px"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->type }}</td>
                        <td>
                          <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-primary">Add to Cart</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <h1 class="text-danger jumbotron">No Products available. Please come later</h1>
        @endif
    </tbody>
    </table>
  </div>
</section>
@endsection

</body>
</html>
