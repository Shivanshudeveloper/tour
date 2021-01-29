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
            <li class="nav-item"><a href="travel.php" class="nav-link">Travel Tickets</a></li>
            <li class="nav-item"><a href="hotelbook.php" class="nav-link">Hotel</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
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
 
 

<section style="margin-top: 40px;" class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container w-50">
        <div class="card border-0">
            <div class="card-body">
                <br />
                <section class="mt-2">
                    <div>
                        <div>
                        <div class="card card-body shadow">
                            <h1 class="text-center mb-3">
                            <i class="fas fa-user-plus"></i> Register
                            </h1>
                            <form action="/users/register" method="POST">
                            <div class="form-group">
                                <!-- <label for="name">Name</label> -->
                                <div class="row">
                                    <div class="col">
                                        <input
                                            type="name"
                                            id="name"
                                            name="name"
                                            pattern="^([- \w\d\u00c0-\u024f]+)$"
                                            class="form-control"
                                            required="required"
                                            placeholder="Enter Full Name"
                                        />
                                    </div>
                                    <div class="col">
                                            <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" 
                                            class="form-control"
                                            required="required"
                                            placeholder="Enter Email"
                                            />
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <!-- <label for="password">Password</label> -->
                                <input
                                type="text"
                                id="password"
                                name="password"
                                class="form-control"
                                required="required"
                                placeholder="Phone No."
                                />
                            </div>
                            <div class="form-group">
                                <!-- <label for="password">Password</label> -->
                                <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                required="required"
                                placeholder="Create Password"
                                />
                            </div>
                            <div class="form-group">
                                <!-- <label for="password2">Confirm Password</label> -->
                                <input
                                type="password"
                                id="password2"
                                name="password2"
                                class="form-control"
                                required="required"
                                placeholder="Confirm Password"
                                />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Register
                            </button>
                            </form>
                            <p class="lead mt-4">Have An Account? <a href="signin.php">Sign In</a></p>
                        </div>
                        </div>
                    </div>
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