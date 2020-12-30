<?php
require 'connection.php';



if (isset($_POST['submit'])) {
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
    $mobile = $conn -> real_escape_string($_POST['number']);
    $message = $conn -> real_escape_string($_POST['message']);
    $subject = $conn -> real_escape_string($_POST['subject']);

    $query="INSERT INTO `messages`(`name`, `message`, `email`, `mobile`, `subject`) VALUES ('$name','$message','$email','$mobile','$subject')";
    if(mysqli_query($conn,$query)){
        $message="Message Sent";
    }else{
        $message="Something Went Wrong From Our Side";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./img/our-mission.jpg" type="image/x-icon">
    <title>Nature_Beauty</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="../vendors/animate-css/animate.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="../img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="donation.php">Donation</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="blog.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
                                </ul>
                            </li>

                            <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact/Enquiry </h2>
                    <div class="page_link">
                        <a href="#">Home</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!--Google map-->
                    <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 460px">
                        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card text-center" style="width: 100%;border: 1px solid #eee;box-shadow: 5px 5px 3px #c4c4c4">
                        <div class="card-body" style="background:#fff;">
                            <span class="header">
                                <h3>GET IN TOUCH</h3>
                            </span>
                            <form class="contact_form" action="" method="post" id="contactForm">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true" style="color:#fff"></i></span>
                                    <input class="form-control" name="name" type="text" id="name" placeholder="Name" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true" style="color:#fff"></i></span>
                                    <input class="form-control" name="email" type="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-fw" aria-hidden="true" style="color:#fff"></i></span>
                                    <input class="form-control" name="number" type="tel" pattern="[0-9]{10}" minlength="10" id="phone" placeholder="Phone" oninvalid="this.setCustomValidity('Enter 10 Digit Phone Number Here')" oninput="this.setCustomValidity('')" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag fa-fw" aria-hidden="true" style="color:#fff"></i></span>
                                    <input class="form-control" name="subject" type="text" placeholder="Subject" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true" style="color:#fff"></i></span>
                                    <textarea class="form-control" name="message" id="message" row="1" placeholder="Message" required></textarea>
                                </div>
                                <div text-center>
                                    <button type="submit" value="submit" name="submit" class="btn submit_btn">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->


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
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
    <script src="../js/mail-script.js"></script>
    <!-- contact js -->
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/contact.js"></script>
    <?php if(isset($message)){?>
    <script>
        alert('<?php echo $message; ?>');
    </script>
    <?php } ?>
</body>

</html>