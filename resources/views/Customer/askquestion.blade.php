@extends('Customer.layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: linear-gradient(to right, #191919, #25b7c4);
            /* background-color: #191919; */
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

{!! Form::open(['action' => 'App\Http\Controllers\QuestionController@store', 'method' => 'POST']) !!}
<div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control','placeholder' => 'Enter Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control','placeholder' => 'Enter Description'])}}
    </div>
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</body>
</html>
</body>
</html>