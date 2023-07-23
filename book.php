<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="st/book.css"/>
  <script>
   

  </script>


</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a href="#" class="navbar-brand">       <img src="images/main.png" width="100" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <button class="adminbtn"> <a style="color:white;"class="nav-link active" aria-current="page" href="login.php">Admin Login</a> </button>
        </li>
      </ul>
    </div>
  </div>
</nav>



<?php
$connection=mysqli_connect('localhost','root','','booking');
$sql = mysqli_query($connection,"SELECT * FROM booking_det ORDER BY id DESC LIMIT 1");
$sql2 = mysqli_query($connection,"SELECT * FROM bus WHERE id=1");
$sql3 = mysqli_query($connection,"SELECT * FROM bus WHERE id=2");
$sql4 = mysqli_query($connection,"SELECT * FROM bus WHERE id=3");
$sql5 = mysqli_query($connection,"SELECT * FROM bus WHERE id=4");
$sql6 = mysqli_query($connection,"SELECT * FROM bus WHERE id=5");
$sql7 = mysqli_query($connection,"SELECT * FROM bus WHERE id=6");
$sql8 = mysqli_query($connection,"SELECT * FROM booking_info ORDER BY id DESC LIMIT 1");
$sql9 = mysqli_query($connection,"SELECT seat1 FROM booking_info");
$sql10 = mysqli_query($connection,"SELECT seat2 FROM booking_info WHERE seat2 LIKE 'SN%' ");
$sql11 = mysqli_query($connection,"SELECT seat3 FROM booking_info WHERE seat3 LIKE 'SN%' ");
$sql12 = mysqli_query($connection,"SELECT seat4 FROM booking_info WHERE seat4 LIKE 'SN%' ");

$print_data = mysqli_fetch_row($sql);
$print_data2 = mysqli_fetch_row($sql2);
$print_data3 = mysqli_fetch_row($sql3);
$print_data4 = mysqli_fetch_row($sql4);
$print_data5 = mysqli_fetch_row($sql5);
$print_data6 = mysqli_fetch_row($sql6);
$print_data7 = mysqli_fetch_row($sql7);
$print_data8 = mysqli_fetch_row($sql8);
$num = mysqli_num_rows($sql9);
$num2 = mysqli_num_rows($sql10);
$num3 = mysqli_num_rows($sql11);
$num4 = mysqli_num_rows($sql12);

if($num>0){
  while($row = mysqli_fetch_assoc($sql9)){
  $array[] = $row['seat1'];
  }
  while($row = mysqli_fetch_assoc($sql10)){
  $array2[] = $row['seat2'];
  }
  while($row = mysqli_fetch_assoc($sql11)){
  $array3[] = $row['seat3'];
  }
  while($row = mysqli_fetch_assoc($sql12)){
  $array4[] = $row['seat4'];
  }
}

echo "<div style='margin-top:25px;'><div style='float:left;'> <h2 style='margin-left:100px; text-align: left; font-weight: bold; color:#5946B2;'>Source:</h2>";
echo "<h2 style='margin-left:100px; text-align: left; '>$print_data[1]</h2></div>";
echo "<div float:left;><h2 style='margin-right:100px; text-align: right; font-weight: bold; color:#5946B2;'>Destination:</h2>";
echo "<h2 style='margin-right:100px; text-align: right; '>$print_data[2]</h2></div></div>";
echo "<table>";
echo "<tr><th>Bus</th><th>Departure Location</th><th>Departure Time</th><th>Available Seats</th></tr>";
if($print_data[1]=="Delhi"){
echo "<tr><td>$print_data2[1]</td><td>$print_data2[2]</td><td>$print_data2[3]</td><td>$print_data2[4]</td></tr>"; 
}

if($print_data[1]=="Mumbai"){
  echo "<tr><td>$print_data3[1]</td><td>$print_data3[2]</td><td>$print_data3[3]</td><td>$print_data3[4]</td></tr>";
  }
if($print_data[1]=="Jaipur"){
    echo "<tr><td>$print_data4[1]</td><td>$print_data4[2]</td><td>$print_data4[3]</td><td>$print_data4[4]</td></tr>";
   }
