@extends('Admin.Adminlayouts.Adminapp')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body{
            background: linear-gradient(to right, #25c481, #25b7c4);
        }
        form{
	position: absolute;
	width:360px;
	height:320px;
	height:auto;
	background-color: #fff;
	margin:auto;
	border-radius: 5px;
	padding:20px;
	left:50%;
	top:50%;
	margin-left:-180px;
	margin-top:-200px;
}
input{
    border-radius:5px;
    border-width: 2px;
  
}

    </style>
</head>
<body>
@section('Admincontent')
    <h1>Edit Product</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\ProductsController@update', $product->id], 'method' => 'POST', 'files' => true]) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $product->name, ['class' => 'form-control','placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Price')}}
        {{Form::number('price', $product->price, ['class' => 'form-control','placeholder' => 'Enter Price', 'min'=>'1'])}}
    </div>
    <div class="form-group">
        {{Form::label('quantity', 'Quantity')}}
        {{Form::number('quantity', $product->quantity, ['class' => 'form-control','placeholder' => 'Enter Quantity', 'min'=>'1'])}}
    </div>
    <div class="form-group">
        {{Form::label('type', 'Type')}}
        {{Form::text('type', $product->type, ['class' => 'form-control','placeholder' => 'Enter Type'])}}
    </div>
    <div class="form-group">
        {{Form::label('image', 'Image')}}
        {{Form::file('image')}}
    </div>
    <br/>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::hidden('old_image', $product->image)}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
</body>
</html>
