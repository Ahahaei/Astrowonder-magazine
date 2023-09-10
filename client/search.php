<?php 
	
	require_once("../admin/connect.php");
	$keyword = '';
	if(isset($_GET['keyword'])){
		$keyword=$_GET['keyword'];
	}

	$query_1 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null and p.title like '%$keyword%' order by p.created_at DESC";

	$list_search = array();
	$result = $conn->query($query_1);
	while($row = $result->fetch_assoc()){
		$list_search[]=$row;
	}


 ?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>Astronomy</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
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

	<?php     require_once('layouts/header.php');
 ?>

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- grid box -->
							<div class="grid-box">
								<div class="title-section">
									<h1><span class="world">
										Kết quả theo từ khóa: " <?php echo $keyword ?> "
									</span></h1>
								</div>

								<div class="row">
									<?php foreach ($list_search as $post) {
									?>
										<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="../admin/uploads/<?=$post['thumbnail'] ?>" alt="">
												<a class="category-post world" href="world.html">Business</a>
											</div>
											<div class="post-title">
												<h2><a href="detail-post.php"><?=$post['title']?> </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">?=$post['author_name']?></a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
									<?php	
									} 

									?>
									
								</div>
							</div>
							<!-- End grid box -->

							<!-- google addsense -->
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/728x90-white.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/468x60-white.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div>
							<!-- End google addsense -->

							<!-- grid box -->
							<div class="grid-box">

								<div class="row">
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im11.jpg" alt="">
												<a class="category-post world" href="world.html">Business</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im12.jpg" alt="">
												<a class="category-post world" href="world.html">Lifestyle</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im13.jpg" alt="">
												<a class="category-post world" href="world.html">Trends</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im14.jpg" alt="">
												<a class="category-post world" href="world.html">Business</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- End grid box -->

							<!-- pagination box -->
							<div class="pagination-box">
								<ul class="pagination-list">
									<li><a class="active" href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><span>...</span></li>
									<li><a href="#">9</a></li>
									<li><a href="#">Next</a></li>
								</ul>
								<p>Page 1 of 9</p>
							</div>
							<!-- End Pagination box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

					<?php require_once('layouts/footer.php'); ?>