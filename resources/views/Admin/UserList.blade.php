@extends('Admin.Adminlayouts.Adminapp')
@section('Admincontent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Users</th>
      <th scope="col">Type</th>
     <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->type }}</td>
      <td>
      {!! Form::open(['action' => 'App\Http\Controllers\UserController@store', 'method' => 'POST']) !!}
      <input type="number" name="Id" value="{{$user->id}}" hidden>
      <div class="form-group">
      @if($user->type=="ADM")
        {{Form::checkbox('typec', 'ADM', true)}}
        @else
        {{Form::checkbox('typec', 'ADMC',)}}
        @endif
    </div>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection