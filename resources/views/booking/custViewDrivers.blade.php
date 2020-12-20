<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/booking/booking.css') }}">
  <title>GoCar | Driver List</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg nav-cust py-3">
    <div class="container">
      <div class="nav-title">
        <a href="../../index.html">GoCar | Customer</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button class="cust-logout">Log Out</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="cust-driver-list" class="container">
    <h2 class="py-4">List of Available Drivers</h2>
    
    <form method="POST" action="/customer/confirm">
    @csrf
    <div class="driver-list py-3">
      
      <div class="driver">
        <img src="{{ asset('img/driver.png') }}" alt="driver image" class="mr-3" />
        <div class="driver-info">
          <p>John Maximus Wayne</p>
          <p class="py-1">Proton X90 2016</p>
          <div class="driver-info-btns">
            <a class="py-1 px-3 mr-3" href="http://127.0.0.1:8000/customer/driver/1">View Driver</a>
            <a class="py-1 px-3" href="http://127.0.0.1:8000/customer/vehicle/1">View Vehicle</a>
          </div>
        </div>
      </div>
      <input type="submit" value="Book" class="driver-book-btn" />
    </div>
    <div class="driver-list py-3">
      <div class="driver">
        <img src="{{ asset('img/driver.png') }}" alt="driver image" class="mr-3" />
        <div class="driver-info">
          <p>John Maximus Wayne</p>
          <p class="py-1">Proton X90 2016</p>
          <div class="driver-info-btns">
            <a class="py-1 px-3 mr-3" href="http://127.0.0.1:8000/customer/driver/1">View Driver</a>
            <a class="py-1 px-3" href="http://127.0.0.1:8000/customer/vehicle/1">View Vehicle</a>
          </div>
        </div>
      </div>
      <input type="submit" value="Book" class="driver-book-btn" />
    </div>
    </form>
  </section>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>