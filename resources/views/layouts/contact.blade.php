@extends('main')
@section('content')
<h1>Contact</h1>
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<p>
  {!! Form::open(['url' => '/contact']) !!}
    <div class="form-group">
      {{ Form::label('name', 'Name') }}
      {{ Form::text('name', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('email', 'E-Mail Address') }}
      {{ Form::text('email', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('message', 'Message') }}
      {{ Form::textarea('message', '', ['class' => 'form-control']) }}
    </div>
    <div>
      {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
</p>
@endsection
