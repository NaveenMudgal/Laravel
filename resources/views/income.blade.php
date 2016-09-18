<?php use App\account; ?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Income Page</title>
      <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link href="{{asset('css/acc.css')}}" rel="stylesheet">
    </head>
    <style type="text/css">
      p
      {
        color:white;
      }
    </style>

    <body>
        <div class="container">
          <ul class="nav nav-pills">
              @if(\Auth::check()) <!--functions provided by laravel-->
                <li>
                  {{ link_to_route('logout', 'Logout') }}
                </li>
                <li>
                  <a href=" {{ url('http://localhost/w_tracker.dev/public/') }}">Main Page</a>
                </li>
              @endif
            
          </ul>
        </div>
        <h1> Income </h1>
          @if(\Auth::check()) <!--functions provided by laravel-->
             <h2 style="color:white; text-align:center; ">
              Welcome {{ \Auth::user()->name }} !!! Make your transaction
            </h2>
            <br>
            <br>
            <div align="center">

              <form action="store_acc" method="POST">

                <div class="container">
                  <ul class="nav nav-pills">
                    <li><p>Type of Income:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></li>   
                      <li>
                        <select name="src_inc">
                          <option value="salary" id="salary">salary</option>
                          <option value="shares" id="shares">shares</option>
                          <option value="business" id="business">business</option>
                          <option value="rent" id="rent">rent</option>
                          <option value="interest" id="interest">interest</option>
                          <option value="others" id="others">others</option>
                        </select>
                      </li>
                  </ul>
                </div>

                <br>

                <div class="container">
                  <ul class="nav nav-pills">
                    <li><p>Payment mode:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> </li>
                      <li>
                        <select name="dest_sav">
                          <option value="wallet" id="wallet">wallet</option>
                          <option value="bank" id="bank">bank</option>
                          <option value="card" id="card">card</option>
                          <option value="savings" id="savings">savings</option>
                        </select>
                      </li>
                  </ul>
                </div>

                <br>

                <div class="container">
                  <ul class="nav nav-pills">
                    <li><p>Enter the amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></li>
                      <li>
                      <!-- <input type="textbox" name="update"> -->
                      <input type="text" name="update" id="update">
                      </li>
                      <br>
                      <br>
                      <br>
                      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" name="submit" id="submit">
                      </li>
                    </ul>
                </div>
              </form>
            </div>
          @endif
    </body>
  </html>
