<!DOCTYPE html>
<html>
   <head>
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
      <link href="{{ asset('/css/vehicle.css') }}" rel="stylesheet" />
      <title>Update Maintenance</title>
   </head>
   <body>
      <div class="v17_298">
         <div class="v17_299"></div>
         <span class="v17_300">GoCar | Driver</span>
         <div class="v17_301">
            
            
         </div>
         <span class="v17_304">Vehicle Maintenance Record</span>

         <form method="post" action="http://127.0.0.1:8000/saveEditMaintenance">
         @csrf
         <!-- kotak form -->
         <div class="v17_305"></div>
         <span class="v17_318">Last  serviced date:</span>
         <span class="v17_319">Car Mileage:</span>
         <span class="v17_321">Next service date:</span>
         <span class="v17_335">Model: Proton</span>
         <span class="v17_336">X70</span>
         <div class="v17_337"></div>

         <input type="hidden" name="id" value="{{$data['id']}}">
         <!-- last service date-->
         <input class="v17_313" name= "updateLastService" type="date" value="{{$data['vehicleLastServDate']}}"></input>
         <!-- car mileage-->
         <input class="v17_314" name= "updateMileage" type="text" value="{{$data['vehicleMileage']}}"></input>
         <!-- next service date-->
         <input class="v17_325" name= "updateNextService" type="date" value="{{$data['vehicleNextServDate']}}"></input>
         <!-- button -->
         <input type="submit" value="SAVE" class="v17_315"></input>
         </form>
      </div>
   </body>
</html>