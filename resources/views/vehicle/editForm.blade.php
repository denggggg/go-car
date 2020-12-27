<!DOCTYPE html>
<html>
   <head>
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
      <link href="{{ asset('/css/vehicle.css') }}" rel="stylesheet" />
      <title>Document</title>
   </head>
   <body>
      <div class="v41_2">
         <div class="v41_3"></div>
         <span class="v41_4">GoCar | Driver</span>
         <div class="v41_5">
            <div class="v41_6"></div>
            <span class="v41_7">Log Out</span>
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
         <input class="v41_17" name= "modelEdit" type="text" placeholder="Car model"></input>
         
         <!--reg.number-->
         <input class="v41_18" name= "regEdit" type="text" placeholder="Plate number"></input>
         
         <!--engine cc-->
         <input class="v41_29" name= "engEdit" type="text" placeholder="Engine CC"></input>
         
         <!--manu year-->
         <input class="v41_35" name= "manufEdit" type="text" placeholder="Year made"></input>
         
         <!--vehicle colour-->
         <input class="v41_15" name= "colorEdit" type="text" placeholder="Colour"></input>
         
         <!--roadtax-->
         <input class="v41_13" name= "rtaxEdit" type="text" placeholder="Roadtax expiry"></input>
         
         <!-- button -->
         <input type="submit" value="EDIT" class="v172_0">
         <input type="submit" value="SAVE" class="v41_19">
         </form>
      </div>
   </body>
</html>