if($print_data[1]=="Lucknow"){
    echo "<tr><td>$print_data5[1]</td><td>$print_data5[2]</td><td>$print_data5[3]</td><td>$print_data5[4]</td></tr>";
   }  
if($print_data[1]=="Dehradun"){
    echo "<tr><td>$print_data6[1]</td><td>$print_data6[2]</td><td>$print_data6[3]</td><td>$print_data6[4]</td></tr>";
   }      
if($print_data[1]=="Agra"){
    echo "<tr><td>$print_data7[1]</td><td>$print_data7[2]</td><td>$print_data7[3]</td><td>$print_data7[4]</td></tr>";
   }      
echo "</table>";


?>
<div class="main" style="margin-top:50px;">
<h2 style=" font-weight:bold; font-size:20px;">Select Seats</h2>
<div style="display:flex; justify-content:center;">
<ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
  </div>
    <div class="deck" style="display:flex; justify-content:center; margin-top:25px;">
    <div class="containers"  style="float:left;">
      <div class="screen"></div>
      <h5 style=" font-weight:100; font-size:17px;">Lower Deck</h5>
      <div class="row">
        <div id="SN1" class="seat" onclick="change(SN1)"></div>
        <div id="SN2" class="seat"onclick="change(SN2)"></div>
        <div id="SN3" class="seatsl" onclick="change(SN3)"></div>
        <div id="SN4" class="seatsl" onclick="change(SN4)"></div>

      </div>

      <div class="row">
        <div id="SN5" class="seat" onclick="change(SN5)"></div>
        <div id="SN6" class="seat" onclick="change(SN6)"></div>
        <div id="SN7" class="seatsl" onclick="change(SN7)"></div>
        <div id="SN8" class="seatsl" onclick="change(SN8)"></div>

      </div>
      <div class="row">
        <div id="SN9" class="seat" onclick="change(SN9)"></div>
        <div id="SN10" class="seat" onclick="change(SN10)"></div>
        <div id="SN11" class="seatsl" onclick="change(SN11)"></div>
        <div id="SN12" class="seatsl" onclick="change(SN12)"></div>

      </div>
      <div class="row">
        <div id="SN13" class="seat" onclick="change(SN13)"></div>
        <div id="SN14" class="seat" onclick="change(SN14)"></div>
        <div id="SN15" class="seatsl" onclick="change(SN15)"></div>
        <div id="SN16" class="seatsl" onclick="change(SN16)"></div>

      </div>
      <div class="row">
        <div id="SN17" class="seat" onclick="change(SN17)"></div>
        <div id="SN18" class="seat" onclick="change(SN18)"></div>
        <div id="SN19" class="seatsl" onclick="change(SN19)"></div>
        <div id="SN20" class="seatsl" onclick="change(SN20)"></div>

      </div>
    </div>

    <div class="container2">
      <div class="screen" ></div>
      <h5 style=" font-weight:100; font-size:17px;">Upper Deck</h5>
      <div class="row" >
        <div id="SN21" class="seat" onclick="change(SN21)" ondblclick="click2()"></div>
        <div id="SN22" class="seat"onclick="change(SN22)"></div>
        <div id="SN23" class="seatsl" onclick="change(SN23)"></div>
        <div id="SN24" class="seatsl" onclick="change(SN24)"></div>

      </div>

      <div class="row">
        <div id="SN25" class="seat" onclick="change(SN25)"></div>
        <div id="SN26" class="seat" onclick="change(SN26)"></div>
        <div id="SN27" class="seatsl" onclick="change(SN27)"></div>
        <div id="SN28" class="seatsl" onclick="change(SN28)"></div>

      </div>
      <div class="row">
        <div id="SN29" class="seat" onclick="change(SN29)"></div>
        <div id="SN30" class="seat" onclick="change(SN30)"></div>
        <div id="SN31" class="seatsl" onclick="change(SN31)"></div>
        <div id="SN32" class="seatsl" onclick="change(SN32)"></div>

      </div>
      <div class="row">
        <div id="SN33" class="seat" onclick="change(SN33)"></div>
        <div id="SN34" class="seat" onclick="change(SN34)"></div>
        <div id="SN35" class="seatsl" onclick="change(SN35)"></div>
        <div id="SN36" class="seatsl" onclick="change(SN36)"></div>

      </div>
      <div class="row">
        <div id="SN37" class="seat" onclick="change(SN37)"></div>
        <div id="SN38" class="seat" onclick="change(SN38)"></div>
        <div id="SN39" class="seatsl" onclick="change(SN39)"></div>
        <div id="SN40" class="seatsl" onclick="change(SN40)"></div>

      </div>
    </div>
   


    
    <div hidden style="float:left; margin-left:50px;" class="seats" >
    <h4>selected seats</h4>
    <p  id="selected" class="text">  </p>
