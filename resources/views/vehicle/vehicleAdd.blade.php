<!DOCTYPE html>
<html>
   <head>
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
      <link href="{{ asset('/css/vehicle.css') }}" rel="stylesheet" />
      <title>Add Vehicle</title>
   </head>
   <body>
      <div class="v17_64">
         <div class="v17_65"></div>
         <a href="http://127.0.0.1:8000/vehicleMenu">
         <span class="v17_66">GoCar | Driver</span>
         </a>
         <div class="v17_67">
            
            
         </div>

         
         <span class="v17_70">Vehicle Information</span>

         <form method="post" action="submit">
         @csrf
         <!-- kotak form -->
         <div class="v17_71"></div>
         <!-- Label -->
         <span class="v17_84">Vehiclemodel :</span>
         <span class="v17_85">Registration Number:</span>
         <span class="v17_86">Colour:</span>
         <span class="v17_87">Engine CC:</span>
         <span class="v17_118">Manufacturing year:</span>
         <span class="v17_73">Roadtax Expiry:</span>
         <!-- Input field -->
         <!-- brand -->
         <input class="v17_79" name= "brand" type="text" placeholder="Car brand" required></input>
         <!-- platenumber -->
         <input class="v17_80" name= "plateNum" type="text" placeholder="Plate Number" required></input>
         <!-- engineCC -->
         <input class="v17_78" name= "engineCC" type="text" placeholder="0.0" required></input>
         <!-- manuyear -->
         <select class="v17_117" name= "manufacturingYear" required>
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
          <!-- colour -->
          <input class="v17_77" name= "colour" type="text" placeholder="Car colour" required></input>
         <!-- roadtax -->
         <input class="v17_75" name= "roadtax" type="date" placeholder="Roadtax expired date" required></input>
         
         <!-- button -->
         <input type="submit" value="ADD VEHICLE" class="v17_81">
         </form>
         <span class="v17_123">* maximum 2 vehicle only</span>
</form>
      </div> 
   </body>
</html>