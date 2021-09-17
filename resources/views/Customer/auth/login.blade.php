@extends('Customer.layouts.app')
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
@section('content')
<h1 class="text-center mt-5">Login</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\Auth\LoginController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::email('email', '', ['class' => 'form-control','placeholder' => 'Enter Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::password('password', ['class' => 'form-control','placeholder' => 'Enter Password'])}}
    </div>
    <br/>
    {{Form::submit('Login', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
</body>
</html>
