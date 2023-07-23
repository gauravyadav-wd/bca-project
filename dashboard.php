<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
    #main-content h3{
        padding-left: 1rem;
        margin-bottom: 0;
        text-transform: uppercase;
    }

    #status, #user, #admin{
        display: flex;
        flex-wrap: wrap;
    }

    .info-box{
        padding: 0.3rem 1rem;
        border-left: 4px solid;
        margin: 1rem;
        flex-basis: 45%;
        border-radius: 5px;
        box-shadow: 7px 7px 4px rgba(0, 0, 0, 0.25);
        background-color: white;
    }

    .heading{
        display: flex;
        justify-content: space-between;
    }
    .heading h5{
        color: white;
        text-align: center;
        padding: 0.5rem 1rem;
        flex-basis: 70%;
        border-radius: 0px;
        margin: 0.5rem 0;
    }

    .info-box p{
        margin: 0;
    }

    .info-content{
        margin-bottom: 1rem;
    }

    .info-content .num{
        font-size: 1.5rem;
    }

    .info-box a{
        display: block;
        text-align: right;
        text-decoration: none;
        font-weight: bold;
    }
    /* START-hardcoding */
    #Booking{
        border-color: #3e93d9;
    }

    #Booking h5{
        background-color: #3e93d9;
    }
    #Booking a{
        color: #3e93d9;
    }

    #Earning {
        border-color: #23bf29;
    }

    #Earning a{
        color: #23bf29;
    }

    #Bus {
        border-color: #009688;
    }

    #Bus h5{
        background-color: #009688;
    }

    #Bus a{
        color: #009688;
    }

    #Route{
        border-color: #f44336;
    }

    #Route h5{
        background-color: #f44336;
    }

    #Route a{
        color: #f44336;
    }

    #Seat{
        border-color: #A66314;
    }

    #Seat h5{
        background-color: #A66314;
    }

    #Seat a{
        color: #A66314;
    }

    #Customer{
        border-color: #2D2B28;
    }

    #Customer h5{
        background-color: #2D2B28;
    }

    #Customer a{
        color: #2D2B28;
    }

    #Admin{
        border-color: #607d8b;
    }

    #Admin h5{
        background-color: #607d8b;
    }

    #Earning h5{
        background-color: #23bf29;
    }

    #Admin a{
        color: #607d8b;
    }
    /* END-hardcoding */


    #admin .info-box{
        text-align: center;
        padding: 1rem 0;
        border: none;
    }

    #admin h4{
        margin: 0.5rem 0;
    }

    #admin img{
        border-radius: 50%;
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

<?php


$connection=mysqli_connect('localhost','root','','booking');
$sql8 = mysqli_query($connection,"SELECT COUNT(*) FROM booking_info");
$sql9 = mysqli_query($connection,"SELECT COUNT(*) FROM bus");
$sql10 = mysqli_query($connection,"SELECT SUM(earnings) FROM earnings");
$print_data8 = mysqli_fetch_row($sql8);
$print_data9 = mysqli_fetch_row($sql9);
$print_data10 = mysqli_fetch_row($sql10);



?>
  


<section id="dashboard">
                
                <div id="status">
                    <div id="Booking" class="info-box status-item">
                        <div class="heading">
                            <h5>Bookings</h5>
                            <div class="info">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Bookings</p>
                            <p class="num">
                            <?php 
                                    echo($print_data8[0]);
                                ?>
                            </p>
                        </div>
                        <a href="./bookings.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Bus" class="info-box status-item">
                        <div class="heading">
                            <h5>Buses</h5>
                            <div class="info">
                                <i class="fas fa-bus"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Buses</p>
                            <p class="num">
                            <?php 
                                    echo($print_data9[0]);
                                ?>
                            </p>
                        </div>
                        <a href="./buses.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Route" class="info-box status-item">
                        <div class="heading">
                            <h5>Cities</h5>
                            <div class="info">
                                <i class="fas fa-road"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Routes</p>
                            <p class="num">30</p>
                        </div>
                        <a href="./cities.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Customer" class="info-box status-item">
                        <div class="heading">
                            <h5>Customers</h5>
                            <div class="info">
                                <i class="fas fa-th"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Customers</p>
                            <p class="num">
                            <?php 
                                    echo($print_data8[0]);
                                ?>
                            </p>
                        </div>
                        <a href="./customers.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- <h3>User</h3> -->
           


                    <div id="Earning" class="info-box user-item" style= "width:20%;">
                        <div class="heading">
                            <h5>Earnings</h5>
                            <div class="info">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Earnings</p>
                            <p class="num">
                            <?php 
                                    echo($print_data10[0]);
                                ?>
                            </p>
                        </div>
                        <a href="bookings.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
            </section>
        </div>
    </main>


</body>
</html>