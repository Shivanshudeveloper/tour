<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
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
  <style>
    .avatar {
        vertical-align: middle;
        width: 80px;
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
     <a class="navbar-brand" href="index.html"><span>Travel Agency</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="doctors.php" class="nav-link">Doctor Appointment</a></li>
            <li class="nav-item active"><a href="travel.php" class="nav-link">Travel Tickets</a></li>
            <li class="nav-item"><a href="hotelbook.php" class="nav-link">Hotel</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="#!" class="nav-link">
            <a href="signin.php" class="btn btn-outline-primary" style="
                margin-top: -6vh;
                color: white;
                border-color: #f15d30;
                background-color: #f15d30;
            ">Sign In/ Sign Up</a>
            </li>
        </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
 
 
<img style="width: 100%; height: 72vh;" src="https://i.ytimg.com/vi/sS0VtTjllD0/maxresdefault.jpg" alt="Airplane" />
<section class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">
        <div class="card border-0">
            <div class="card-body">
                <br />
                <h2 class="font-weight-bold text-center">
                    Travel Tickets
                </h2>
                <br />
                <center>
                    <div class="row w-50">
                        <div class="col">
                            <a href="travel.php">
                                <i class="fas fa-plane-departure h1 text-secondary"></i> <br />
                                Flight Tickets
                            </a>
                        </div>
                        <div class="col">
                            <a href="travelrail.php">
                                <i class="fas fa-train h1 text-primary"></i><br />
                                Rail Tickets
                            </a>
                        </div>
                        <div class="col">
                            <a href="travelcab.php">
                                <i class="fas fa-taxi h1 text-secondary"></i> <br />
                                Book Cab
                            </a>
                        </div>
                    </div>
                    
                </center>

                <section class="mt-2">
                    
                    <div class="row mt-2 mb-2">
                        <div class="col">
                            <h6>From</h6>
                            <?php include './inc/location1.inc.php' ?>
                        </div>
                        <div class="col">
                            <h6>To</h6>
                            <?php include './inc/location2.inc.php' ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-dark" for="exampleCheck1">Divyaang Concession </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-dark" for="exampleCheck1">Flexible With Date </label>

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-dark" for="exampleCheck1">Train With Available Birth </label>

                            </div>
                        </div>
                    </div>
                    <br />

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
                                                        <h6 class="card-title">16th April 2021</h6>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <h6 class="card-title">16th April 2021</h6>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <h6 class="card-title">16th April 2021</h6>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <h6 class="card-title">16th April 2021</h6>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <h6 class="card-title">16th April 2021</h6>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <h6 class="card-title">16th April 2021</h6>
                                                        <strong>AVAILABLE-40</strong>
                                                        <button class="btn btn-primary btn-sm btn-block">Request to Book</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide mr-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-success">Second Sitting (25)</h5>
                                                        <h6 class="card-title">16th April 2021</h6>
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

                    <table class="table">
                        <thead>
                            <tr>
                                <th width="18%" scope="col">Train Name</th>
                                <th scope="col">Train Number</th>
                                <th scope="col">Departure Time</th>
                                <th scope="col">Available Time to MSF</th>
                                <th scope="col">Seat Availability</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    Shatapdi Express
                                </td>
                                <td>124JSU726BS</td>
                                <td>9:30 AM IST</td>
                                <td>11:30 AM IST</td>
                                <td>
                                  25 <br />
                                    <button class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#exampleModal">
                                      Show Birth                                  
                                    </button>
                                    
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Shatapdi Express
                                </td>
                                <td>124JSU726BS</td>
                                <td>9:30 AM IST</td>
                                <td>11:30 AM IST</td>
                                <td>
                                  25 <br />
                                  <button class="btn btn-danger btn-sm">
                                    Show Birth                                  
                                  </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

</body>
</html>