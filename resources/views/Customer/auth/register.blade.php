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
	width:500px;
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
<h1 class="text-center mt-5">Register</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\Auth\RegisterController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control','placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::email('email', '', ['class' => 'form-control','placeholder' => 'Enter Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::password('password', ['class' => 'form-control','placeholder' => 'Enter Password'])}}
    </div>
    <div class="form-group">
        {{Form::label('password_confirmation', 'Password Confirmation')}}
        {{Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Enter Confirm Password'])}}
    </div>
    <div class="form-group">
        {{Form::label('deliveryaddress', 'Deliveryaddress')}}
        {{Form::text('deliveryaddress', '', ['class' => 'form-control','placeholder' => 'Enter Delivery Address'])}}
    </div>
    <div class="form-group">
        {{Form::label('phone', 'Phone')}}
        {{Form::number('phone', '', ['class' => 'form-control','placeholder' => 'Enter Phone Number','min'=>'1'])}}
    </div>
    <!-- <input type="text" name="type" id="type" value="USR" hidden> -->
    
    <br/>
    {{Form::submit('Register', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
</body>
</html>
