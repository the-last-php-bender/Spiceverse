<?php
    session_start();
    include '../backend/data/functions.php';
    if(!$_SESSION['email']){
      header('location:../index.html');
    }

?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SpiceVerse</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="../css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="../css/animate.min.css">

		<link rel="stylesheet" href="../css/main.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="../css/responsive.css">
		<!-- Js -->
    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="../js/jquery.nav.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/main.js"></script>
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area" style="width:100%; height=100vh">
      <img class="img-responsive" width=100% height=100% src="../images/header.jpg" alt="">
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#">
                                    <h1>SpiceVerse</h1>
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="#hero-area">Home</a></li>
                                <li><a href="#about-us">About us</a></li>
                                <li><a href="#product">Blog</a></li>
                                <li><a href="#farmers">Farmers</a></li>
                                <li><a href="#contact-us">contacts</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    <!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Featured <span>Works</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="../images/slider/slider-img-1.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="../images/slider/slider-img-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="../images/slider/slider-img-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="../images/slider/slider-img-4.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="../images/slider/slider-img-1.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="../images/slider/slider-img-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="../images/slider/slider-img-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="../images/slider/slider-img-4.jpg" alt="">
                            </div>
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--
    about-us start
    ============================== -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <img class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" style="border-radius: 50%;" src="../images/blog/blog-img-2.jpg" alt="cooker-img">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">No 1<span></span> </br> SpiceVerse <span>Company</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">A Nigeria Company  Revolutionarizing the spice industry in Nigeria! </br> 
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
    <!--
    blog start
    ============================ -->
    <section id="product">
            <div class="title" >
                <h3 style="text-align:center;color:white;">Our <span>Products</span></h3>
            </div>
        <div class=main-container>
            <div class="img">
                <img class="picture" src="../images/blog/blog-img-1.jpg" alt="Equipments">
            </div>

            <div class="img">
                <img class="picture" src="../images/blog/blog-img-2.jpg" alt="Equipments">
            </div>
            <div class="img">
                <img class="picture" src="../images/blog/blog-img-3.jpg" alt="Equipments">
            </div>
            <div class="img">
                <img class="picture" src="../images/blog/blog-img-4.jpg" alt="Equipments">
            </div>
            <div class="img">
                <img class="picture" src="../images/blog/blog-img-5.jpg" alt="Equipments">
            </div>
            <div class="img">
                <img class="picture" src="../images/blog/blog-img-6.jpg" alt="Equipments">
            </div>
        </div>
    </section><!-- #blog close -->
    <!--
    price start
    ============================ -->
    <section id="farmers">
        <div class="container">
            <div class="title" >
                <h3 style="text-align:center">Meet Spice verse<span> Farmers</span></h3>
            </div>
            <table class="table">
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Spice Name</th>
                <th>price </th>
                <th>Contact Farmer</th>
            </tr>
            <tr>
                <?php
                $query="SELECT * FROM spicetb";
                $user=new User();
                $session=$_SESSION['email'];
                $select_user=$user->select_user();
                $execute_user=$select_user->execute([$session]);
                while($row=$select_user->fetch()){
                    $firstname=$row['firstname'];
                    $lastname=$row['lastname'];
                    $spicename=$row['spicename'];
                    $price=$row['price'];
                    $email=$row['email'];
                    echo "<td>$firstname</td>
                    <td>$lastname</td>
                    <td>$spicename</td>
                    <td>$price</td>
                    <td><a href='mailto:$email'>Send Email</a></td>";
                } 
                ?>
            </tr>
            </table>
        </div><!-- .containe close -->
    </section><!-- #price close -->
    <!--
    subscribe start
    ============================ -->
    <!-- IMPLEMENTING THE FARMERS TABLE HERE  -->
    
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> SUBSCRIBE <span>to our</span> NEWSLETTER</h1>
                        <h3 style="color:white;"class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">We'll give you just the right amount of love! </h3>
                        <p class="wow fadeInUp" data-wow-duration="300ms"data-wow-delay="400ms">Sign up for our weekly update and be the first to know about our specials and promotinns</p>
                        <p class="wow fadeInUp" data-wow-duration="300ms"data-wow-delay="400ms">No Spam, we promise </p>
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter your email to subscribe...">
                                    <div class="input-group-addon">
                                        <button class="btn btn-default" type="submit">subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #subscribe close -->
    <!--
    CONTACT US  start
    ============================= -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>CONTACT US</span></h1>
                        <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Sign Up for <span>Email Alerts</span> </h3>
                        <form>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="text" class="form-control" placeholder="Write your email address here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                            </div>
                        </form>
                        <a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">send your message</a>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telephone</h4>
                                  <p>+2347012656933</p>
				                    <p>+237018146587</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p> Lagos, Nigeria</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>Email</h4>
                                  <p>spiceverse@gmail.com</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="700ms">
                        <h3>LATEST <span>BLOG POSTS</span></h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <h4><a href="#">Jun 8-2023</a></h4>
                                    <p>Introducing SpiceVerse to the world</p>
                                </li>
                            </ul>                
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="gallary">
                            <h3>PHOTO <span>STREAM</span></h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="../images/blog/together.jpg" width=50 height=50 alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../images/blog/practical.jpg" width=50 height=50 alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../images/blog/practical1.jpg"width=50 height=50  alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../images/blog/girls.jpg"width=50 height=50  alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2023 - All Rights Reserved. Design and Developed By Spiceverse</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>
