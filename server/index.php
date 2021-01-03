<?php
if (isset($_POST['volunteerApply'])) {
	include 'connection.php';
	$volunteerName = $_POST['volunteerName'];
	$volunteerEmail = $_POST['volunteerEmail'];
	$volunteerPhone = $_POST['volunteerPhone'];
	$volunteerMsg = $_POST['volunteerMsg'];
	$target_file = basename($_FILES["volunteerCV"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	$check = getimagesize($_FILES["volunteerCV"]["tmp_name"]);
	if ($imageFileType != "pdf") {
		$message = "Sorry, only PDF files are allowed";
		$uploadOk = 0;
	}
	if ($uploadOk) {
		$new_file_name = "uploads/" . uniqid() . "." . $imageFileType;
		if (move_uploaded_file($_FILES["volunteerCV"]["tmp_name"], $new_file_name)) {
			$query = "INSERT INTO `volunteer`(`name`, `mobile`, `email`, `message`, `resume`) VALUES ('$volunteerName','$volunteerPhone','$volunteerEmail','$volunteerMsg','$new_file_name')";
			$run = mysqli_query($conn, $query);
			if ($run) {
				$message = "Your application has been sent to admin";
			} else {
				$message = "Something Went wrong from side please try again later";
			}
		} else {
			$message = "Sorry, there was an error uploading your file.";
		}
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Nature_beauty</title>
	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="../css/intlTelInput.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../vendors/linericon/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="../vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">

		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="../img/logo.png" alt="logo" class="img-fluid"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
							<li class="nav-item"><a class="nav-link" href="donation.php">Donation</a></li>
							<li class="nav-item submenu dropdown">
								<a href="blog.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
								</ul>
							</li>

							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<h5>Raise Your Hands For Nature</h5>
					<h3>Donate For Nature</h3>

					<a class="main_btn" href="donation.php">Donate Now</a>
					<a class="white_btn" href="#">View Activity</a>
				</div>
			</div>
		</div>
		<div class="donation_area">
			<div class="container">
				<div class="row donation_inner">
					<div class="col-lg-4">
						<div class="dontation_item yellow">
							<div class="media">
								<div class="media-body">
									<h4>Total Donation</h4>
									<p>Total donation collected on this website.</p>
								</div>
								<div class="d-flex">
									<h3>$2.5M</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="dontation_item pink">
							<div class="media">
								<div class="media-body">
									<h4>Volunteer Reached</h4>
									<p>Total numbers of volunteers associated with us.</p>
								</div>
								<div class="d-flex">
									<h3>3268</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="dontation_item green">
							<div class="media">
								<div class="media-body">
									<h4>Happy Donators</h4>
									<p>Numbers of donors who donate frequently.</p>
								</div>
								<div class="d-flex">
									<h3>17000</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Welcome Area =================-->
	<section id="welcome_area" class="welcome_area p_90">
		<div class="container">
			<div class="row welcome_inner">
				<div class="col-lg-6">
					<div class="welcome_text">
						<h4>Welcome to Nature_beauty</h4>
						<p>There is a famous saying <strong>“If you want to be happy, make others happy”</strong>.
							This NGO helps those who are needy and makes them happy. We can’t help everyone singly.
							That’s why we need your support/contribution to help them.
						</p>
						<p class="mb-40">And to help someone we don’t need to have a deep pocket or to be rich, to help you just need a good heart.You have a good heart that’s why you are here.
							So,this is a humble request to donate any amount of your savings to start someone’s beautiful life.
						</p>
						<div class="row">
							<div class="col-sm-4">
								<div class="wel_item">
									<i class="lnr lnr-database"></i>
									<h4>$2.5M</h4>
									<p>Total Donation</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="wel_item">
									<i class="lnr lnr-book"></i>
									<h4>1465</h4>
									<p>Total Projects</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="wel_item">
									<i class="lnr lnr-users"></i>
									<h4>3965</h4>
									<p>Total Volunteers</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="welcome_img">
						<img class="img-fluid" src="../img/welcome-banner.png" alt="welcome-banner">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Welcome Area =================-->

	<!--================Causes Area =================-->
	<section class="causes_area p_90">
		<div class="container">
			<div class="main_title">
				<h2>Our Major Contributions</h2>
				<p>Some of the helps that we provided,of course with help of yours :</p>
			</div>
			<div class="causes_slider owl-carousel">
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-1.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Distributed Books</h4>
							<p>
								We have distributed almost 2 lakhs of books in schools and rural areas and help those needy students by providing them the course books to complete their studies and have a bright future.
							</p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-2.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Provided Water</h4>
							<p>Every Year there were many cases of drinking contaminated water. So we had also installed handpumps and provided water supply to rural areas where there is no source of water supply. </p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-3.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Provided food Packets</h4>
							<p>Food is a basic necessity. We distributed foods to beggars,road-side stayers,riksaw pullers and may others who are not capable to get a good food.</p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-4.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Helped Handicapped</h4>
							<p>We help handicapped people by providing them sticks, wheelchairs, crutches, walkers and many more accessories.</p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-5.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Helped Animals</h4>
							<p>We not only help humans but also animals.Build shelters for stray dogs,provided food.Also helped migrating birds and other animals.In Winters we provided them blankets to cover them and save them from cold. </p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-6.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Helped Old-aged parents</h4>
							<p>Some devilish child exciled their parents from therir house, so we provided them shelter and food and a reason to leave again and to be happy.</p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-3.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Provided food Packets</h4>
							<p>Food is a basic necessity. We distributed foods to beggars,road-side stayers,riksaw pullers and may others who are not capable to get a good food.</p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-4.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Helped Handicapped</h4>
							<p>We help handicapped people by providing them sticks, wheelchairs, crutches, walkers and many more accessories.</p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="causes_item">
						<div class="causes_img">
							<img class="img-fluid" src="../img/blog/causes/causes-5.jpg" alt="">
							<div class="c_parcent">
								<span></span>
							</div>
						</div>
						<div class="causes_text">
							<h4>Helped Animals</h4>
							<p>We not only help humans but also animals.Build shelters for stray dogs,provided food.Also helped migrating birds and other animals.In Winters we provided them blankets to cover them and save them from cold. </p>
						</div>
						<div class="causes_bottom">
							<a href="#">Raised: $50,689</a>
							<a href="#">Total Need: $500k</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Causes Area =================-->

	<!--================Feature Area =================-->
	<section id="feature_area" class="feature_area p_90">
		<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="white_title">
				<h2>Our Key Features</h2>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">1</span>
						<h3 class="title">Spread The Word</h3>
						<p class="description">Moto: " To be Happy, make Others Happy " Apart from all the things we do we learn keeping up our motto for all the needy people out there and then help them.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">2</span>
						<h3 class="title">Make Donations</h3>
						<p class="description">Donate as per your convenience. You can start dontaion form $20 to make someone's life happy.By help of this we can help people who are in real need of money.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">3</span>
						<h3 class="title">Adopt A Child</h3>
						<p class="description">If it is possible adopt a child and give her/him a better Future.It helps both of you, that child gets a better future and you get a reason to smile and to be happy.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">4</span>
						<h3 class="title">Make People Happy</h3>
						<p class="description">Your small donation can make someone’s reason to be happy. They also have equal rights to be happy.People being happy will be a part of our community and grow.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">5</span>
						<h3 class="title">Sponsor Needy</h3>
						<p class="description">If you have enough money you can sponsor us and help us to help others and spread happiness. By help of this we can reach to maximum amount of people out.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">6</span>
						<h3 class="title">Volunteer Now</h3>
						<p class="description">You can also become our member and help everyone to make their life easy.Below there is form if you want to volunteer.Fill and become our communities member.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">7</span>
						<h3 class="title">Tree Plantation</h3>
						<p class="description">With your donation we can have lands bought and plant trees over that particular land. And with these small donations trees can be planted.Thus can help earth.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">8</span>
						<h3 class="title">Saving Environment</h3>
						<p class="description">We work on saving the environment via various means like planting trees, stopping people from cutting forests up for their need busy taking up places.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">9</span>
						<h3 class="title">Water Conservation</h3>
						<p class="description">We need to conserve water because of the current scenario of global warming and rising temperature scenario.Thus we look out for conserving water too.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="serviceBox">
						<span class="service-icon">10</span>
						<h3 class="title">Save Animals</h3>
						<p class="description">Animals in present scenario are also facing a lot of cruelty from we people thus our volunteers will look for it so that this stops.Animals also have a happy place.</p>
						<a href="#" class="read-more">read more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Area =================-->


	<!--================Start Volunteer Area =================-->
	<section class="volunteer_area p_90">
		<div class="container">
			<div class="white_title">
				<h2>Volunteer Yourself</h2>
				<p>If you are a serious astronomy fanatic like a lot of us are, you can probably <br /> remember that one event in childhood that started.</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-7">
					<div class="xs-volunteer-form-wraper bg-aqua">
						<h2>Become a Volunteer</h2>
						<p>It only takes a minute to set up a campaign. Decide what to do. Pick a name. Pick a photo. And just like that, you’ll be ready to start raising money.</p>
						<form action="" method="POST" enctype="multipart/form-data" class="xs-volunteer-form" name="volunteerForm">
							<div class="row">
								<div class="col-lg-6">
									<input type="text" id="volunteer_name" name="volunteerName" class="form-control" placeholder="Your Name" required>
									<small></small>
								</div>
								<div class="col-lg-6">
									<input type="email" id="volunteer_email" name="volunteerEmail" class="form-control" placeholder="Your Email" required>
									<small></small>
								</div>
								<div class="col-lg-6">
									<input type="tel" id="volunteer_phone" name="volunteerPhone" class="form-control" placeholder="Phone Number" required>
									<small></small>
								</div>
								<div class="col-lg-6 xs-mb-20">
									<div class="xs-fileContainer">
										<input type="file" id="volunteer_cv" name="volunteerCV" class="form-control" name="file" accept="application/pdf" required>
										<label for="volunteer_cv">Upload Your CV</label>

									</div>
									<small></small>
								</div>
							</div>
							<textarea id="massage" name="volunteerMsg" placeholder="Enter your message" cols="30" class="form-control" rows="10" required></textarea><small></small>
							<button type="submit" name="volunteerApply" class="btn btn-secondary btn-color-alt">apply now</button>
						</form><!-- #volunteer-form .xs-volunteer-form END -->
					</div>
				</div>
			</div><!-- .row end -->
		</div>
	</section>

	<!--================End Volunteer Area =================-->

	<!--================Gallery Area =================-->
	<section id="gallery_area" class="gallery_area p_90">
		<div class="container">
			<div class="main_title">
				<h2>Events Gallery</h2>
				<p>Some of our frequently occured events snaps. <br /> A road to make others Happy.</p>
			</div>
		</div>
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-1.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-2.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-3.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-4.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-5.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-6.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-7.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-8.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="box">
						<img class="rutu" src="../img/gallery/g-9.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="#"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</section>

	<!--================Gallery Area End =================-->

	<!--================Testimonials Area =================-->
	<section class="testimonials_area p_90">
		<div class="container">
			<div class="row testimonials_inner">
				<div class="col-lg-4">
					<div class="testi_left_text">
						<h4>Testimonial from our Donors</h4>
						<p></p>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="testi_slider owl-carousel">
						<div class="item">
							<div class="testi_item">
								<img src="../img/testimonials/testi-1.png" alt="">
								<p> Look deep into nature, and then you will understand everything better. </p>
								<h4>Albert Einstein</h4>
								<h6>physicist</h6>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<img src="../img/testimonials/testi-2.png" alt="">
								<p>To me a lush carpet of pine needles or spongy grass is more welcome than the most luxurious Persian rug.</p>
								<h4>Helen Keller</h4>
								<h6>Author</h6>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<img src="../img/testimonials/testi-1.png" alt="">
								<p>“All my life through, the new sights of Nature made me rejoice like a child. ”</p>
								<h4>Admin 1</h4>
								<h6>Sales Head</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Testimonials Area =================-->



	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container" style="color: #ada8a8;">
			<div class="row">
				<div class="col-lg-6  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<img src=".././img/logo.png" style="max-width: 200px;">
						<p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Navigation Links</h6>
						<div class="row">
							<div class="col-4">
								<ul class="list">
									<li><a href="index.php" style="color: #ada8a8;">Home</a></li>
									<li><a href="about-us.php" style="color: #ada8a8;">About</a></li>
									<li><a href="donation.php" style="color: #ada8a8;">Donation</a></li>
								</ul>
							</div>
							<div class="col-4">
								<ul class="list">
									<li><a href="#" style="color: #ada8a8;">Blog</li>
									<li><a href="contact.php" style="color: #ada8a8;">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Contact Us</h6>
						<p class="my-3">
							<i class="fa fa-map-marker"></i> Delhi, India.
						</p>
						<a href="#"><i class="fa fa-facebook mx-2" style="font-size: 20px;"></i></a>
						<a href="#"><i class="fa fa-twitter mx-2" style="font-size: 20px;"></i></a>
						<a href="#"><i class="fa fa-linkedin mx-2" style="font-size: 20px;"></i></a>
						<a href="#"><i class="fa fa-instagram mx-2" style="font-size: 20px;"></i></a>
					</div>
				</div>
			</div>
			<div class="border_line"></div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-md-8 footer-text m-0">
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved. </p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/stellar.js"></script>
	<script src="../vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="../vendors/isotope/isotope-min.js"></script>
	<script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/easing.min.js"></script>
	<script src="../js/mail-script.js"></script>
	<script src="../js/theme.js"></script>
	<script src="../js/intlTelInput.min.js"></script>
	<script src="../js/intlTelInput-jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<?php if (isset($message)) { ?>
		<script>
			$.alert('<?php echo $message; ?>');
		</script>
	<?php } ?>
	<script>
		var input = document.querySelector("#volunteer_phone");
		window.intlTelInput(input, ({
			// whether or not to allow the dropdown
			allowDropdown: true,

			// if there is just a dial code in the input: remove it on blur, and re-add it on focus
			autoHideDialCode: true,

			// add a placeholder in the input with an example number for the selected country
			autoPlaceholder: "polite",

			// modify the auto placeholder
			customPlaceholder: null,

			// append menu to specified element
			dropdownContainer: null,

			// don't display these countries
			excludeCountries: [],

			// format the input value during initialisation and on setNumber
			formatOnDisplay: true,

			// geoIp lookup function
			geoIpLookup: null,

			// inject a hidden input with this name, and on submit, populate it with the result of getNumber
			hiddenInput: "",

			// initial country
			initialCountry: "in",

			// localized country names e.g. { 'de': 'Deutschland' }
			localizedCountries: null,

			// don't insert international dial codes
			nationalMode: true,

			// display only these countries
			onlyCountries: [],

			// number type to use for placeholders
			placeholderNumberType: "MOBILE",

			// the countries at the top of the list. defaults to united states and united kingdom
			preferredCountries: ["in", "us", "gb"],

			// display the country dial code next to the selected flag so it's not part of the typed number
			separateDialCode: false,

			// specify the path to the libphonenumber script to enable validation/formatting
			utilsScript: ""
		}));
	</script>
	<!-- <script src="../js/jquery.validate.js"></script> -->
	<script src="../js/validation.js"></script>
</body>

</html>