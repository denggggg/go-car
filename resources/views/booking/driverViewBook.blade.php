<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/booking/booking-driver.css') }}">
  <title>GoCar | Customer Booking</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg nav-cust py-3">
    <div class="container">
      <div class="nav-title">
        <a href="../../index.html">GoCar | Driver</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <form action="/logout" method="POST" >
          @csrf
            <input type="submit" value="Log Out" class="cust-logout" />
          </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="driver-booking" class="container">
    <h2 class="py-4">Pending Booking Order</h2>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Order ID</th>
          <th scope="col">Pick Up Location</th>
          <th scope="col">Drop Off Location</th>
          <th scope="col">Action</th>
          <th scope="col"></th>
        </tr>
      </thead>
        <tbody>
          @foreach ($data as $d)
            
            <tr>
              <th scope="row">{{$loop->index }}</th>
              <td>{{$d['id']}}</td>
              <td>{{$d['custPickUpLoc']}}</td>
              <td>{{$d['custDropLoc']}}</td>
              <td>
              <form method="POST" action="">
              @csrf
                <input type="submit" value="ACCEPT" class="btn btn-block btn-accept" name="accept">
                <input type="hidden" value="{{$d['id']}}" name="id">
              </form>
              </td>
              <td>
              <form method="POST" action="">
              @csrf
                <input type="submit" value="REJECT" class="btn btn-block btn-reject" name="reject">
                <input type="hidden" value="{{$d['id']}}" name="id">
              </form>
              </td>
              
            </tr>
          @endforeach
        </tbody>
    </table>


  </section>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>