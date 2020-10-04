<!DOCTYPE html>
<html>
<head>
	<title>FASDAY XII Universitas Esa Unggul</title>
	<meta charset="utf-8">
	<meta name="author" content="Ade Sulaeman">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../responsive.css">

	<link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="../js/gmaps.js"></script>
	<script type="text/javascript" src="../js/smoothscroll.js"></script>
    <script type="text/javascript" src="../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../js/countdown.js"></script>
    <script type="text/javascript" src="../js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="../js/jquery.nav.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>  
</head><!--/head-->
<body>
<?php require('includes/config.php'); ?>
	<header id="header" role="banner">
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
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
						<a class="navbar-brand" href="../index.php">
		                	<img class="img-responsive" src="../images/logo_fasday.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll"><a href="../index.php">Home</a></li>                         
		                    <li class="scroll"><a href="../index.php#event">Event</a></li>
		                    <li class="scroll"><a href="../index.php#about">About</a></li> 
		                    <li class="scroll"><a href="../index.php#explore">Explore</a></li>                    
		                    <li class="no-scroll active"><a href="#">Blog</a></li>
		                    <li><a class="no-scroll" href="#" target="_blank">PURCHASE TICKETS</a></li>
		                    <li class="scroll"><a href="../index.php#contact">Contact</a></li>       
		                </ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--/#header--> 
	<img class="img-responsive" src="../images/blog.jpg" alt="slider">

	<section id="blog">
		<div id="blog-carousel" class="carousel slide" data-interval="false">
		<?php 
			$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
			$stmt->execute(array(':postID' => $_GET['id']));
			$row = $stmt->fetch();

			//if post does not exists redirect user.
			if($row['postID'] == ''){
				header('Location: ./');
			exit;
			}

		?>		
		<p><a href="./">Back to Posts</a></p>
		<?php	
			echo '<div>';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
		?>

	</div>
	</section><!--/#selesai-->
    
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
