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

  <section id="booking-status" class="container mt-4">
      <h2 class="text-center mb-4">Booking Status</h2>


      @if ($data->bookStatus=="CONFIRMED")
        <div class="status">
          <div class="status-line mx-3 ">
            <div class="circle active"></div>
            <div class="line active"></div>
          </div>
          <div class="status-details">
            <h2 class="active">Order Created</h2>
            <p class="active">
              Please wait for the driver to accept your request. 
            </p>
          </div>
        </div>
      @endif

      @if ($data->bookStatus=="ACCEPTED")
      <div class="status">
          <div class="status-line mx-3 ">
            <div class="circle "></div>
            <div class="line "></div>
          </div>
          <div class="status-details">
            <h2>Order Created</h2>
            <p>
              Please wait for the driver to accept your request. 
            </p>
          </div>
        </div>

      <div class="status">
        <div class="status-line mx-3">
          <div class="circle active"></div>
          <div class="line active"></div>
        </div>
        <div class="status-details">
          <h2 class="active">Order Accepted</h2>
          <p class="active">
            Your driver is coming to your location.
          </p>
        </div>
      </div>
      @endif

      @if ($data->bookStatus=="REJECTED")
      <div class="status">
          <div class="status-line mx-3 ">
            <div class="circle "></div>
            <div class="line "></div>
          </div>
          <div class="status-details">
            <h2>Order Created</h2>
            <p>
              Please wait for the driver to accept your request. 
            </p>
          </div>
        </div>

      <div class="status">
        <div class="status-line mx-3">
          <div class="circle reject"></div>
          <div class="line active"></div>
        </div>
        <div class="status-details">
          <h2 class="reject">Order Rejected</h2>
          <p class="reject">
            The driver has rejected your order. Please make another booking request.
          </p>
        </div>
      </div>
      @endif
      
      @if ($data->bookStatus=="PICKED UP")
      <div class="status">
          <div class="status-line mx-3 ">
            <div class="circle "></div>
            <div class="line "></div>
          </div>
          <div class="status-details">
            <h2>Order Created</h2>
            <p>
              Please wait for the driver to accept your request. 
            </p>
          </div>
        </div>

      <div class="status">
        <div class="status-line mx-3">
          <div class="circle"></div>
          <div class="line"></div>
        </div>
        <div class="status-details">
          <h2>Order Accepted</h2>
          <p>
            Your driver is coming to your location.
          </p>
        </div>
      </div>

      <div class="status">
        <div class="status-line mx-3">
          <div class="circle active"></div>
          <div class="line active"></div>
        </div>
        <div class="status-details">
          <h2 class="active">Picked Up</h2>
          <p class="active">
            The driver has picked you up at your location.
          </p>
        </div>
      </div>
      @endif

      @if ($data->bookStatus=="CANCELLED")
      <div class="status">
          <div class="status-line mx-3 ">
            <div class="circle "></div>
            <div class="line "></div>
          </div>
          <div class="status-details">
            <h2>Order Created</h2>
            <p>
              Please wait for the driver to accept your request. 
            </p>
          </div>
        </div>

      <div class="status">
        <div class="status-line mx-3">
          <div class="circle"></div>
          <div class="line"></div>
        </div>
        <div class="status-details">
          <h2>Order Accepted</h2>
          <p>
            Your driver is coming to your location.
          </p>
        </div>
      </div>

      <div class="status">
        <div class="status-line mx-3">
          <div class="circle reject"></div>
          <div class="line active"></div>
        </div>
        <div class="status-details">
          <h2 class="reject">Order Cancelled</h2>
          <p class="reject">
           The driver has cancelled your order. Please make another booking request.
          </p>
        </div>
      </div>
      @endif

      @if ($data->bookStatus=="DELIVERED")
      <div class="status">
          <div class="status-line mx-3 ">
            <div class="circle "></div>
            <div class="line "></div>
          </div>
          <div class="status-details">
            <h2>Order Created</h2>
            <p>
              Please wait for the driver to accept your request. 
            </p>
          </div>
        </div>

      <div class="status">
        <div class="status-line mx-3">
          <div class="circle"></div>
          <div class="line"></div>
        </div>
        <div class="status-details">
          <h2>Order Accepted</h2>
          <p>
            Your driver is coming to your location.
          </p>
        </div>
      </div>

      <div class="status">
        <div class="status-line mx-3">
          <div class="circle "></div>
          <div class="line "></div>
        </div>
        <div class="status-details">
          <h2 >Picked Up</h2>
          <p >
            The driver has picked you up at your location.
          </p>
        </div>
      </div>
    
      <div class="status">
        <div class="status-line mx-3">
          <div class="circle active"></div>
          <div class="line active"></div>
        </div>
        <div class="status-details">
          <h2 class="active">Delivered </h2>
          <p class="active">
          You have arrived at your destinated location. 
          <br><br>
          Thanks for using GoCar system!
          </p>
        </div>
      </div>
      @endif
      <!-- 
       -->
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>