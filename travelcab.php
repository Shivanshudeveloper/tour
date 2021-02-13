<!DOCTYPE html>
<html lang="en">
<head>
  <title>Travel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/2915bda088.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
    <style>
        .fake-input { 
            position: absolute;
            top: -42px;
            width: 142vh;
            margin-left: 8vh;
        }
        .fake-input input { border:none; background-color:#fff; display:block; width: 100%; box-sizing: border-box }
        .fake-input img { 
            position: absolute; 
            top: 2px; 
            margin-left: 45%;
        }
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" style="background-color: #343a40 !important;" id="ftco-navbar">
    <div class="container">
     <a class="navbar-brand" href="index.php"><span>Travel Agency</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="doctors.php" class="nav-link">Doctor Appointment</a></li>
            <li class="nav-item"><a href="travel.php" class="nav-link">Travel Tickets</a></li>
            <li class="nav-item"><a href="hotelbook.php" class="nav-link">Hotel</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li id="checkforuser" class="nav-item"></li>
        </ul>
    </div>
   </div>
 </nav>
 <!-- END nav -->
 
<section class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="mr-5">
        <br />
        <div class="card border-0">
        <div class="row mt-4">

                <div style="margin-top: 8%;" class="fake-input">
                    <img style="width: 120vh; height: 98%;" class="shadow rounded mt-4" src="https://wallpapercave.com/wp/wp3097232.jpg" />
                    <div style="margin-top: 6vh; width: 56%;" class="card card-body shadow">
                    <h2 class="font-weight-bold text-center">
                        Cabs
                    </h2>
                    <center>
                        <div class="row mt-2">
                            <div class="col">
                                <a href="travel.php">
                                    <i class="fas fa-plane-departure h1 text-secondary"></i> <br />
                                    Flight Tickets
                                </a>
                            </div>
                            <div class="col">
                                <a href="travelrail.php">
                                    <i class="fas fa-train h1 text-secondary"></i><br />
                                    Rail Tickets
                                </a>
                            </div>
                            <div class="col">
                                <a href="travelcab.php">
                                    <i class="fas fa-taxi h1 text-primary"></i> <br />
                                    Book Cab
                                </a>
                            </div>
                        </div>
                    </center>
                    <form action="/users/login" method="POST">
                        <h6 class="text-dark">From</h6>
                        <?php include './inc/location1.inc.php' ?>
                        <h6 class="text-dark">To</h6>
                        <?php include './inc/location2.inc.php' ?>
                        <h6 class="text-dark">Date</h6>
                        <input style="border: 1px solid black; color: gray !important;" type="date" class="form-control" name="date" id="">
                        <button style="background-color: black; color: white;" class="btn btn-lg btn-block mt-2 shadow">
                            Request Now
                        </button>
                        <button class="btn btn-outline-secondary btn-block btn-lg mt-2 shadow">
                            Schedule for Later
                        </button>
                    </form>
                    </div>
                </div>


        </div>

            <div class="card-body">
                <br />
                <section class="mt-2">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Seat Availiblity</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="splide">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- <table class="table">
                        <thead>
                            <tr>
                                <th width="18%" scope="col">Service Provider</th>
                                <th scope="col">Vehicle</th>
                                <th scope="col">Seat</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <img src="https://seekvectorlogo.com/wp-content/uploads/2018/05/ola-cabs-vector-logo.png" style="width: 80%;" />
                                </td>
                                <td>
                                    Sedan
                                </td>
                                <td>
                                    4
                                </td>
                                <td class="text-center">
                                    Rs. 389 <br />
                                    <button class="btn btn-block btn-danger">
                                        Continue
                                    </button>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <img src="https://seekvectorlogo.com/wp-content/uploads/2018/05/ola-cabs-vector-logo.png" style="width: 80%;" />
                                </td>
                                <td>
                                    Sedan
                                </td>
                                <td>
                                    4
                                </td>
                                <td class="text-center">
                                    Rs. 389 <br />
                                    <button class="btn btn-block btn-danger">
                                        Continue
                                    </button>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <img src="https://seekvectorlogo.com/wp-content/uploads/2018/05/ola-cabs-vector-logo.png" style="width: 80%;" />
                                </td>
                                <td>
                                    Sedan
                                </td>
                                <td>
                                    4
                                </td>
                                <td class="text-center">
                                    Rs. 389 <br />
                                    <button class="btn btn-block btn-danger">
                                        Continue
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="https://seekvectorlogo.com/wp-content/uploads/2018/05/ola-cabs-vector-logo.png" style="width: 80%;" />
                                </td>
                                <td>
                                    Sedan
                                </td>
                                <td>
                                    4
                                </td>
                                <td class="text-center">
                                    Rs. 389 <br />
                                    <button class="btn btn-block btn-danger">
                                        Continue
                                    </button>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table> -->
                </section>

                


            </div>
        </div>
    </div>
</section>

<section style="padding-top: 8vh;" class="mt-4 mb-4">
    <div class="container">
        
    </div>
</section>



<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md pt-5">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">About</h2>
							<p>
								Some information about the company of yours and some random text also
							</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
								<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md pt-5 border-left">
						<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Infromation</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Link 1</a></li>
								<li><a href="#" class="py-2 d-block">Link 2</a></li>
								<li><a href="#" class="py-2 d-block">Link 3</a></li>
								<li><a href="#" class="py-2 d-block">Link 4</a></li>
								<li><a href="#" class="py-2 d-block">Link 5</a></li>
								<li><a href="#" class="py-2 d-block">Link 6</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md pt-5 border-left">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">Experience</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Home</a></li>
								<li><a href="#" class="py-2 d-block">Doctor Appointment</a></li>
								<li><a href="#" class="py-2 d-block">Hotel</a></li>
								<li><a href="#" class="py-2 d-block">Travel Tickets</a></li>
								<li><a href="#" class="py-2 d-block">Hotel</a></li>
								<li><a href="#" class="py-2 d-block">Blog</a></li>
								<li><a href="#" class="py-2 d-block">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md pt-5 border-left">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">Reach Us</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon fa fa-map-marker"></span><span class="text">Some Address of your</span></li>
									<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 xxxx-xxx-xxx</span></a></li>
									<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Company.com
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script>
	new Splide( '.splide', {
        perPage: 3,
        rewind : true
    } ).mount();
</script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>


<script src="src/js/firebase-config.js"></script>
<script src="src/js/main.js"></script>
<script src="src/js/checkuser.js"></script>
</body>
</html>