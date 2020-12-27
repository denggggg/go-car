<!DOCTYPE html>
<html>
   <head>
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
      <link href="{{ asset('/css/vehicle.css') }}" rel="stylesheet" />
      <title>Document</title>
   </head>
   <body>
      <div class="v17_298">
         <div class="v17_299"></div>
         <span class="v17_300">GoCar | Driver</span>
         <div class="v17_301">
            <div class="v17_302"></div>
            <span class="v17_303">Log Out</span>
         </div>
         <span class="v17_304">Vehicle Maintenance Record</span>

         <form method="post" action="updateMaintenance">
         @csrf
         <!-- kotak form -->
         <div class="v17_305"></div>
         <span class="v17_318">Last  serviced date:</span>
         <span class="v17_319">Car Mileage:</span>
         <span class="v17_321">Next service date:</span>
         <span class="v17_335">Model: Proton</span>
         <span class="v17_336">X70</span>
         <div class="v17_337"></div>
         <!-- last service date-->
         <input class="v17_313" name= "lastServiceDate" type="date"></input>
         <!-- car mileage-->
         <input class="v17_314" name= "carMileage" type="text" placeholder="Mileage"></input>
         <!-- next service date-->
         <input class="v17_325" name= "nextServiceDate" type="date"></input>
         <!-- button -->
         <input type="submit" value="UPDATE" class="v17_315"></input>
         </form>
      </div>
   </body>
</html>