</div>
</div>
</div>

  <button  class="b1" style="max-height:25px; margin-left:25px; border-radius:10px;  text-align:center;"onclick="myFunction()">Reselect</button>


  <form  action="" method="POST">
      
    <div hidden style="display:flex; justify-content:center;">

<div class="bus-container">
   



      <select name='seat1' id="busseat" required   style="-webkit-appearance: none; pointer-events: none;">
      <option value="">None</option>
        <option value="SN1">SN1</option> <option value="SN2">SN2</option> <option value="SN3">SN3</option>
        <option value="SN4">SN4</option> <option value="SN5">SN5</option> <option value="SN6">SN6</option>
        <option value="SN7">SN7</option> <option value="SN8">SN8</option> <option value="SN9">SN9</option>
        <option value="SN10">SN10</option> <option value="SN11">SN11</option> <option value="SN12">SN12</option>
        <option value="SN13">SN13</option> <option value="SN14">SN14</option> <option value="SN15">SN15</option>
        <option value="SN16">SN16</option> <option value="SN17">SN17</option> <option value="SN18">SN18</option>
        <option value="SN19">SN19</option> <option value="SN20">SN20</option> <option value="SN21">SN21</option>
        <option value="SN22">SN22</option> <option value="SN23">SN23</option> <option value="SN24">SN24</option>
        <option value="SN25">SN25</option> <option value="SN26">SN26</option> <option value="SN27">SN27</option>
        <option value="SN28">SN28</option> <option value="SN29">SN29</option> <option value="SN30">SN30</option>
        <option value="SN31">SN31</option> <option value="SN32">SN32</option> <option value="SN33">SN33</option>
        <option value="SN34">SN34</option> <option value="SN35">SN35</option> <option value="SN36">SN36</option>
        <option value="SN37">SN37</option> <option value="SN38">SN38</option> <option value="SN39">SN39</option>
        <option value="SN40">SN40</option>
      </select>
    </div>

    <div class="bus-container">
      <select name='seat2' id="busseat2"style="-webkit-appearance: none; pointer-events: none;">
      <option value="">None</option>
      <option value="SN1">SN1</option> <option value="SN2">SN2</option> <option value="SN3">SN3</option>
        <option value="SN4">SN4</option> <option value="SN5">SN5</option> <option value="SN6">SN6</option>
        <option value="SN7">SN7</option> <option value="SN8">SN8</option> <option value="SN9">SN9</option>
        <option value="SN10">SN10</option> <option value="SN11">SN11</option> <option value="SN12">SN12</option>
        <option value="SN13">SN13</option> <option value="SN14">SN14</option> <option value="SN15">SN15</option>
        <option value="SN16">SN16</option> <option value="SN17">SN17</option> <option value="SN18">SN18</option>
        <option value="SN19">SN19</option> <option value="SN20">SN20</option> <option value="SN21">SN21</option>
        <option value="SN22">SN22</option> <option value="SN23">SN23</option> <option value="SN24">SN24</option>
        <option value="SN25">SN25</option> <option value="SN26">SN26</option> <option value="SN27">SN27</option>
        <option value="SN28">SN28</option> <option value="SN29">SN29</option> <option value="SN30">SN30</option>
        <option value="SN31">SN31</option> <option value="SN32">SN32</option> <option value="SN33">SN33</option>
        <option value="SN34">SN34</option> <option value="SN35">SN35</option> <option value="SN36">SN36</option>
        <option value="SN37">SN37</option> <option value="SN38">SN38</option> <option value="SN39">SN39</option>
        <option value="SN40">SN40</option>
      </select>
    </div>

    <div class="bus-container">
      <select name='seat3' id="busseat3" style="-webkit-appearance: none; pointer-events: none;">
      <option value="">None</option>
      <option value="SN1">SN1</option> <option value="SN2">SN2</option> <option value="SN3">SN3</option>
        <option value="SN4">SN4</option> <option value="SN5">SN5</option> <option value="SN6">SN6</option>
        <option value="SN7">SN7</option> <option value="SN8">SN8</option> <option value="SN9">SN9</option>
        <option value="SN10">SN10</option> <option value="SN11">SN11</option> <option value="SN12">SN12</option>
        <option value="SN13">SN13</option> <option value="SN14">SN14</option> <option value="SN15">SN15</option>
        <option value="SN16">SN16</option> <option value="SN17">SN17</option> <option value="SN18">SN18</option>
        <option value="SN19">SN19</option> <option value="SN20">SN20</option> <option value="SN21">SN21</option>
        <option value="SN22">SN22</option> <option value="SN23">SN23</option> <option value="SN24">SN24</option>
        <option value="SN25">SN25</option> <option value="SN26">SN26</option> <option value="SN27">SN27</option>
        <option value="SN28">SN28</option> <option value="SN29">SN29</option> <option value="SN30">SN30</option>
        <option value="SN31">SN31</option> <option value="SN32">SN32</option> <option value="SN33">SN33</option>
        <option value="SN34">SN34</option> <option value="SN35">SN35</option> <option value="SN36">SN36</option>
        <option value="SN37">SN37</option> <option value="SN38">SN38</option> <option value="SN39">SN39</option>
        <option value="SN40">SN40</option>
      </select>
    </div>

    <div class="bus-container">
      <select name='seat4' id="busseat4" style="-webkit-appearance: none; pointer-events: none;">
      <option value="">None</option>
      <option value="SN1">SN1</option> <option value="SN2">SN2</option> <option value="SN3">SN3</option>
        <option value="SN4">SN4</option> <option value="SN5">SN5</option> <option value="SN6">SN6</option>
        <option value="SN7">SN7</option> <option value="SN8">SN8</option> <option value="SN9">SN9</option>
        <option value="SN10">SN10</option> <option value="SN11">SN11</option> <option value="SN12">SN12</option>
        <option value="SN13">SN13</option> <option value="SN14">SN14</option> <option value="SN15">SN15</option>
        <option value="SN16">SN16</option> <option value="SN17">SN17</option> <option value="SN18">SN18</option>
        <option value="SN19">SN19</option> <option value="SN20">SN20</option> <option value="SN21">SN21</option>
        <option value="SN22">SN22</option> <option value="SN23">SN23</option> <option value="SN24">SN24</option>
        <option value="SN25">SN25</option> <option value="SN26">SN26</option> <option value="SN27">SN27</option>
        <option value="SN28">SN28</option> <option value="SN29">SN29</option> <option value="SN30">SN30</option>
        <option value="SN31">SN31</option> <option value="SN32">SN32</option> <option value="SN33">SN33</option>
        <option value="SN34">SN34</option> <option value="SN35">SN35</option> <option value="SN36">SN36</option>
        <option value="SN37">SN37</option> <option value="SN38">SN38</option> <option value="SN39">SN39</option>
        <option value="SN40">SN40</option>
      </select>
    </div>

  </div>
  




