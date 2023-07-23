<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>


table{

margin-left: auto;
margin-right: auto;
width:60%;
margin-top: 100px;
border:none;
}

tr:nth-child(odd) {background-color: #f2f2f2;}
tr:nth-child(even) {background-color: #ffffff;}

td{
  padding: 15px;
  border:none;

}
th{
  padding: 15px;
  background-color: #04AA6D;
  color: white;
  border:none;
}
.btn{
  text-decoration: none;
  background-color: #ffffff;
}
.cusbtn{
  background-color: #5946B2; 
  border: 0;
  border-radius: 8px;
  color: white;
}

    </style>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a href="#" class="navbar-brand"> <img src="images/main.png" width="100" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="buses.php">Buses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cities.php">Cities</a>
        </li>
		<li class="nav-item">
           <a class="nav-link active" aria-current="page" href="customers.php">Customers</a> 
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bookings.php">Bookings</a> 
        </li>
        <li class="nav-item">
            <button class="cusbtn"><a style="color:white;" class="nav-link active" aria-current="page" href="index.php">Customer Mode</a> </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="margin:auto; width:50%;">
<h2 style="margin-top:50px; margin-bottom:-75px; " >Bookings</h2>
</div>


<?php


$connection=mysqli_connect('localhost','root','','booking');


$sql8 = mysqli_query($connection,"SELECT name,gender,age,food,drink,seat1,seat2,seat3,seat4 FROM booking_info");



$print_data8 = mysqli_fetch_row($sql8);




echo "<br>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Gender</th><th>Age</th><th>Food</th><th>Drinks</th><th colspan=4>Seats</th></tr>";
echo "<tr><td>$print_data8[0]</td><td>$print_data8[1]</td><td>$print_data8[2]</td><td>$print_data8[3]</td><td>$print_data8[4]</td><td>$print_data8[5]</td><td>$print_data8[6]</td><td>$print_data8[7]</td><td>$print_data8[8]</td></tr>";
while ($row = mysqli_fetch_assoc($sql8)) {
   
    echo "<tr>";
    foreach ($row as $field => $value) { 
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";



?>


<?php



$sql9 = mysqli_query($connection,"SELECT earnings FROM earnings");

$print_data9 = mysqli_fetch_row($sql9);




echo "<br>";
echo "<table border='1'>";
echo "<tr><th>Earnings</th></tr>";
echo "<tr><td>$print_data9[0]</td></tr>";
while ($row = mysqli_fetch_assoc($sql9)) { // Important line !!! Check summary get row on array ..
   
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "</tr>";
}
echo "</table>";



?>



<div style="margin:auto; margin-top:20px; text-align: center;">
<a class ="btn" href="dashboard.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Dashboard </a>
</div>
</body>
</html>