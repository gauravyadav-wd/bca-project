<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="st/contact.css"/>

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


<div class="add">
<div class="map" > <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.4812955558!2d77.06889903721685!3d28.527280343226316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1652532873870!5m2!1sen!2sin" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="addo">
   <p><span style = "font-size:40px;"><img src="images/main.png" width="200" height="100"></span> <br> XYZ Office, First Floor
, <br>New Delhi 110044 <br> 8888xxxxxx <br> purplebusxxx@gmail.com</p>
</div>
</div>


	<div id="con"class="formcontainer">
		<div class="contact-box">
			<div class="right">
				<h2>Contact Us</h2>
       <form action="contactus.php" method="POST">
				<input type="text" name = "name" class="field" placeholder="Your Name">
				<input type="text" name = "email" class="field" placeholder="Your Email">
				<input type="text" name = "phone" class="field" placeholder="Phone">
				<textarea name = "msg" placeholder="Message" class="field"></textarea>
         <input type="submit"  name ="sb"> 
      </form>
			</div>
		</div>
	</div>

  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container3"  style = "width:99%;">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6 style="margin-left:10px;">About</h6>
            <p class="text-justify " style="margin-left:10px;">We collaborated with some of the best travel agencies in india who provide the best services. We ensure to provide you the best services and comfort with our travel partners. We provide the most futuristic and customer friendly features and interface in our website to interact and we are going ahead day by day in this industry and looking forward to make ourselves the most futuristic and AI based Ticket booking system which will stay with you along with your journey.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php/#anc/">Book Now</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Admin</h6>
            <ul class="footer-links">
              <li><a href="login.php">Admin Login</a></li>
            </ul>
          </div>
        </div>
        
      </div>
      
</footer>
</body>
</html>


<?php
	

	// Database connection
	$conn = new mysqli('localhost','root','','booking');
if(isset($_POST['sb'])){
  $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];
  $query = "insert into contact(name, email, phone, msg) values('$name', '$email', '$phone', '$msg')";
  $run = mysqli_query($conn, $query);
  $conn->close();
}


?>