</div>




 
    
    



<section class ="section1" >
 <p>Booking information</p>
 <input type="text" placeholder="Full Name" name="name" required="" />

 <label for="Gender" style="float:left; margin:17px;" >Select Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
 <select class= "sel" name='gender' required="">
     <option value="Male">Male</option>
     <option value="Female">Female</option>
</select><br><br><br><br><br><br>
 <label for="Age" style="float:left; margin:17px;">Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input id="age"type="text" placeholder="Age" required="" name="age"/>
  <br><br><br>

</section> 

<section class="section2" >
 <p>Additional Facilities</p>
<label for="food" style="float:left; margin:17px;">Food Preference:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
 <select id = "food" style = "width:25%;" class= "sel" name='food'>
     <option value="None">None</option>
     <option value="Veg biryani">Veg biryani</option>
     <option value="Non veg biryani">Non veg biryani</option>
     <option value="Veg Thali">Veg Thali</option>
     <option value="Medium Veg Burger">Medium Veg Burger</option>
     <option value="Cheese Pizza">Cheese Pizza</option>
</select>

<label for="food" style=" float:left; margin:17px; margin-left:75px;">Drink Preference:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<select id = "drink" style = "width:22%;"class= "sel" name='drink'>
     <option value="None">None</option>
     <option value="Coke">Coke</option> 
     <option value="Coconut Water">Coconut Water</option>
     <option value="Tea">Tea</option>
     <option value="Coffee">Coffee</option>
     <option value="Orange Juice">Orange Juice</option>
