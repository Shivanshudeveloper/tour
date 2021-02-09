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
  <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
  <style>
    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
  </style>
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
        <div class="row mt-4">
            <div style="margin-top: 2%;" class="col-md">
                <div>
                    <div class="card card-body shadow">
                    <h2 class="font-weight-bold text-center">
                        Doctor Appointment
                    </h2>
                    <center>
                        <div class="row mt-2">
                            <div class="col">
                                <a href="doctors.php">
                                    <i class="fas fa-user-md h1 text-primary"></i><br />
                                    Doctor
                                </a>
                            </div>
                            <div class="col">
                                <a href="hospital.php">
                                    <i class="fas fa-hospital-alt h1 text-secondary"></i> <br />
                                    Hospital
                                </a>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <i class="fas fa-city h1 text-secondary"></i> <br />
                                    City
                                </a>
                            </div>
                        </div>
                    </center>
                    <form action="/users/login" method="POST">
                        <input type="text" class="form-control mt-2" placeholder="Doctors Name">

                        <select class="form-control mt-2" id="exampleFormControlSelect1">
                            <option selected>Speciality</option>
                            <option value="Allergy">Allergy</option>
                            <option value="Bariatric Surgery/ obesity management">Bariatric Surgery/ obesity management</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Cardiothoracic/ Cardiovascular Surgeries">Cardiothoracic/ Cardiovascular Surgeries</option>
                            <option value="Chest & Pulmonary">Chest & Pulmonary</option>
                            <option value="Cosmetic Surgery">Cosmetic Surgery</option>
                            <option value="Dental Care/ dental surgery">Dental Care/ dental surgery</option>
                            <option value="Dermatology">Dermatology</option>
                            <option value="Diabetes & Endocrinology">Diabetes & Endocrinology</option>
                            <option value="ENT, head & neck">ENT, head & neck</option>
                            <option value="Gastroenterology">Gastroenterology</option>
                            <option value="General Surgery">General Surgery</option>
                            <option value="Geriatric Care">Geriatric Care</option>
                            <option value="Haemetology">Haemetology</option>
                            <option value="Infertility/ Reproductive machine">Infertility/ Reproductive machine</option>
                            <option value="Liver / Hepatology">Liver / Hepatology</option>
                            <option value="Mental Health & Behavioral Sciences">Mental Health & Behavioral Sciences</option>
                            <option value="Neonatology">Neonatology</option>
                            <option value="Nephrology">Nephrology</option>
                            <option value="Neurology/ Neurosurgery/ Spinal">Neurology/ Neurosurgery/ Spinal</option>
                            <option value="Obstetrics & Gynecology">Obstetrics & Gynecology</option>
                            <option value="Oncology (Cancer)">Oncology (Cancer)</option>
                            <option value="Oncology (Eye)">Oncology (Eye)</option>
                            <option value="Orthopedics / Joint replacements (Bone/Joints)">Orthopedics / Joint replacements (Bone/Joints)</option>
                            <option value="Pediatrics & Pediatric Surgery">Pediatrics & Pediatric Surgery</option>
                            <option value="Physiotherapy & rehabilitation">Physiotherapy & rehabilitation</option>
                            <option value="Plastic Surgery / Reconstructive surgery">Plastic Surgery / Reconstructive surgery</option>
                            <option value="Urology">Urology</option>
                            <option value="Vascular Surgery">Vascular Surgery</option>
                            <option value="Sleep Medicine">Sleep Medicine</option>
                        </select>

                        <input type="text" class="form-control mt-2" placeholder="Place">
                        
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-2 shadow">Search</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-md mt-4">
                <section>
                    <div>
                        <img class="shadow rounded w-100 mt-4" src="http://theneutralview.com/wp-content/uploads/2017/10/doctor.jpg" />
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<section style="padding-top: 8vh;" class="mt-4 mb-4">
    <div class="container">
      
        <?php
            include_once './src/php/dbh.php';
            $sql = "SELECT * FROM doctors;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <div class="card mt-2 shadow">
                        <div class="card-body">
                            <span class="float-right">
                            (4.5/5) <i class="fas text-warning h5 fa-star"></i>
                            </span>
                            <img src="'.$row['photo'].'" alt="Avatar" class="avatar">
                            <h5 class="card-title">'.$row['name'].'</h5>
                            <h6 class="card-subtitle mb-2 text-muted">New Delhi</h6>
                            <p class="card-text">'.$row['description'].'</p>
                            <a href="#" class="btn btn-outline-primary float-right">Book Appointment</a>
                        </div>
                    </div>
                ';
            }
        
        ?>

        


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