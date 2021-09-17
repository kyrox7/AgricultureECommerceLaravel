@extends('Admin.Adminlayouts.Adminapp')
@section('Admincontent')
<a href="/products/create" class="text-white btn btn-primary ml-5">Add Product</a>
    <section>
  <h1>All Products</h1>
  @if(count($products)>0)
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="2">
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Type </th>
          <th>Action</th>
        </tr>
      </thead>
        <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><img src="{{ asset('uploads/product/' . $product->image) }}" alt="Loading" height="200px" width="200px"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->type }}</td>
                        <td>
                        <a href="/products/{{ $product->id }}/edit" class="text-white btn btn-success">Edit</a>
                        {!! Form::open(['action' => ['App\Http\Controllers\ProductsController@destroy', $product->id], 'method' => 'POST']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger mt-2','data-confirm' => 'Are you sure you want to delete?'])}}
                        {!!Form::close() !!}

                        
                        </td>
                    </tr>
                @endforeach
            @else
                <h1 class="text-danger jumbotron">No Products available. Add one</h1>
        @endif
    </tbody>
    </table>
  </div>
</section>
@endsection
