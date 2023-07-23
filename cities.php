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
width:50%;
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
<h2 style="margin-top:50px; margin-bottom:-75px; " >Cities & Routes</h2>
</div>

<?php
$connection=mysqli_connect('localhost','root','','booking');
$sql2 = mysqli_query($connection,"SELECT * FROM bus WHERE id=1");
$sql3 = mysqli_query($connection,"SELECT * FROM bus WHERE id=2");
$sql4 = mysqli_query($connection,"SELECT * FROM bus WHERE id=3");
$sql5 = mysqli_query($connection,"SELECT * FROM bus WHERE id=4");
$sql6 = mysqli_query($connection,"SELECT * FROM bus WHERE id=5");
$sql7 = mysqli_query($connection,"SELECT * FROM bus WHERE id=6");

$print_data2 = mysqli_fetch_row($sql2);
$print_data3 = mysqli_fetch_row($sql3);
$print_data4 = mysqli_fetch_row($sql4);
$print_data5 = mysqli_fetch_row($sql5);
$print_data6 = mysqli_fetch_row($sql6);
$print_data7 = mysqli_fetch_row($sql7);





echo "<table>";
echo "<tr><th>Bus</th><th>Cities</th></tr>";
echo "<tr><td>$print_data2[1]</td><td>Delhi</td></tr>"; 
echo "<tr><td>$print_data3[1]</td><td>Mumbai</td></tr>";
echo "<tr><td>$print_data4[1]</td><td>Jaipur</td></tr>";
echo "<tr><td>$print_data5[1]</td><td>Lucknow</td></tr>";
echo "<tr><td>$print_data6[1]</td><td>Dehradun</td></tr>";
echo "<tr><td>$print_data7[1]</td><td>Agra</td></tr>";   
echo "</table>";


?>

<div style="margin:auto; margin-top:20px; text-align: center;">
<a class ="btn" href="dashboard.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Dashboard </a>
</div>
</body>
</html>