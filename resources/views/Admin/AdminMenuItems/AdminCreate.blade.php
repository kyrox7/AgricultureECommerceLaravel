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
    <h1>Add Product</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\ProductsController@store', 'method' => 'POST', 'files' => true]) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control','placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Price')}}
        {{Form::number('price', '', ['class' => 'form-control','placeholder' => 'Enter Price', 'min'=>'1'])}}
    </div>
    <div class="form-group">
        {{Form::label('quantity', 'Quantity')}}
        {{Form::number('quantity', '', ['class' => 'form-control','placeholder' => 'Enter Quantity', 'min'=>'1'])}}
    </div>
    <div class="form-group">
        {{Form::label('type', 'Type')}}
        {{ Form::select('type', ['Insecticides' => 'Insecticides', 'Pesticides' => 'Pesticides', 'Seeds' => 'Seeds']) }}
    </div>
    <div class="form-group">
        {{Form::label('image', 'Image')}}
        {{Form::file('image')}}
    </div>
    <br/>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
</body>
</html>
