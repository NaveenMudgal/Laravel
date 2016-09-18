<?php use App\account; ?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Expenses Page</title>
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
        <h1> Expenditure </h1>
          @if(\Auth::check()) <!--functions provided by laravel-->
             <h2 style="color:white; text-align:center; ">
              Welcome {{ \Auth::user()->name }} !!! Make your transaction
            </h2>
            <br>
            <br>
            <div align="center">

              <form action="expend_acc" method="POST">

                <div class="container">
                  <ul class="nav nav-pills">
                    <li><p>Type of Expenditure:&nbsp;</p></li>   
                      <li>
                        <select  name="exp">
                          <option value="entertainment" id="entertainment">Entertainment</option>
                          <option value="rent" id="rent">Rent</option>
                          <option value="food" id="food">Food</option>
                          <option value="travel" id="travel">Travel</option>
                          <option value="grocery" id="grocery">Grocery</option>
                          <option value="bill_payment" id="bill_payment">Bill payment</option>
                          <option value="others" id="others">Others</option>
                        </select>
                      </li>
                  </ul>
                </div>

                <br>

                <div class="container">
                  <ul class="nav nav-pills">
                    <li><p>Payment gateway:&nbsp;&nbsp;&nbsp;&nbsp;</p> </li>
                      <li>
                       <select name="gateway">
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
                      <li><input type="textbox" name="update"></li>
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
