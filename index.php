<!DOCTYPE html>
<html>
<head>
	<title>FASDAY XII Universitas Esa Unggul</title>
	<meta charset="utf-8">
	<meta name="author" content="Ade Sulaeman">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">

	<link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript" src="js/jquery-1.6.4.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/countdown.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>  

    <script type="text/javascript">
		$(document).ready(function() {
		
			$("#countdown").countdown({
				date: "12 march 2017 1:50:30", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
				format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
			},
			
			function() { 
				
				// the code here will run when the countdown ends
				alert("done!") 

			});
		});
	</script>
</head><!--/head-->
</head>
<body>
<?php 
session_start();
include 'blog/includes/koneksi.php'; 
?>
	<header id="header" role="banner">
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="http://www.twitter.com/bemfasilkomueu"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="https://www.youtube.com/channel/UCea1UV_wPYKafV-2JmxAtMg"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
 				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
		                	<img class="img-responsive" src="images/logo_fasday.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>                         
		                    <li class="scroll"><a href="#event">Event</a></li>
		                    <li class="scroll"><a href="#about">About</a></li> 
		                    <li class="scroll"><a href="#explore">Explore</a></li>                    
		                    <li class="scroll"><a href="#twitter">News</a></li>
		                    <li><a class="no-scroll" href="comming/comming.html" target="_blank">PURCHASE TICKETS</a></li>
		                    <li class="scroll"><a href="#contact">Contact</a></li>       
		                </ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--/#header--> 

	<section id="home">
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/slider/1.jpg" alt="slider">						
					<div class="carousel-caption">
						<h2>Siapkan Diri Anda!</h2>
						<h4>Bigest Event at Fasilkom UEU</h4>
						<a href="#explore">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/2.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>DAFTARKAN DIRI ANDA</h2>
						<h4>IKUTI SEMINAR, WORKSHOP DAN PERLOMBAAN FASDAY XII</h4>
						<a href="#explore">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/3.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>KUNJUNGI FASDAY XII</h2>
						<h4>NIKMATI SATU MINGGU BERSAMA FASDAY XII</h4>
						<a href="#explore" >GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>				
	</section>

	<section id="event">
		<div class="container">
			<div class="row">
				<div class="guitar">
					<img class="img-responsive" src="images/guitar.png" alt="guitar">
				</div>
				<div class="col-sm-12 col-md-9">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading">All Event</h2>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/1.jpg" alt="event-image">
											<h4>Opening & Closing Ceremony</h4>
											<h5>Workshop & Parade Bakat Mahasiswa</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/2.jpg" alt="event-image">
											<h4>Seminar</h4>
											<h5>Internet Of Things For Infrastrucre</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/3.jpg" alt="event-image">
											<h4>Workshop</h4>
											<h5>Android/CCNA Cisco Academy</h5>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/4.jpg" alt="event-image">
											<h4>Pameran Teknologi</h4>
											<h5>Product Mahasiswa & Start Up</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/fun.jpg" alt="event-image">
											<h4>Fun Event</h4>
											<h5>Fun Walk or Sports Fun</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/futsal.jpg" alt="event-image">
											<h4>Futsal Competition</h4>
											<h5>Antar Fasilkom PTN/PTS</h5>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/pes.jpg" alt="event-image">
											<h4>Pro Evolution Soccer Tournament</h4>
											<h5></h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/dot.jpg" alt="event-image">
											<h4>Tourney Dota</h4>
											<h5>Online Game</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/fasday/net.jpg" alt="event-image">
											<h4>Networking Competition</h4>
											<h5>Create Server with Debian</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>			
		</div>
	</section><!--/#event-->

	<section id="about">
		<div class="guitar2">				
			<img class="img-responsive" src="images/guitar2.jpg" alt="guitar">
		</div>
		<div class="about-content">					
					<h2>About Fasday XII</h2>
					<p>Fasilkom Days XII Merupakan Kegiatan untuk merayakan anniversary Fasilkom Universitas Esa Unggul. <br>
					Fasilkom Days akan berlangsung sepekan di Universitas Esa Unggul.<br>
					Ikuti Keseruan FASDAY XII !</p>
					<a href="comming/comming.html" class="btn btn-primary">View Date & Place <i class="fa fa-angle-right"></i></a>
				
		</div>
	</section><!--/#about-->

	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="images/watch.png" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>our event in <br> FASDAY XII</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
		<li>
			<span class="days">00</span>
			<p class="timeRefDays">days</p>
		</li>
		<li>
			<span class="hours">00</span>
			<p class="timeRefHours">hours</p>
		</li>
		<li>
			<span class="minutes">00</span>
			<p class="timeRefMinutes">minutes</p>
		</li>
		<li>
			<span class="seconds">00</span>
			<p class="timeRefSeconds">seconds</p>
		</li>
	</ul>
				</div>
			</div>
			<div class="cart">
				<a href="comming/comming.html"><i class="fa fa-shopping-cart"></i> <span>Purchase Tickets</span></a>
			</div>
		</div>
	</section><!--/#explore-->
 
	<section id="twitter">
		<div id="twitter-feed" class="carousel slide" data-interval="false">
			<div class="twit">
				<img class="img-responsive" src="images/light.png" alt="">
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
				<font color="#00abed"><h2 align="center">News and Feed</h2></font>
					<div class="text-center carousel-inner center-block">
					<?php
					try {
						$stmt = $db->query('SELECT postID, postTitle, postDesc, postCategory, postDate FROM blog_posts ORDER BY postID DESC');
						$data = $stmt->fetch();

						if ($data['postCategory'] == "informasi") {
    						$icon = "images/info/info.png";
						} else if ($data['postCategory'] == "pengumuman") {
    						$icon = "images/info/pengumuman.png";
						} else if ($data['postCategory'] == "berita") {
							$icon = "images/info/berita.png";
						} else {
							$icon = "images/info/un.ico";
						}
					?>
					<div class="item active">
							<img src="<?php echo($icon) ?>" alt="">
							<?php
								echo "<div>";
								echo '<h1><a href="viewpost.php?id='.$data['postID'].'">'.$data['postTitle'].'</a></h1>';
								echo '<p>'.$data['postDesc'].'</p>';
								echo '<p><a href="blog/viewpost.php?id='.$data['postID'].'">Read More</a></p>';
								echo '</div>';
							?>
					</div>
						<?php
						while($row = $stmt->fetch()){

						if ($row['postCategory'] == "informasi") {
    						$iconrow = "images/info/info.png";
						} else if ($row['postCategory'] == "pengumuman") {
    						$iconrow = "images/info/pengumuman.png";
						} else if ($row['postCategory'] == "berita") {
							$iconrow = "images/info/berita.png";
						} else {
							$iconrow = "images/info/un.ico";
						}
						?>
						<div class="item">
							<img src="<?php echo ($iconrow) ?>" alt="">
							<?php
								echo "<div>";
								echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
								echo '<p>'.$row['postDesc'].'</p>';
								echo '<p><a href="blog/viewpost.php?id='.$row['postID'].'">Read More</a></p>';
								echo '</div>';
							?>
						</div>
					<?php
						}
					} catch(PDOException $e) {
			    		echo $e->getMessage();
					}
					?>
					</div>
					<a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>		
	</section><!--/#twitter-feed -->

	<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<h2><u>Sponsors</u></h2>			
						<a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/1.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/2.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/3.png" alt=""></a></li>
								</ul>
							</div>
							<div class="item">
								<ul>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/sponsor6.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/sponsor5.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/sponsor4.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sponsor2-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">	
					<div class="col-sm-10">
					<hr>
						<h2><u>Organized & Support</u></h2>
						<a class="sponsor-control-left" href="#sponsor2-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor2-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
									<li><a href="http://www.esaunggul.ac.id"><img class="img-responsive" src="images/ueu.png" alt=""></a></li>
									<li><a href="http://fasilkom.esaunggul.ac.id"><img class="img-responsive" align="text-center" src="images/fasilkom.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/bemfasilkom.png" alt=""></a></li>
								</ul>
							</div>
							<div class="item">
								<ul>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/dpmf.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/himastika.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/humanis.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sponsor3-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">	
					<div class="col-sm-10">
					<hr>
						<h2><u>Media Partner</u></h2>
						<a class="sponsor-control-left" href="#sponsor3-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor3-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
								<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/TIAStudent.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/sponsor5.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/sponsor4.png" alt=""></a></li>
								</ul>
							</div>
							<div class="item">
								<ul>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/1.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/2.png" alt=""></a></li>
									<li><a href="comming/sponsorship.html"><img class="img-responsive" src="images/sponsor/3.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="light">
				<img class="img-responsive" src="images/sponsors.png" alt="">
			</div>
		</div>
	</section><!--/#sponsor-->
    

    <section id="contact">
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="images/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								Name : Abdul Rahim <br>
								Phone: 0898 4780 417<br>
								E-mail: info@fasday.id<br>
							</address>
						</div>
						<div class="contact-address">
							<h3>Kesekretariatan</h3>
							<address>
								PKM Fasilkom <br>
								Gedung PKM LT 2 <br> 
								Universitas Esa Unggul<br>
								Jl. Arjuna Utara No. 9<br>
								Kebon Jeruk<br>
								Jakarta Barat
							</address>
						</div>
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Send a message</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
					            <div class="form-group">
					                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
					            </div>
					            <div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>                        
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2017<BR>
               	<a target="_blank" href="#">FASDAY XII</a></p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->

</body>
</html>