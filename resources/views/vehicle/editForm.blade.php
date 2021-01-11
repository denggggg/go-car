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
         <a href="http://127.0.0.1:8000/vehicleEdit">
         <span class="v41_4">GoCar | Driver</span>
         <div class="v41_5">
            <div class="v41_6"></div>
            <span class="v41_7">Log Out</span>
         </div>

         
         <span class="v41_8">Edit Vehicle Information</span>
         
         <form method="post" action="http://127.0.0.1:8000/edit">
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
         <input type="hidden" name="id" value="{{$data['id']}}">
         <input class="v41_17" name= "modelEdit" type="text" value="{{$data['vehicleModel']}}"></input>
         
         <!--reg.number-->
         <input class="v41_18" name= "regEdit" type="text" value="{{$data['vehicleRegNo']}}"></input>
         
         <!--engine cc-->
         <input class="v41_29" name= "engEdit" type="text" value="{{$data['vehicleEngCC']}}"></input>
         
         <!--manu year-->
         <select class="v17_117" name= "manufacturingYear" value="{{$data['vehicleManYear']}}">
         <option value="2020">2020</option>
         <option value="2019">2019</option>
         <option value="2018">2018</option>
         <option value="2017">2017</option>
         <option value="2016">2016</option>
         <option value="2015">2015</option>
         <option value="2014">2014</option>
         <option value="2013">2013</option>
         <option value="2012">2012</option>
         <option value="2011">2011</option>
         <option value="2010">2010</option>
         <option value="2009">2009</option>
         <option value="2008">2008</option>
         <option value="2007">2007</option>
         <option value="2006">2006</option>
         <option value="2005">2005</option>
         <option value="2004">2004</option>
         <option value="2003">2003</option>
         <option value="2002">2002</option>
         <option value="2001">2001</option>
         <option value="2000">2000</option>
         <option value="1999">1999</option>
         <option value="1998">1998</option>
         <option value="1997">1997</option>
         <option value="1996">1996</option>
         <option value="1995">1995</option>
         </select>
         
         <!--vehicle colour-->
         <input class="v41_15" name= "colorEdit" type="text" value="{{$data['vehicleColour']}}"></input>
         
         <!--roadtax-->
         <input class="v41_13" name= "rtaxEdit" type="date" value="{{$data['vehicleRoadTax']}}"></input>
         
         <!-- button -->
         
         <input type="submit" value="SAVE" class="v41_19">
         </form>
        
      </div>
   </body>
</html>