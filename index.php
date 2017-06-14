<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" />
	<meta name="author" content="">
	<title>高雄景點</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script> <![endif]-->
	<link rel="shortcut icon" href="images/ico/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<?php
		include 'bc/connect/connect.php';
		include 'common.php';
	 ?>

</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation">
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><h1><img src="images/logo.png" alt="logo"></h1></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="scroll active"><a href="#navigation">首頁</a></li>
						<li class="scroll"><a href="#about-us">認識高雄</a></li>
						<li class="scroll"><a href="#blog">熱門景點</a></li>
						<li class="scroll"><a href="#portfolio">景點</a></li>
						<li class="scroll"><a href="#contact">討論區</a></li>
						<li><a href="#">會員登入</a></li>
						<li class="scroll"><a href="#services">SERVICES</a></li>
						<li class="scroll"><a href="#our-team">Our Team</a></li>
						<li class="scroll"><a href="#clients"> ABOUT US</a></li>
					</ul>
				</div>
			</div>
		</div><!--/navbar-->
	</header> <!--/#navigation-->

	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<?php include 'slider/slider.php'; ?>
			<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div>

	</section><!--/#home-->

	<section id="about-us">
		<div class="container">
			<div class="text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">認識高雄</h2>
					<p><?php echo $DisplayAbout["about"];?></p><!-- 顯示高雄簡介 -->
				</div>
			</div>
			<div class="about-us">
				<div class="row">
					<div class="col-sm-6">
						<h3>Why with us?</h3>
						<ul class="nav nav-tabs">
							<li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> About</a></li>
							<li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Mission</a></li>
							<li><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> Community</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="about">
								<div class="media">
									<img class="pull-left media-object" src="images/about-us/about.jpg" alt="about us">
									<div class="media-body">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="mission">
								<div class="media">
									<img class="pull-left media-object" src="images/about-us/mission.jpg" alt="Mission">
									<div class="media-body">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="community">
								<div class="media">
									<img class="pull-left media-object" src="images/about-us/community.jpg" alt="Community">
									<div class="media-body">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<h3>Our Skills</h3>
						<div class="skill-bar">
							<div class="skillbar clearfix " data-percent="90%">
								<div class="skillbar-title">
									<span>HTML5 &amp; CSS3</span>
								</div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">90%</div>
							</div> <!-- End Skill Bar -->
							<div class="skillbar clearfix" data-percent="85%">
								<div class="skillbar-title"><span>UI Design</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">85%</div>
							</div> <!-- End Skill Bar -->
							<div class="skillbar clearfix " data-percent="70%">
								<div class="skillbar-title"><span>jQuery</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">70%</div>
							</div> <!-- End Skill Bar -->
							<div class="skillbar clearfix " data-percent="60%">
								<div class="skillbar-title"><span>PHP</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">60%</div>
							</div> <!-- End Skill Bar -->
							<div class="skillbar clearfix " data-percent="75%">
								<div class="skillbar-title"><span>Wordpress</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">75%</div>
							</div> <!-- End Skill Bar -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#about-us-->

	<section id="blog">
		<div class="container">
			<div class="row text-center clearfix">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">熱門景點</h2>
					<p class="blog-heading">高雄六大熱門地區</p>
				</div>
			</div>
			<div class="row">
				<?php foreach ($DisplayTop as $key => $value) { ?>
				<div class="col-sm-4">
					<div class="single-blog">
						<img src="<?php echo $bc.$DisplayTop[$key][path].$value["name"];?>" class="img-responsive" alt="" />
						<h2>
							<?php
								if (empty($value["place"])) {
								$value["place"] = "稍後補資料";
								}
								echo $value["place"];
							?>
						</h2>
						<ul class="post-meta">
							<!-- <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li> -->
							<li><i class="fa fa-clock-o"></i><strong> 更新日期:</strong> <?php echo $value["datetime"]; ?></li>
						</ul>
						<!-- <div class="blog-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div> -->
						<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-<?php echo $key;?>">放大</a>
					</div>
					<div class="modal fade" id="blog-<?php echo $key;?>" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<img src="<?php echo $bc.$value["path"].$value["name"];?>" class="img-responsive"  alt="" />
									<h2><?php echo $value["place"]; ?></h2>
									<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> -->
								</div><!--modal-body-->
							</div><!--modal-content-->
						</div><!--modal-dialog-->
					</div><!--modal-->
				</div>
				<?php 	}  ?>
			</div><!-- row -->
		</div>
	</section> <!--/#blog-->


	<section id="portfolio">
				<div class="container">
					<div class="row text-center">
						<div class="col-sm-8 col-sm-offset-2">
							<h2 class="title-one">景點</h2>
							<p>各地區熱門景點</p>
						</div>
					</div>

					<ul class="portfolio-filter text-center">
						<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
						<?php foreach ($DisplayPlace as $key => $value) {?>
						<li><a class="btn btn-default" href="#" data-filter=".<?php echo $value["place"];?>"><?php echo $value["place"]; ?></a></li>
						<?php } ?>
					</ul><!--/#portfolio-filter-->
					<div class="portfolio-items">
						<?php include 'area/area.php'; ?>
							<div class="col-sm-3 col-xs-12 portfolio-item jooma">
								<div class="view efffect" >
									<div class="portfolio-image">
										<img src="images/portfolio/2.jpg" alt="">
									</div>
									<div class="mask text-center">
										<h3>Novel</h3>
										<h4>Lorem ipsum dolor sit amet consectetur</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="images/portfolio/3.jpg" alt="">
									</div>
									<div class="mask text-center">
										<h3>Novel</h3>
										<h4>Lorem ipsum dolor sit amet consectetur</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item megento">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="images/portfolio/4.jpg" alt="">
									</div>
									<div class="mask text-center">
										<h3>Novel</h3>
										<h4>Lorem ipsum dolor sit amet consectetur</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item html">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="images/portfolio/5.jpg" alt="">
									</div> <div class="mask text-center">
										<h3>Novel</h3>
										<h4>Lorem ipsum dolor sit amet consectetur</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="images/portfolio/6.jpg" alt="">
									</div>
									<div class="mask text-center">
										<h3>Novel</h3>
										<h4>Lorem ipsum dolor sit amet consectetur</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item html">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="images/portfolio/7.jpg" alt="">
									</div>
									<div class="mask text-center">
										<h3>Novel</h3>
										<h4>Lorem ipsum dolor sit amet consectetur</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item joomla">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="images/portfolio/8.jpg" alt=""></div>
										<div class="mask text-center">
											<h3>Novel</h3>
											<h4>Lorem ipsum dolor sit amet consectetur</h4>
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
										</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item html">
									<div class="view efffect">
										<div class="portfolio-image">
											<img src="images/portfolio/9.jpg" alt="">
										</div>
										<div class="mask text-center">
											<h3>Novel</h3>
											<h4>Lorem ipsum dolor sit amet consectetur</h4>
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
							<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
									<div class="view efffect">
										<div class="portfolio-image">
											<img src="images/portfolio/10.jpg" alt=""></div>
											<div class="mask text-center">
												<h3>Novel</h3>
												<h4>Lorem ipsum dolor sit amet consectetur</h4>
												<a href="#"><i class="fa fa-link"></i></a>
												<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
								</div>
							<div class="col-sm-3 col-xs-12 portfolio-item joomla">
										<div class="view efffect">
											<div class="portfolio-image">
												<img src="images/portfolio/11.jpg" alt=""></div>
												<div class="mask text-center">
													<h3>Novel</h3>
													<h4>Lorem ipsum dolor sit amet consectetur</h4>
													<a href="#"><i class="fa fa-link"></i></a>
													<a href="images/portfolio/big-item3.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
									</div>

					</div>
				</div>
			</section> <!--/#portfolio-->
	<section id="contact">
				<div class="container">
					<div class="row text-center clearfix">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="contact-heading">
								<h2 class="title-one">討論區</h2>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="contact-details">
						<div class="pattern"></div>
						<div class="row text-center clearfix">
							<div class="col-sm-6">
								<table class="table">

								</table>
								<!-- <div class="contact-address"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>
									<div class="social-icons">
										<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div> -->
							</div>
							<div class="col-sm-6">
								<div id="contact-form-section">
									<div class="status alert alert-success" style="display: none"></div>
									<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
										<div class="form-group">
											<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
											<div class="form-group">
												<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
											</div>
											<div class="form-group">
												<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary">Send</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> <!--/#contact-->

	<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-th"></i>
									<h2>Modern Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-html5"></i>
									<h2>Web Development</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-users"></i>
									<h2>Online Marketing</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
								</div>
							</div></div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#service-->

		<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Meet The Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
					</div>
				</div>
				<div id="team-carousel" class="carousel slide" data-interval="false">
					<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					<div class="carousel-inner team-members">
						<div class="row item active">
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/member1.jpg" alt="team member" />
									<h4>William Hurt</h4>
									<h5>Sr. Web Developer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/member2.jpg" alt="team member" />
									<h4>Alekjandra Jony</h4>
									<h5>Creative Designer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/member3.jpg" alt="team member" />
									<h4>Paul Johnson</h4>
									<h5>Skilled Programmer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/member4.jpg" alt="team member" />
									<h4>John Richerds</h4>
									<h5>Marketing Officer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="row item">
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/member1.jpg" alt="team member" />
									<h4>William Hurt</h4>
									<h5>Sr. Web Developer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/member3.jpg" alt="team member" />
									<h4>Paul Johnson</h4>
									<h5>Skilled Programmer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/member2.jpg" alt="team member" />
									<h4>Alekjandra Jony</h4>
									<h5>Creative Designer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/member4.jpg" alt="team member" />
									<h4>John Richerds</h4>
									<h5>Marketing Officer</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#Our-Team-->



					<section id="clients" class="parallax-section">
						<div class="container">
							<div class="clients-wrapper">
								<div class="row text-center">
									<div class="col-sm-8 col-sm-offset-2">
										<h2 class="title-one">Clients Say About Us</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
									</div>
								</div>
								<div id="clients-carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
										<li data-target="#clients-carousel" data-slide-to="1"></li>
										<li data-target="#clients-carousel" data-slide-to="2"></li>
									</ol> <!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="images/clients/client1.jpg" alt="">
													<div class="media-body">
														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="images/clients/client3.jpg" alt="">
													<div class="media-body">
														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="images/clients/client2.jpg" alt="">
													<div class="media-body">
														<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--/#clients-->


	<footer id="footer">
		<div class="container">
			<div class="text-center">
				<p>Copyright &copy; 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p>
			</div>
		</div>
	</footer> <!--/#footer-->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.parallax.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
