<?php 
	require_once("../admin/connect.php");
	//Lấy 3 bài viết ngau hung
	$query_14 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 3";
	//var_dump($query_1);
	//die;
	$list_three_posts6 = array();
	$result = $conn->query($query_14);
	while($row = $result->fetch_assoc()){
		$list_three_posts6[]=$row;
	
	}
	//Lấy 5 bài viết xem nhieu nhat
	$query_15 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.view_count DESC limit 5 offset 4";
	//var_dump($query_1);
	//die;
	$list_five_posts = array();
	$result = $conn->query($query_15);
	while($row = $result->fetch_assoc()){
		$list_five_posts[]=$row;
	
	}
 ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>AstronomyWonder</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/ticker-style.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body class="boxed">

	<!-- Container -->
	<div id="container">

		<?php     require_once('layouts/header.php'); ?>

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- contact info box -->
							<div class="contact-info-box">
								<div id="map"> <iframe src="https://stellarium-web.org/" width="1150" height="800" style="border:1;" allowfullscreen="" loading="lazy"></iframe> </div>
								<div class="contact-us">
								    <p>Nguyen Phuc Minh</p>
								    <p>Phone: 0933508899</p>
								    <p>Email: ng.phucminh04@gmail.com</p>
								    <p>Khuc Manh Tri</p>
								    <p>Phone: 0933508899</p>
								    <p>Email: kmt@gmail.com</p>
								    <p>Nguyen Phuc Minh</p>
								    <p>Phone: 0933508899</p>
								    <p>Email: ng.phucminh04@gmail.com</p>
								    <p>Khuc Manh Tri</p>
								    <p>Phone: 0933508899</p>
								    <p>Email: kmt@gmail.com</p>
								</div>
							</div>
							
							<!-- End contact info box -->

							<!-- contact form box -->
						<!--	<div class="contact-form-box">
								<div class="title-section">
									<h1><span>Talk to us</span></h1>
								</div>
								<form id="contact-form">
									<div class="row">
										<div class="col-md-4">
											<label for="name">Name*</label>
											<input id="name" name="name" type="text">
										</div>
										<div class="col-md-4">
											<label for="mail">E-mail*</label>
											<input id="mail" name="mail" type="text">
										</div>
										<div class="col-md-4">
											<label for="website">Website</label>
											<input id="website" name="website" type="text">
										</div>
									</div>
									<label for="comment">Your Message*</label>
									<textarea id="comment" name="comment"></textarea>
									<button type="submit" id="submit-contact">
										<i class="fa fa-paper-plane"></i> Send Message
									</button>
								</form>
							</div>  
							<!-- End contact form box -->

						</div>
						<!-- End block content -->

					</div>
				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer 
			================================================== -->
		<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-3">
							<div class="widget text-widget">
								<h1>Về chúng tôi</h1>
								<p>AstroWonder là trang web dành cho mọi độc giả có mong muốn được hiểu thêm về thiên văn theo cách đơn giản, dễ hiểu, và ngắn gọn nhất.</p>
								<p>Dù là một người chưa nghe qua đến thiên văn hay một người đam mê nghiên cứu thiên văn học đã lâu, AstroWonder hứa hẹn sẽ đem lại những kiến thức hữu ích cho bạn.
								</p>
								<p>Với các chủ đề đa dạng, đội ngũ thiết kế hi vọng sẽ làm hài lòng và nhận được nhiều sự ủng hộ từ phía độc giả. Xin chân thành cảm ơn!</p>
							</div>
							<div class="widget social-widget">
								<h1>Kết nối</h1>
								<ul class="social-icons">
									<li><a href="https://www.facebook.com/profile.php?id=100013018305171" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.facebook.com/ng.phucminh" class="google"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="https://www.instagram.com/amstrolanha/" class="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget posts-widget">
								<h1>Các Bài Viết Ngẫu Hứng</h1>
								<ul class="list-posts">
								    <?php 
				                        foreach ($list_three_posts6 as $post) {
				                    ?>
									<li>
										<img src="../admin/uploads/<?=$post['thumbnail'] ?>" width='80px' height='70px'alt="">
										<div class="post-content">
											<a href="travel.html"><?=$post['category_name'] ?></a>
											<h2><a href="single-post.html"><?=$post['title'] ?> </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?=$post['created_at'] ?></li>
											</ul>
										</div>
									</li>
												<?php 
                            					}
                            					?>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget categories-widget">
								<h1>Mục lục</h1>
								<ul class="category-list">
									<li>
										<a href="../category.php">Tin tức<span>12</span></a>
									</li>
									<li>
										<a href="../category.php">Sự kiện <span>26</span></a>
									</li>
									<li>
										<a href="../category.php">Khám phá <span>55</span></a>
									</li>
									<li>
										<a href="../category.php">Vật lý thiên văn<span>37</span></a>
									</li>
									<li>
										<a href="../category.php">Có thể bạn quan tâm <span>62</span></a>
									</li>
									<li>
										<a href="#">Stellarium <span>10</span></a>
									</li>
								</ul>
							</div>
						</div>
						<!--<div class="col-md-3">
							<div class="widget flickr-widget">
								<h1>Flickr Photos</h1>
								<ul class="flickr-list">
									<li><a href="#"><img src="upload/flickr/1.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/6.jpg" alt=""></a></li>
								</ul>
								<a href="#">View more photos...</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; COPYRIGHT 2015 hotmagazine.com</p>
						</div>
						<div class="col-md-6">
							<nav class="footer-nav">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="index.html">Purchase Theme</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.ticker.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" >
	    function showTime(){
    var date = new Date();
    var d = date.getDate();
    var mm = date.getMonth();
    var y = date.getFullYear();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    var date = d + "/" + mm + "/" + y + " "
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = date + ' ' + time;
    document.getElementById("MyClockDisplay").textContent = date + ' ' + time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
	</script>

</body>
</html>