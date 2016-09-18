<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		  <link href="{{asset('css/w_main.css')}}" rel="stylesheet">
	</head>
  <style type="text/css">
    h5
    {
      text-align: center;
      color:green;
    }
  </style>
	<body>
		<h1 style="color:Green; text-align:center;"> Wallet Tracker </h1> 
    <br>

     @if(\Auth::check())
        <h5> Welcome {{ \Auth::user()->name }} !!! </h5>
      @endif
      <br>
		  <ul class="nav nav-pills" >
        @if(\Auth::check()) <!--functions provided by laravel-->
          <li>
            {{ link_to_route('logout', 'Logout') }}
          </li>
          @else
            <li>
              {{ link_to_route('login', 'Login') }}
            </li>
            <li>
              {{ link_to_route('users.create', 'Signup') }}
            </li>
        @endif
      </ul> 	 
	   <ul>
  	  <li><a class="active">Home</a></li>
  	  <li>{{ link_to_route('accounts', 'Account') }}</li>
      <li>{{ link_to_route('income', 'Income') }}</li>
      <li>{{ link_to_route('expense', 'Expenditure') }}</li>
	   </ul>
	   <footer class="footer">Copyright © {{date('Y')}} Wallet Tracker All rights reserved.</footer>
  </body>
</html>

