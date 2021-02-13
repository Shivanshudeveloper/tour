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
  <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
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
 
 

<section style="margin-top: 40px;" class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">
        <div class="card border-0">
            <div class="card-body">
                <br />
                <h2 class="font-weight-bold text-center">
                    Contact Us
                </h2>
                <br />
                <section class="mt-2">
                  <section class="ftco-section ftco-no-pb contact-section mb-4">
                      <div className="container">
                        <div className="row">
                          <div className="col">
                            <div class="card">
                              <div class="card-body">
                                <h2 class="card-title">Corporate Mailing Address</h2>
                                <h6 class="card-subtitle mb-2 text-muted">2200 Mission College Blvd. </h6>
                                <h6 class="card-subtitle mb-2 text-muted">Santa Clara, CA 95054-1549  </h6>
                                <h6 class="card-subtitle mb-2 text-muted">USA</h6>
                                <h6 class="card-subtitle mb-2 text-muted">US(408) 765-8080 A</h6>
                              </div>
                            </div>
                          </div>
                          <br />
                        </div>
                      </div>
                  </section>
                </section>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex">
       <div class="align-self-stretch box p-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-map-marker"></span>
       </div>
       <h3 class="mb-2">Address</h3>
       <p>198 West 21th Street, Suite 721 New York NY 10016</p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="align-self-stretch box p-4 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-phone"></span>
     </div>
     <h3 class="mb-2">Contact Number</h3>
     <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
   </div>
 </div>
 <div class="col-md-3 d-flex">
   <div class="align-self-stretch box p-4 text-center">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-paper-plane"></span>
   </div>
   <h3 class="mb-2">Email Address</h3>
   <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
 </div>
</div>
<div class="col-md-3 d-flex">
 <div class="align-self-stretch box p-4 text-center">
  <div class="icon d-flex align-items-center justify-content-center">
   <span class="fa fa-globe"></span>
 </div>
 <h3 class="mb-2">Website</h3>
 <p><a href="#">yoursite.com</a></p>
</div>
</div>
</div>
</div>
</section>


<section style="background-color: gainsboro;" class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">
      <div class="col">
        <form action="#" class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
   </div>
 </div>
</section>

<section class="mt-4 mb-4">
    <div class="container">
        <h1>
        FAQs
        </h1>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 <b class="text-danger">|</b> How do I contact customer care ?
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body text-dark">
                Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <b class="text-danger">|</b> I want to view my current bill ?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body text-dark">
                Some placeholder content for the second accordion panel. This panel is hidden by default.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <b class="text-danger">|</b> I want to know about my current package ?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body text-dark">
                And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <b class="text-danger">|</b> I want to change my basepack ?
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body text-dark">
                And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <b class="text-danger">|</b> I can I reach DTH call center ?
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body text-dark">
                And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
              </div>
            </div>
          </div>

        </div>
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

<script src="src/js/firebase-config.js"></script>
<script src="src/js/main.js"></script>
<script src="src/js/checkuser.js"></script>
</body>
</html>