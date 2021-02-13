<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HPG : Landing Page</title>
    <!-- Bootstrap -->
    <link href="home/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/assets/css/jquery-ui.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="home/assets/css/style.css" rel="stylesheet">
    <link href="home/assets/css/responsive.css" rel="stylesheet">
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap" rel="stylesheet">
    <!-- font-awesome -->
    <link href="home/assets/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <link href="home/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="home/assets/owl-carousel/owl.theme.css" rel="stylesheet">
    <!--for totop css-->
    <link rel="stylesheet" href="home/assets/css/ui.totop.css" />
</head>

<body>
    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="mySidemenu">
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Clients</a>
          <a href="#">Contact</a>
      </div>      
    </div>
    <div class="landingpage">
        <div class="marqu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <marquee style="color: #fff;"> 
                            <p>A computer science portal for geeks</p> 
                        </marquee> 
                    </div>
                </div>
            </div>
        </div>
        
        <div class="landinginn1">
            <h1><a href="#"><img src="home/assets/img/APMH Final.png"></a></h1>
            <h2>Brand Slogan</h2>
            <p>Be sure to follow us on our social platforms as we launch.</p>            
            <span class="toggleicon">
                <a style="color: #fff; margin: 5vh" href="register.php">
                    Sign Up/ Sign In
                </a>
            </span>
        </div>
        <div class="landinginn2">
            <a class="icon-doctor" href="doctors.php" title="Doctor Appointment" data-toggle="tooltip" data-placement="top" title="Doctor Appointment" /><img src="home/assets/img/icon-doctor.png" alt="Doctor" /></a>
            <a class="icon-travel" href="travel.php" title="Travel Ticket" data-toggle="tooltip" data-placement="top" title="Tooltip on top" /><img src="home/assets/img/icon-travel.png" alt="Travel" /></a>
            <a class="icon-hotel" href="hotelbook.php" title="Hotel Booking" data-toggle="tooltip" data-placement="top" title="Tooltip on top" /><img src="home/assets/img/icon-hotel.png" alt="Hotel" /></a>
            <a class="icon-currency" href="currency.html" title="Currency" data-toggle="tooltip" data-placement="top" title="Currency" /><img src="home/assets/img/icon-currency.png" alt="Currency" /></a>
            <a class="icon-sim" href="doctors.php" title="Medecine" data-toggle="tooltip" data-placement="top" title="Medecine" /><img src="home/assets/img/icon-currency.png" alt="Sim" /></a>
            <a class="icon-taxi" href="travelcab.php" title="Cab Taxi" data-toggle="tooltip" data-placement="top" title="Cab Taxi" /><img src="home/assets/img/icon-taxi.png" alt="taxi" /></a>
            <a class="icon-other" href="#" title="Others" data-toggle="tooltip" data-placement="top" title="Others" /><img src="home/assets/img/icon-other.png" alt="Other" /></a>
        </div>
    </div>


    <div class="footer-landing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="landing-menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="conatct.html">Contact Us</a></li>   
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>                    
                        </ul>
                    </div>
                    <p>Copyright © 2019 <a href="#">HPG</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->    
    <script src="home/assets/js/jquery.min.js"></script>
    <script src="home/assets/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
          // $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            // })
        });
    </script>
    

    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>