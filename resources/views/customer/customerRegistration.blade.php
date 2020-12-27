<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/f252491b10.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/customer/customerreg.css') }}">
  <title>GoCar | Driver profile</title>
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

  <section id="cust-driver-register" class="container">
    <h2 class="py-4">Customer Registration</h2>

    <div class="register ">
    <form method="POST" action="">
      @csrf
      <div class="driver-register">
		<div class="detail"><span class="first">Full Name:</span> <span><input type="text" name="custname" class="input-driver"></span></div>
		<div class="detail mt-2"><span class="first">E-mail:</span><span><input type="text" name="custemail" class="input-driver"></span></div>
		<div class="detail mt-2"><span class="first">Password:</span><span><input type="text" name="custpwd" class="input-driver"></span></div>
		<div class="detail mt-2"><span class="first">Phone Number:</span><span><input type="text" name="custphonenum"class="input-driver"></span></div>
		<div class="detail mt-2"><span class="first">Address:</span><span><textarea name="custaddress" class="input-driver"></textarea></span></div>
		<div class="detail mt-2"><span class="first">Picture:</span>
			<span>
				<div class="profile-pic" >
        			<img src="{{ asset('img/custimg/rectangle_19.png') }}" alt="driver-register">
        				<!--a href="http://127.0.0.1:8000/customer/drivers" class="w-100 py-2"> <i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a-->
					<input type="file" name="custpic" id="upload" hidden/>
					<label for="upload"><i class="fa fa-arrow-circle-o-up"> </i> Upload file</label>
				  </div>
			</span>
		</div>
		<div class="detail mt-2"><span class="driver-button"><input type="submit" value="Register" class="driver-click"></span></div>
		
	  </div>
    </form>
	</div>
	

  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>