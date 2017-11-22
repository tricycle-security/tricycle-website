﻿<?php
if(isset($_POST['submit'])){
    $to = "contact-tricycle.nl"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Message from " . $name;
    $subject2 = "Copy of your request to TriCylce";
    $message = $name . " has written the following:" . "\n\n" . $_POST['message'];
    $message2 = "here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
	$_POST['name'] = null;
	$_POST['email'] = null;
	$_POST['message'] = null;
    header('Location: thank_you.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tricylce, Designed for security</title>
	<meta name="description" content="Tricylce, Designed for security" />
	<meta name="keywords" content="" />
	<meta name="author" content="Joey van Venrooij" />
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#0000">
	<!-- Normalize -->
	<link rel="stylesheet" async type="text/css" href="css/normalize.css" media="none" onload="if(media!='all')media='all'">
	<!-- Bootstrap -->
	<link rel="stylesheet" async type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css" media="none" onload="if(media!='all')media='all'">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="none" onload="if(media!='all')media='all'">
	
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css" media="none" onload="if(media!='all')media='all'">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css" media="none" onload="if(media!='all')media='all'">
	<!-- Main style -->
	<link rel="stylesheet" async type="text/css" href="css/cardio.css">

	

</head>

<body>


	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>-->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">home</a></li>
					<li><a href="#principles">Principles</a></li>
					<li><a href="#team">The team</a></li>
					<li><a href="#pricing">Services</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Contact us</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div id="particles-js" style="    position: absolute;
    width: 100%;
height:925px;
   z-index:20;
    background-position: 50% 50%;
   
	"></div>

		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
						<img  class="roundr" src="img/tricycle-image-only-white-center.png" style="height:120px;"></img></br>
							<img src="img/logotextwhite.png" style="height:120px;"></img></br>
							<h2 class="white typed">Thank you for sending us an email we will respond as quick as possible</h2>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section id="principles" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Services</h2>
				<h4 class="light muted">We aim to find the security flaws you can't even imagine</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/succces-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Secure</h4>
						<p class="description">We will handle your data as if it was our own, and we are pretty paranoid</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/fastforward-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Always ready</h4>
						<p class="description">We will always be ready when you need us so go ahead and contact us at the top of the page</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/euro-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Low cost</h4>
						<p class="description">This is a school project and they do not pay us at all</p>
					</div>
				</div>
			</div>
		</div>
	
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">The team</h2>
				<h4 class="light muted">Who  are we?</h4>
			</div>
			<div class="row">
				<div class="col-md-12 center-block">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<img src="img/logotextwhite.png" style="height:100px;"></img></br>
								<h5 class="light light-white">Students with a plan for the future</h5>
							</div>
						</div>
						
						<div class="title">
							<h4></h4>
							<h5 class="muted regular">We are a team of six students doing a computer security minor at hogeschool Rotterdam. We are all very enthusiastic about all of the projects and many of seek a future in security. Because we still seek a future in security we go the extra step to make a name for ourselves. We will be available whenever we do not have classes and are happy to be contacted about interesting projects even outside of the minor.</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Contact us</a>
					</div>
				</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Services</h2>
				<h4 class="light white">Click on the blocks for more info</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Code audit</h4>
							
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Contact us</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>Quick scanning</li>
								<li>Need source code</li>
								<li>White box</li>
								<li>Support many languages</li>
								<li>Can go further with pentests</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing1.jpg">
							<h4 class="white">Pen test</h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Contact us</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>from white to black box</li>
								<li>Continues updates</li>
								<li>Specify how deep we can go</li>
								<li>Multiple techniques</li>
								<li>Will ask before hand</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-certificate"></i>
							<h4 class="white light">The true computer hackers follow a certain set of ethics that forbids them to profit or cause harm from their activities.</h4>
							<h4 class="light-white light">Kevin Mitnick</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-certificate"></i>
							<h4 class="white light">“Being able to break security doesn’t make you a hacker anymore than being able to hotwire cars makes you an automotive engineer.”</h4>
							<h4 class="light-white light">Eric Raymond</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-certificate"></i>
							<h4 class="white light">“If you think technology can solve your security problems, then you don’t understand the problems and you don’t understand the technology.”</h4>
							<h4 class="light-white light">Bruce Schneier</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Contact</h3>
				<h4 class="white">Phone: 06 34 866 062</h3>
				<form action="" class="popup-form" method="post">
					<input type="text" required="required" class="form-control form-white" placeholder="Name" name="name">
					<input type="email" required="required" class="form-control form-white" placeholder="E-mail" name="email" >
					<textarea class="form-control form-white" rows="5" id="comment" required="required" placeholder="Your question" name="message"></textarea>
					<button type="submit" class="btn btn-submit" name="submit">Send your request</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
	
		<!-- scripts -->
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>

	<!-- stats.js -->
	<script src="js/lib/stats.js"></script>
		<script src="js/jqueryrotate.js"></script>
	<script>
	particlesJS.load('particles-js', 'particles.json', function() {
		console.log('callback - particles.js config loaded');
});
	particlesJS.load('particles-jss', 'particles.json', function() {
		console.log('callback - particles.js config loaded');
});

$(document).ready(function() {
var rotation = function (){
  $(".roundr").rotate({
	  duration:3000,
    angle:0,
    animateTo:360,
	wait: 5,
    callback: rotation
  });
}
rotation();
});
</script>

</body>

</html>
