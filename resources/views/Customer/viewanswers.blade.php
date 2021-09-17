@extends('Customer.layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background: linear-gradient(to right, #191919, #25b7c4);
        }
    .div2{
        position:absolute;
        top: 80%;
        left: 16%;
    }
    .div3{
        margin-top:50px;
    }
        form{
	position: absolute;
	width:940px;
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
.subforum-title{
    background-color: #0A48B3;
    color: #fff;
    padding: 100px;
    border-radius: 5px;
}
.subforum-row{
    display: grid;
    grid-template-columns: 70% 30%;
}
.answer{
    background-color:#292B2E;
    color: #fff;
    margin-left:60px;
    margin-right:60px;
    padding:30px;
}
    </style>
</head>
<body>
    @section('content')
    <div class="subforum-title div1">
        <h2>Question: {{ $questionAnswer[0]->description }}</h2>
    </div>
    <div class="answer subforum-row div3">
        @foreach($questionAnswer[1] as $answer)
        <h3>Answer: {{ $answer->description }}  </h3>
        <h3>Posted By {{ $answer->username }}</h3>
        @endforeach
    </div>
    <div class="div2">
    {!! Form::open(['action' => 'App\Http\Controllers\AnswerController@store', 'method' => 'POST']) !!}
        <div class="form-group">
        {{Form::label('description', 'Answer')}}
        {{Form::textarea('description', '', ['class' => 'form-control','placeholder' => 'Enter Answer'])}}
    </div>
    <input type="text" name="questionId" value="{{$questionAnswer[0]->id}}" hidden>
    <!-- <input type="text" name="questionUsername" value="{{$questionAnswer[0]->username}}" hidden> -->

    
    {{Form::submit('Submit', ['class' => 'btn btn-primary ml-5'])}}
        {!! Form::close() !!}

    </div>
    
    
    @endsection 
</body>
</html>