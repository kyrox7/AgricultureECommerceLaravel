<!-- @extends('Customer.layouts.app')
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
        {!! Form::open(['action' => 'App\Http\Controllers\AnswerController@store', 'method' => 'POST']) !!}
        <div class="form-group">
        {{Form::label('description', 'Answer')}}
        {{Form::textarea('description', '', ['class' => 'form-control','placeholder' => 'Enter Answer'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary ml-5'])}}
        {!! Form::close() !!}
    </div>
    @endsection
</body>
</html> -->