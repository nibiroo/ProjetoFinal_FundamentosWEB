<?php
  include './php/connect.php';
  include './php/checkLogin.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pet Sitter a Animals Category Responsive Web Template | Contact :: W3layouts</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1><a class="navbar-brand" href="indexLogin.php"><span class="fa fa-paw mr-2" aria-hidden="true"></span> 
            Pet Sitter
            </a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="indexLogin.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner editContent">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="indexLogin.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active editContent">Contact</li>
</ul>
</div>
</div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        <div class="container">
            <div class="main-titles-head text-center">
                <h3 class="header-name editContent">
                    Get in Touch
                </h3>
                <p class="tiltle-para editContent editContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
            <div class="d-grid contact-view">
                <div class="cont-details">
                   <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <p class="para"><a href="tel:+44 99 555 42">+123 45 67 89</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <p class="para"><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <p class="para"> California, #32841 block,
                               <br> #221DRS 75 West Rock,<br> Maple Building, UK.</p>
                        </div>
                    </div>
                </div>
                <div class="map-iframe ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="300" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                </div>
 
    </div>
    <div class="map-content-9 mt-5">
        <form action="https://sendmail.w3layouts.com/submitForm" method="post">
            <div class="twice-two">
                <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name" required="">
                <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email" required="">
            </div>
            <div class="twice">
                <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject" required="">
            </div>
            <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message" required=""></textarea>

            <div class="text-right">
            <button type="submit" class="btn btn-contact">Send Message</button>
        </div>
        </form>
    </div>
    </div></div>
</section>
<section class="w3l-footer-29-main">
	<div class="footer-29 py-5">
	  <div class="container py-lg-4">
		<div class="row footer-top-29">
		  <div class="col-lg-5 col-md-6 col-sm-12 footer-list-29 footer-1">
				<h2><a href="indexLogin.php" class=""><span class="fa fa-paw mr-2" aria-hidden="true"></span> Pet Sitter</a></h2>
				<p>Adipisicing elit. Lauda ntium, archi tecto iure Lorem incidunt iosam qui quo moll itia veniam recus andae archi tecto earum suscipit exce pturi dicta nemo quam.</p>
  </div>
		  <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3">
			  <h6 class="footer-title-29">Get in Touch</h6>
		
			  <div class="column2">
								<div class="href1"><span>E-mail:</span><a href="mailto:mail@company.com">mail@company.com</a>
								</div>
								<div class="href2"><span>Phone:</span><a href="tel:+(12)-00 222 00008">+(12)-00 222 00008</a>
								</div>
								<div>
									<p class="contact-para">California, 75 West Rock,
										Maple Building.</p>
								</div>
							</div>
		  </div>
		  <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4">
			<h6 class="footer-title-29">Newsletter </h6>
			<p>Enter your email and receive the latest news from us.
			 We'll never share your email address</p>
  
			<form action="#" class="subscribe" method="post">
			  <input type="email" name="email" placeholder="Your Email Address" required="">
			  <button><span class="fa fa-envelope-o"></span></button>
			</form>
		  </div>
		</div>

	  </div>
	</div>
	<div class="bottom-copies text-center">
		<div class="container">
		<p class="copy-footer-29">© 2020 Pet Sitter. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
	</div>
	</div>
  </section>


<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-eject"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>