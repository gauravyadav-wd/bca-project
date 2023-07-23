<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="st/login.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="images/admin.png"/>

		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login" name="sb"/>
		</form>
	</div>

	<div style="margin:auto; margin-top:20px; text-align: center;">
<a class ="btn" href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </a>
</div>
</body>
</html>

<?php
$host="localhost";
$user="root";
$password="";
$db="booking";

$conn = new mysqli('localhost','root','','booking');

if(isset($_POST['sb'])){
   
   $uname= $_POST['username'];
   $password= $_POST['password'];
   $query="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
   $result=mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)==1){
      { echo("<script>location.href='dashboard.php'</script>"); } 
        exit();
    }
    else{
        echo " <h3 style=' text-align: center; color:black;' >Incorrect Password</h3>";
        exit();
    }
 }

 
?>