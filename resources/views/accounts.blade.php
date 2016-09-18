<?php use App\account; ?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Accounts Page</title>
      <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link href="{{asset('css/acc.css')}}" rel="stylesheet">
    </head>

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
        <h1> Account </h1>
          @if(\Auth::check()) <!--functions provided by laravel-->
            <h2 style="color:white; text-align:center; ">
              Welcome {{ \Auth::user()->name }} !!! your account balance
            </h2>
<?php 
  $x = \Auth::user()->id;
  $id1 = account::where('id',$x)->first();
  
?>
        <table>
          <tr>
            <th>Your Account</th>
            <th>INR</th>
          <tr>
            <td>wallet</td>
            <td> <?php echo $id1->wallet; ?> </td>
          </tr>
          <tr>
            <td>Bank</td>
            <td> <?php echo $id1->bank; ?> </td>
          </tr>
          <tr>
            <td>card</td>
            <td> <?php echo $id1->card; ?> </td>
          </tr>
          <tr>
            <td>Savings</td>
            <td><?php echo $id1->savings; ?></td>
          </tr>
        </table>
      @endif
      </body>
  </html>