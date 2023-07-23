<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="st/style3.css"/>


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

<section>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bus100.jpg" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Kerala</h3>
        <p>We had a great time</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/bus2.jpg" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dehradun</h3>
        <p>Welcome to Dehradun!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>





<section>
<div class="busticket" id="anc">
                    
                        
                            <div class="submit-form">
                                <h4>Check availability for <em>direction</em>:</h4>
                                <form id="form-submit"  method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                
                                                <select name='source' required="">
                                                    <option value="">From</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Mumbai">Mumbai</option>
                                                    <option value="Jaipur">Jaipur</option>
                                                    <option value="Lucknow">Lucknow</option>
                                                    <option value="Dehradun">Dehradun</option>
                                                    <option value="Agra">Agra</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6" >
                                            <fieldset>
                                               
                                                <select name='destination' required="">
                                                    <option value="">To</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Mumbai">Mumbai</option>
                                                    <option value="Jaipur">Jaipur</option>
                                                    <option value="Lucknow">Lucknow</option>
                                                    <option value="Dehradun">Dehradun</option>
                                                    <option value="Agra">Agra</option>
                                                </select>

                                                
                                            </fieldset>
                                            
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <fieldset>
                                                
                                                <input class="date"name="departure" type="date" class="form-control date" id="departure" placeholder="Select date..." required="">
                                            </fieldset>
                                        </div>
                                        <div style="margin-top:20px; margin-left: 18px;">
                                            <fieldset>
                                            <input class="sub" type="submit" name = "sb"> 
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                   
                </div>

               
</section>


<div class="w3-bar w3-black">
  <button class="weather" onclick="openCity('NewDelhi')">New Delhi</button>
  <button class="weather" onclick="openCity('Mumbai')">Mumbai</button>
  <button class="weather" onclick="openCity('Jaipur')">Jaipur</button>
  <button class="weather" onclick="openCity('Lucknow')">Lucknow</button>
  <button class="weather" onclick="openCity('Dehradun')">Dehradun</button>
  <button class="weather" onclick="openCity('Agra')">Agra</button>
</div><br><br>
<div style="   margin-top: -12px;"class="weat">

  <div id="NewDelhi" class="w3-container city">
<a class="weatherwidget-io" href="https://forecast7.com/en/28d6177d21/new-delhi/" data-label_1="NEW DELHI" data-label_2="WEATHER" data-theme="original" >NEW DELHI WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>

<div id="Mumbai" class="w3-container city" style="display:none">
<a class="weatherwidget-io" href="https://forecast7.com/en/19d0872d88/mumbai/" data-label_1="MUMBAI" data-label_2="WEATHER" data-theme="original" >MUMBAI WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>

<div id="Jaipur" class="w3-container city" style="display:none">
<a class="weatherwidget-io" href="https://forecast7.com/en/26d9175d79/jaipur/" data-label_1="JAIPUR" data-label_2="WEATHER" data-theme="original" >JAIPUR WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>

<div id="Lucknow" class="w3-container city" style="display:none">
<a class="weatherwidget-io" href="https://forecast7.com/en/26d8580d95/lucknow/" data-label_1="LUCKNOW" data-label_2="WEATHER" data-theme="original" >LUCKNOW WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>

<div id="Dehradun" class="w3-container city" style="display:none">
<a class="weatherwidget-io" href="https://forecast7.com/en/30d3278d03/dehradun/" data-label_1="DEHRADUN" data-label_2="WEATHER" data-theme="original" >DEHRADUN WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>

<div id="Agra" class="w3-container city" style="display:none">
<a class="weatherwidget-io" href="https://forecast7.com/en/27d1878d01/agra/" data-label_1="AGRA" data-label_2="WEATHER" data-theme="original" >AGRA WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>
</div>
<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>

<section style="margin-top:50px; padding:20px;">
<h2  style="text-align:center;">Why Us?</h2>
                <div class="container" >
                  
    <div class="left-col">
    <img class="whyus" src="images/on-time.png" width="125" height="100" background-size= "cover" >
    <h5 style="text-align:center; margin:25px;">On Time Performance</h5>
        <p > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Departure time to Arrival time, Performance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; is 99% on time. You can rely on us.</p>
    </div>
    <div class="center-col">
    <img class="whyus" src="images/comfort.png" width="100" height="100" background-size= "cover">
    <h5 style="text-align:center; margin:25px;">Comfort</h5>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We value your comfort that is why we&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; provide you the sleeper and AC classes with your food preference at your comfortable seat</p>
    </div>
    <div class="right-col">
    <img class="whyus" src="images/price.png" width="100" height="100" background-size= "cover" >
    <h5 style="text-align:center; margin:25px;">Lowest Price</h5>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Considering the services we provide, our&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prices are minimal.</p>
    </div>
</div>
</section>

<section class= "placesmain">
  <h2 style="text-align:center; padding-top: 15px;"> Most Visited Places </h2> 
<div class="places">
<div class="card1" style="width: 18rem;">
  <div class="card-body1">
    <h5 class="card-title">Delhi</h5>
  </div>
</div>
<div class="card2" style="width: 18rem;">
  <div class="card-body2">
    <h5 class="card-title">Mumbai</h5>
  </div>
</div>
<div class="card3" style="width: 18rem;">
  <div class="card-body3">
    <h5 class="card-title">Jaipur</h5>

  </div>
</div>
</div>

<div class="places">
<div class="card4" style="width: 18rem;">
  <div class="card-body1">
    <h5 class="card-title">Agra</h5>
  </div>
</div>
<div class="card5" style="width: 18rem;">
  <div class="card-body2">
    <h5 class="card-title">Lucknow</h5>
  </div>
</div>
<div class="card6" style="width: 18rem;">
  <div class="card-body3">
    <h5 class="card-title">Dehradun</h5>
  </div>
</div>
</div>

</section>




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
              <li><a href="contactus.php#con">Contact Us</a></li>
              <li><a href="index.php#anc">Book Now</a></li>
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
    $source = $_POST['source'];
	  $destination = $_POST['destination'];
	  $departure = $_POST['departure'];
    $query = "insert into booking_det(source, destination, departure) values('$source', '$destination', '$departure')";
    $run = mysqli_query($conn, $query);
    $conn->close();
    { echo("<script>location.href='book.php'</script>"); } 
exit;
  }
?>