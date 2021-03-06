<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/booking/booking.css') }}">
  <title>GoCar | Customer Booking</title>
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
          <form action="/logout" method="POST" >
          @csrf
            <input type="submit" value="Log Out" class="cust-logout" />
          </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="cust-booking" class="container">
    <h2 class="py-4">Start Booking</h2>

    @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
    
    <form action="" method="POST" action="{{ route('booking.store') }}">
      @csrf
      <div id="cust-booking-form" class="p-4">
        <div class="booking-input">
          <div class="location">
            <p>Pick Up Location:</p>
            <input class="inputs py-2 px-3 {{ $errors->has('pickup') ? 'error' : '' }}" type="text" placeholder="Address Street Name.." name="pickup" />
          </div>
          <div class="zipcode">
            <p>Zipcode:</p>
            <input class="inputs py-2 px-3 {{ $errors->has('pickup-zip') ? 'error' : '' }}" type="text" placeholder="00000" name="pickup-zip" />
          </div>
        </div>
        <div class="booking-input mt-4">
          <div class="location">
            <p>Drop Off Location:</p>
            <input class="inputs py-2 px-3 {{ $errors->has('dropoff') ? 'error' : '' }}" type="text" placeholder="Address Street Name.." name="dropoff"/>
          </div>
          <div class="zipcode">
            <p>Zipcode:</p>
            <input class="inputs py-2 px-3 {{ $errors->has('dropoff-zip') ? 'error' : '' }}" type="text" placeholder="00000" name="dropoff-zip"/>
          </div>
        </div>

        <!-- Error -->
        @if ($errors->has('pickup') or $errors->has('pickup-zip') or $errors->has('dropoff') or $errors->has('dropoff-zip'))
        <div class="alert alert-danger py-2 px-3 mt-3">
            <p class="text-center">Please fill up the required input(s)</p>
        </div>
        @endif

        <input type="submit" value="Book Now" class="booking-btn mt-3" />
      </div>
    </form>
  </section>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>