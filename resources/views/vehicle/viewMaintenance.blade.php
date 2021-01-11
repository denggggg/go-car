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
         <a href="http://127.0.0.1:8000/vehicleMenu">
         <span class="v17_300">GoCar | Driver</span>
         <div class="v17_301">
            <div class="v17_302"></div>
            
         </div>
         <span class="v17_304">Vehicle Maintenance Record</span>

         <form method="post" action="saveMaintenance">
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
         <input class="v17_313" name= "lastService" type="text" placeholder="{{$data['vehicleLastServDate']}}"></input>
         <!-- car mileage-->
         <input class="v17_314" name= "mileage" type="text" placeholder="{{$data['vehicleMileage']}}"></input>
         <!-- next service date-->
         <input class="v17_325" name= "nextService" type="text" placeholder="{{$data['vehicleNextServDate']}}"></input>
         <!-- button -->
         
         </form>
         <a href=http://127.0.0.1:8000/editFormMaintenance/1>
         <input type="submit" value="UPDATE" class="v17_315"></input>
         </a>
      </div>
   </body>
</html>