</select><br><br><br>
<p style="color:red;">*Additional charges apply</p>

  

</section>

<section>
 <p>Contact information</p>
 <input id="con" type="text" placeholder="Email address" required="" name="email"/>
 <input id="con" type="text" placeholder="Mobile" required="" name="mobile"/><br><br><br><br><br>
</section>

<section>
 <p>Prices</p>
 <div style="float:left;">
    <p><b>Food</b><br>Veg Biryani: 250<br>Non-Veg Biryani: 250<br>Veg Thali: 250<br>Medium Veg Burger: 250<br>Cheese Pizza: 250</p>
  </div>
  <div style="float:right;">
    <p><b>Drinks</b><br>Coke: 250<br>Cocunut Water: 250<br>Tea: 250<br>Coffee: 250<br>Orange Juice: 250</p>
  </div>
  <br><br><br><br><br><br><br><br>
  <div style="float:right;">
    <?php
    
   
    if($print_data[1]=="Delhi"){
      echo   "<h5 style='font-size:17px; color:green;'><span style='color:black;'>Price :</span> $print_data2[5] + Preferences</h5>";}
      if($print_data[1]=="Mumbai"){
        echo "<h5 style='font-size:17px; color:green;'><span style='color:black;'>Price :</span> $print_data3[5] + Preferences</h5>";}
      if($print_data[1]=="Jaipur"){
        echo "<h5 style='font-size:17px; color:green;'><span style='color:black;'>Price :</span> $print_data4[5] + Preferences</h5>";}
      if($print_data[1]=="Lucknow"){
        echo "<h5 style='font-size:17px; color:green;'><span style='color:black;'>Price :</span> $print_data5[5] + Preferences</h5>";}  
      if($print_data[1]=="Dehradun"){
        echo "<h5 style='font-size:17px; color:green;'><span style='color:black;'>Price :</span> $print_data6[5] + Preferences</h5>";}      
      if($print_data[1]=="Agra"){
        echo "<h5 style='font-size:17px; color:green;'><span style='color:black;'>Price :</span> $print_data7[5] + Preferences</h5>";}      

    ?>
    </div>
</section>

<h4 id="sim" style="font-size:18px; color:red;" >Select a seat above</h4>
<div class="center">
<input  class="button" type="submit" value="Pay and Book Ticket" name="sb2"></div>
  </form>


<script>


var ab =  <?php echo json_encode($array); ?>; 
var abe =  <?php echo json_encode($num); ?>; 
var ab2 =  <?php echo json_encode($array2); ?>; 
var ab2e =  <?php echo json_encode($num2); ?>; 

var ab3 =  <?php echo json_encode($array3); ?>; 
var ab3e =  <?php echo json_encode($num3); ?>; 
var ab4 =  <?php echo json_encode($array4); ?>; 
var ab4e =  <?php echo json_encode($num4); ?>; 

for (var i = 0; i < abe; i++) {
  document.getElementById(ab[i]).style.backgroundColor = "	#808080";
  document.getElementById(ab[i]).style.pointerEvents = 'none'; 
}

for (var j = 0; j < ab2e; j++) {
  document.getElementById(ab2[j]).style.backgroundColor = "	#808080";
  document.getElementById(ab2[j]).style.pointerEvents = 'none'; 
 
}

for (var k = 0; k < ab3e; k++) {
  document.getElementById(ab3[k]).style.backgroundColor = "	#808080";
  document.getElementById(ab3[k]).style.pointerEvents = 'none'; 
 
}

for (var l = 0; l < ab4e; l++) {
  document.getElementById(ab4[l]).style.backgroundColor = "	#808080";
  document.getElementById(ab4[l]).style.pointerEvents = 'none'; 
 
}



