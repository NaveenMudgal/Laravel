<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <ul class="nav nav-pills">
       <li>
            {{ link_to_route('users.create', 'Signup') }}
        </li>
          <li>
            <a href=" {{ url('http://localhost/w_tracker.dev/public/') }}">Main Page</a>
        </li>
      </ul>
    
      <h2>Login</h2>
  @if(count($errors))
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
   </div>
  @endif
  {!! Form::open(array('route' => 'handleLogin')) !!}
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::label('password') !!}
      {!! Form::password('password', array('class' => 'form-control')) !!}
    </div>
    {!! Form::token() !!}
    {!! Form::submit(null, array('class' => 'btn btn-default')) !!}
  {!! Form::close() !!}
 </div>
  </body>
</html>