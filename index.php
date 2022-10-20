<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
Hello, <?php echo $user_data['user_name']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tenders.Com</title>
    <!-- websiteicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.jpg" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/logo.jpg" width="100" height="100"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0"> 
                <li class="nav-item"><a class="nav-link" href="#registration" style="color : white(0,0,0)"></a>Register</li>
                <li class="nav-item"><a class="nav-link" href="#tenders" style="color: rgb(0, 0, 0);">Tenders</a></li>
                <li class="nav-item"><a class="nav-link" href="#about" style="color: rgb(255, 0, 0);">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact" style="color: rgb(0, 255, 94);">Contact Us</a></li>
            </ul>
            <div class="menu-icons">
                <i class="bi bi-search" id="search-button"></i>
                <i class="bi bi-person" id="user-button"></i>
            </div>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Want to apply for a government tender?</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <!-- <p class="text-white-75 mb-5"></p> -->
                <a class="btn btn-primary btn-xl" href="#application">Apply now</a>
            </div>
        </div>
    </div>
</header>

<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">

                    <img src="assets/img/registrationicon.png" width="70" height="70">
                    <br>
                    <a class="btn btn-primary btn-xl" href="#about">Apply for a Tender?</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">

                    <img src="assets/img/fileicon.png" width="70" height="70">
                    <br>
                    <a class="btn btn-primary btn-xl" href="#about">Register to be part of us?</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">

                    <img src="assets/img/profileicon.png" width="70" height="70">
                    <br>
                    <a class="btn btn-primary btn-xl" href="#about">View Profile</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">

                    <img src="assets/img/paymenticon.png" width="70" height="70">
                    <br>
                    <a class="btn btn-primary btn-xl" href="#about">Check updates</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About-->
<section class="page-section " id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-danger mt-0">VISION</h2>
                <h4 class="text-black mt-0">A Countrywide Trusted Revenue Agency Facilitating Tax and Customs Compliance</h4>
                <hr class="divider divider-light" />
                <h2 class="text-danger mt-0">MISSION</h2>
                <h4 class="text-black mt-0">To enhance mobilisation of government revenue and to facilitate growth in economic 
                    activities and trade by ensuring compliance with tax and customs laws</h4>
                <hr class="divider divider-light" />
                <h2 class="text-danger mt-0">VALUES</h2>
                <h4 class="text-black mt-0">Trustworthy, Ethical, Competent, Helpful,Simple</h4>
                <hr class="divider divider-light" />
            </div>
        </div>
    </div>
</section>
<!--Footer-->
<section>
    <footer class="homepage-footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>Office</h4>
                    <p>Times tower,Haile<br>Selassie Avenue<br>P.O.Box 48240-00100 GPO<br>Nairobi<br>Tel:020-310300,020-28100 Fax:341342<br>
                        Call Center details Tel:020-49999999,020-499800<br>Cell:0711-09999<br>Email:callcentre@kra.go.ke</p>
                </div>
                <div class="footer-col">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">Resources</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href=""> Our Services</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Social Media</h4>
                    <a href="">Facebook<i class="bi bi-facebook"></i></a><br>
                    <a href="">Instagram<i class="bi bi-instagram"></i></a><br>
                    <a href="">Twitter<i class="bi bi-twitter"></i></a><br>
                    <a href="">Youtube<i class="bi bi-youtube"></i></a>
                </div>
                <div class="footer-col">
                    <h4>Newsletter</h4>
                    <i class="bi bi-envelope" id="envelope"></i>
                    <input type="email"placeholder="Enter your email" required>
                    <button type="submit"><i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </footer>
</section>



<script src="./js/scripts.js" rel="stylesheet"></script>
</body>
</html>