const array =[];
var a= 1;

  
  
  function change(abc) {
    var b = abc.id;
    if(a<5){    
      document.getElementById("sim").innerHTML = "";
        document.getElementById(b).style.backgroundColor = "#5946B2";
   
           a++;
          var c = document.getElementById("busseat").value = b ;
          var h = document.createElement("p");
        var t = document.createTextNode(c);
        h.appendChild(t);
        array.push(document.getElementById("selected").appendChild(h));
        
        document.getElementById("busseat").value = array[0].innerHTML ;
        document.getElementById("busseat2").value = array[1].innerHTML ;
        document.getElementById("busseat3").value = array[2].innerHTML ;
        document.getElementById("busseat4").value = array[3].innerHTML ;

   if(document.getElementById("busseat").value==av){
    document.getElementById("busseat").value="";
   }     
        
   
	}

         
    }
   

    /*if(a>4){  
      alert("maximum 4 seats allowed");
      document.getElementById("max").innerHTML="only 4 seats allowed";
      setTimeout(function(){
        document.getElementById("max").innerHTML="";
}, 2000);   
    
    }*/
    
    
  function myFunction() {
    
       
    var elements = document.getElementsByClassName('seat');
    var elementss = document.getElementsByClassName('seatsl');
    document.getElementById("sim").innerHTML = "Select a seat above";
    document.getElementById("busseat").value="";
    document.getElementById("busseat2").value="";
    document.getElementById("busseat3").value="";
    document.getElementById("busseat4").value="";
    array.length =0;
    a=1;
 // get all elements
	for(var i = 3; i < 23; i++){
    
		elements[i].style.backgroundColor = "#B9BDB7";
    
	}
  for(var j = 0; j < 20; j++){
		elementss[j].style.backgroundColor = "#B9BDB7";
	}


  
  for (var i = 0; i < abe; i++) {
  document.getElementById(ab[i]).style.backgroundColor = "	#808080";
  document.getElementById(ab[i]).style.pointerEvents = 'none'; 
}

for (var j = 0; j < ab2e; j++) {
  document.getElementById(ab2[j]).style.backgroundColor = "	#808080";
  document.getElementById(ab2[j]).style.pointerEvents = 'none'; 
 
}

for (var k = 0; k < ab3e; k++) {
  document.getElementById(ab3[k]).style.backgroundColor = "	#808080";
  document.getElementById(ab3[k]).style.pointerEvents = 'none'; 
 
}

for (var l = 0; l < ab4e; l++) {
  document.getElementById(ab4[l]).style.backgroundColor = "	#808080";
  document.getElementById(ab4[l]).style.pointerEvents = 'none'; 
 
}

  }

 


</script>

</body>
</html>


  
<?php
	

	// Database connection
  $conn = new mysqli('localhost','root','','booking');

 
  if(isset($_POST['sb2'])){
    
    $seat1 = $_POST['seat1'];
    $seat2 = $_POST['seat2'];
    $seat3 = $_POST['seat3'];
    $seat4 = $_POST['seat4'];

    $name = $_POST['name'];
	  $gender = $_POST['gender'];
	  $age = $_POST['age'];
    $food = $_POST['food'];
    $drink = $_POST['drink'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $query = "insert into booking_info(seat1, seat2, seat3, seat4, name, gender, age, food, drink, email, mobile) values('$seat1','$seat2','$seat3','$seat4', '$name', '$gender', '$age', '$food', '$drink', '$email', '$mobile')";
    $sql8 = mysqli_query($connection,"SELECT * FROM booking_info ORDER BY id DESC LIMIT 1");
    $print_data8 = mysqli_fetch_row($sql8);
    echo $print_data8[0];
    if($print_data8[8]!=NULL){
      $i=1;
  }
  if($print_data8[9]!=NULL){
      $i=2;
  }
  if($print_data8[10]!=NULL){
      $i=3;
  }
  if($print_data8[11]!=NULL){
      $i=4;
  }
  



    mysqli_query($connection,"UPDATE bus set av_seats = av_seats - $i WHERE av_seats>0;");

    $run = mysqli_query($conn, $query);
    $conn->close();
   
    {       echo("<script>location.href='ticket.php'</script>"); } 
    exit;
  }
?>
