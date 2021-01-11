<!DOCTYPE html>
<html>
   <head>
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
      <link href="{{ asset('/css/vehicle.css') }}" rel="stylesheet" />
      <title>View Vehicle</title>
   </head>
   <body>
      <div class="v41_2">
         <div class="v41_3"></div>
         <a href="http://127.0.0.1:8000/vehicleMenu">
         <span class="v41_4">GoCar | Driver</span>
         </a>
         <div class="v41_5">
            
            
         </div>

         
         <span class="v41_8">Edit Vehicle Information</span>
         
         <form method="post" action="submit">
         @csrf
   
         <!-- kotak form -->
         <div class="v41_9"></div>
         <span class="v41_22">Vehicle model :</span>
         <span class="v41_23">Registration Number:</span>
         <span class="v41_24">Colour:</span>
         <span class="v41_25">Engine CC:</span>
         <span class="v41_33">Manufacturing year:</span>
         <span class="v41_11">Roadtax Expiry:</span>
         
         <!--model-->
         <input class="v41_17" name= "modelEdit" type="text" placeholder="{{$data['vehicleModel']}}" readonly></input>
         
         <!--reg.number-->
         <input class="v41_18" name= "regEdit" type="text" placeholder="{{$data['vehicleRegNo']}}" readonly></input>
         
         <!--engine cc-->
         <input class="v41_29" name= "engEdit" type="text" placeholder="{{$data['vehicleEngCC']}}"readonly></input>
         
         <!--manu year-->
         <input class="v41_35" name= "manufEdit" type="text" placeholder="{{$data['vehicleManYear']}}" readonly></input>
         
         <!--vehicle colour-->
         <input class="v41_15" name= "colorEdit" type="text" placeholder="{{$data['vehicleColour']}}"readonly></input>
         
         <!--roadtax-->
         <input class="v41_13" name= "rtaxEdit" type="text" placeholder="{{$data['vehicleRoadTax']}}"readonly></input>
         
         <!-- button -->
         
         
         </form>
         <a href=http://127.0.0.1:8000/editForm/1><!-- chg -->
         <input type="submit" value="EDIT" class="v41_19">
         </a>
      </div>
   </body>
</html>