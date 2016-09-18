<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration page</title>
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <ul class="nav nav-pills">
       @if(\Auth::check())
          <li>
            {{ link_to_route('logout', 'Logout') }}
          </li>
        @else
          <li>
            {{ link_to_route('login', 'Login') }}
            <!-- second field is what to be displayed -->
        </li>
        <li>
            <a href=" {{ url('http://localhost/w_tracker.dev/public/') }}">Main Page</a>
        </li>
        @endif
        
      </ul> 
      @yield('content')
    </div>
  </body>
</html>