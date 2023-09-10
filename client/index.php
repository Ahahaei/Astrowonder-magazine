<?php 
    require_once('layouts/header.php');

	require_once("../admin/connect.php");

	$query_0 = "select * from categories where deleted_at is null and status = 1";

	$list_categories = array();

	$result = $conn ->query($query_0);

	while ($row = $result -> fetch_assoc()){
		$list_categories[] = $row;
	}

	//Lấy 3 bài viết mới nhất
	$query_1 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 3";
	//var_dump($query_1);
	//die;
	$list_three_posts = array();
	$result = $conn->query($query_1);
	while($row = $result->fetch_assoc()){
		$list_three_posts[]=$row;
	
	}
	//var_dump($query_1);
	//die;	


	//Lấy 4 bài viết mới nhât tiếp theo
	$query_2 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 4 offset 3";
	$list_four_posts = array();
	$result = $conn->query($query_2);
	while($row = $result->fetch_assoc()){
		$list_four_posts[]=$row;
	}
	//var_dump($query_2);
	//die;

	//Lấy 5 bài viết phổ biến nhất
	$query_3 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.view_count DESC limit 5 ";
	$list_popular_posts = array();
	$result = $conn->query($query_3);
	while($row = $result->fetch_assoc()){
		$list_popular_posts[]=$row;
	}

	//Lấy 1 bài viết mới nhất tiếp theo
    $query_4 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 1 offset 7";
    $result_4 = $conn->query($query_4)->fetch_assoc();
    

	//Lấy 3 bài viết mới nhất tiếp theo 
	$query_5 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 3 offset 8";
	$list_three_posts1 = array();
	$result = $conn->query($query_5);
	while($row = $result->fetch_assoc()){
		$list_three_posts1[]=$row;
	}
	
	//Lấy 1 bài viết mới nhất tiếp theo
    $query_6 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 1 offset 11";
    $result_6 = $conn->query($query_6)->fetch_assoc();
    
    //Lấy 3 bài viết mới nhất tiếp theo 
	$query_7 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 3 offset 12";
	$list_three_posts2 = array();
	$result = $conn->query($query_7);
	while($row = $result->fetch_assoc()){
		$list_three_posts2[]=$row;
	}

    //Lấy 1 bài viết mới nhất tiếp theo
    $query_8 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 1 offset 15";
    $result_8 = $conn->query($query_8)->fetch_assoc();
    
    //Lấy 3 bài viết mới nhất tiếp theo 
	$query_9 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 3 offset 16";
	$list_three_posts3 = array();
	$result = $conn->query($query_9);
	while($row = $result->fetch_assoc()){
		$list_three_posts3[]=$row;
	}
	
    //Lấy 1 bài viết mới nhất tiếp theo
    $query_10 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 1 offset 19";
    $result_10 = $conn->query($query_10)->fetch_assoc();
    

    //Lấy 3 bài viết mới nhất tiếp theo 
	$query_11 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 3 offset 20";
	$list_three_posts4 = array();
	$result = $conn->query($query_11);
	while($row = $result->fetch_assoc()){
		$list_three_posts4[]=$row;
	}

    //Lấy 1 bài viết mới nhất tiếp theo
    $query_12 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 1 offset 23";
    $result_12 = $conn->query($query_12)->fetch_assoc();
    

    //Lấy 3 bài viết mới nhất tiếp theo 
	$query_13 = "SELECT p.*, a.name as author_name, c.name as category_name FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null order by p.created_at DESC limit 3 offset 24";
	$list_three_posts5 = array();
	$result = $conn->query($query_13);
	while($row = $result->fetch_assoc()){
		$list_three_posts5[]=$row;
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
	<div id="container" class="active">

		

		<!-- heading-news-section2
			================================================== -->
		<section class="heading-news2">

			<div class="container">
				
				<div class="ticker-news-box">
					<span class="breaking-news">tin mới nhất </span>
					<ul id="js-news">
						<?php 
							foreach ($list_three_posts as $post) {
						?>
						<li class="news-item"><span class="time-news"><?=$post['created_at'] ?></span>  <a href="#"><?=$post['title'] ?></a></li>
						<?php 
						}
						?>
					</ul>
				</div>

				<div class="iso-call heading-news-box">
					<div class="image-slider snd-size">
						<span class="top-stories">NỔI BẬT</span>
						<ul class="bxslider">
							<?php 
							foreach ($list_three_posts as $post) {
							 ?>
							<li>
								<div class="news-post image-post">
									<img src="../admin/uploads/<?=$post['thumbnail'] ?>"width='586px' height='500px'> 
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post sport" ><?=$post['category_name'] ?></a>
											<h2><a href="detail-post.php?slug=<?=$post['slug']?>"><?=$post['title'] ?></a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?=$post['created_at'] ?></li>
												<li><i class="fa fa-user"></i>Đăng bởi <a href="#"> <?=$post['author_name'] ?> </a></li>
												<li><i class="fa fa-eye"></i><?=$post['view_count'] ?></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<?php 
							}
							 ?>
							
						</ul>
					</div>

					<?php 
					foreach ($list_four_posts as $post) {
					 ?>

					<div class="news-post image-post default-size">
						<img src="../admin/uploads/<?=$post['thumbnail'] ?>"width='293px' height='245px'>
						<div class="hover-box">
							<div class="inner-hover">
											<a class="category-post travel" ><?=$post['category_name'] ?></a>
								<h2><a href="detail-post.php?slug=<?=$post['slug']?>"><?=$post['title'] ?></a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><span><?=$post['created_at'] ?></span></li>
								</ul>
								<p><?=$post['description'] ?></p>
							</div>
						</div>
					</div>
					<?php 
					}
					?>

				

				</div>
			</div>

		</section>
		<!-- End heading-news-section -->

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
									<h1><span>Gần đây</span></h1>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											<div class="post-gallery">
												<img src="../admin/uploads/<?=$result_6['thumbnail'] ?>" width='368px' height='300px' alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<a class="category-post tech" ><?=$result_6['category_name'] ?></a>
														<h2><a href="detail-post.php?slug=<?=$result_6['slug']?>"><?=$result_6['title'] ?> </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?=$result_6['created_at'] ?></li>
															<li><i class="fa fa-user"></i>bởi <a href="#"><?=$result_6['author_name'] ?></a></li>
															<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															<li><i class="fa fa-eye"></i><?=$result_6['view_count'] ?></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<ul class="list-posts">
										    <?php 
				                        	foreach ($list_three_posts2 as $post) {
				                            ?>
										
											<li>
												<img src="../admin/uploads/<?=$post['thumbnail'] ?>" width='100px' height='80px' alt="">
												<div class="post-content">
													<a ><?=$post['category_name'] ?></a>
													<h2><a href="detail-post.php?slug=<?=$post['slug']?>"><?=$post['title'] ?> </a></h2>
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

								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											<div class="post-gallery">
												<img src="../admin/uploads/<?=$result_4['thumbnail'] ?>" width='368px' height='300px' alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<a class="category-post tech" ><?=$result_4['category_name'] ?></a>
														<h2><a href="detail-post.php?slug=<?=$result_4['slug']?>"><?=$result_4['title'] ?> </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?=$result_4['created_at'] ?></li>
															<li><i class="fa fa-user"></i>bởi <a href="#"><?=$result_4['author_name'] ?></a></li>
															<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															<li><i class="fa fa-eye"></i><?=$result_4['view_count'] ?></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<ul class="list-posts">
										    <?php 
				                        	foreach ($list_three_posts1 as $post) {
				                            ?>
										
											<li>
												<img src="../admin/uploads/<?=$post['thumbnail'] ?>" width='100px' height='80px' alt="">
												<div class="post-content">
													<a ><?=$post['category_name'] ?></a>
													<h2><a href="detail-post.php?slug=<?=$post['slug']?>"><?=$post['title'] ?> </a></h2>
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
								<div class="center-button">
									<a href="#"><i class="fa fa-refresh"></i> Xem thêm</a>
								</div>

							</div>
							<!-- End grid box -->
							<!-- google addsense -->
							<!--<div class="advertisement">
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

							<!-- grid-box -->
							<!--<div class="grid-box">

								<div class="title-section">
									<h1><span class="world">News in Video</span></h1>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video1.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video2.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video3.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Suspendisse urna.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>	
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video4.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video1.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Aliquam porttitor mauris sit amet orci. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video2.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Morbi in sem quis dui placerat ornare.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>	
								</div>

							</div>-->
							<!-- End grid-box -->

							<!-- carousel box -->
							<div class="carousel-box owl-wrapper">

								<div class="title-section">
									<h1><span class="world">Bài viết</span></h1>
								</div>

								<div class="owl-carousel" data-num="2">
								
									<div class="item">
										<div class="news-post image-post2">
											<div class="post-gallery">
												<img src="../admin/uploads/<?=$result_8['thumbnail'] ?>" width='368px' height='300px' alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<h2><a href="detail-post.php?slug=<?=$result_8['slug']?>"><?=$result_8['title'] ?> </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?=$result_8['created_at'] ?></li>
															<li><i class="fa fa-user"></i>by <a href="#"><?=$result_8['author_name'] ?></a></li>
															<li><i class="fa fa-eye"></i><?=$result_8['view_count'] ?></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										
						                <?php 
				                        foreach ($list_three_posts3 as $post) {
				                        ?>
										
										<ul class="list-posts">
											<li>
												<img src="../admin/uploads/<?=$post['thumbnail'] ?>" width='100px' height='80px'  alt="">
												<div class="post-content">
													<h2><a href="detail-post.php?slug=<?=$post['slug']?>"><?=$post['title'] ?> </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?=$post['created_at'] ?></li>
													</ul>
												</div>
											</li>
										</ul>
										
										<?php
				                        }
				                        ?>
									</div>
								
									<div class="item">
										<div class="news-post image-post2">
											<div class="post-gallery">
												<img src="../admin/uploads/<?=$result_10['thumbnail'] ?>" width='368px' height='300px' alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<h2><a href="detail-post.php?slug=<?=$result_10['slug']?>"><?=$result_10['title'] ?></a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?=$result_10['created_at'] ?></li>
															<li><i class="fa fa-user"></i>by <a href="#"><?=$result_10['author_name'] ?></a></li>
															<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															<li><i class="fa fa-eye"></i><?=$result_10['view_count'] ?></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

						                <?php 
				                        foreach ($list_three_posts4 as $post) {
				                        ?>
										
										<ul class="list-posts">
											<li>
												<img src="../admin/uploads/<?=$post['thumbnail'] ?>" width='100px' height='80px'  alt="">
												<div class="post-content">
													<h2><a href="detail-post.php?slug=<?=$post['slug']?>"><?=$post['title'] ?> </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?=$post['created_at'] ?></li>
													</ul>
												</div>
											</li>
										</ul>
										
										<?php
				                        }
				                        ?>	
									</div>
								
									<div class="item">
										<div class="news-post image-post2">
											<div class="post-gallery">
												<img src="../admin/uploads/<?=$result_12['thumbnail'] ?>" width='368px' height='300px' alt="">
												<div class="hover-box">
													<div class="inner-hover">
														<h2><a href="detail-post.php?slug=<?=$result_12['slug']?>"><?=$result_12['title'] ?> </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?=$result_12['created_at'] ?></li>
															<li><i class="fa fa-user"></i>by <a href="#"><?=$result_12['author_name'] ?></a></li>
															<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															<li><i class="fa fa-eye"></i><?=$result_12['view_count'] ?></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										
						                <?php 
				                        foreach ($list_three_posts5 as $post) {
				                        ?>
										
										<ul class="list-posts">
											<li>
												<img src="../admin/uploads/<?=$post['thumbnail'] ?>" width='100px' height='80px'  alt="">
												<div class="post-content">
													<h2><a href="detail-post.php?slug=<?=$post['slug']?>"><?=$post['title'] ?> </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?=$post['created_at'] ?></li>
													</ul>
												</div>
											</li>
										</ul>
										
										<?php
				                        }
				                        ?>
									</div>
								

								</div>

							</div>
							<!-- End carousel box -->

							<!-- google addsense -->
							<!--<div class="advertisement">
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
							</div>-->
							<!-- End google addsense -->

							<!-- article box -->
							<!-- <div class="article-box">

								<div class="title-section">
									<h1><span>Latest Articles</span></h1>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-5">
											<div class="post-gallery">
												<img alt="" src="upload/news-posts/art1.jpg">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-5">
											<div class="post-gallery">
												<img alt="" src="upload/news-posts/art2.jpg">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-5">
											<div class="post-gallery">
												<img alt="" src="upload/news-posts/art3.jpg">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-5">
											<div class="post-gallery">
												<img alt="" src="upload/news-posts/art4.jpg">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div>
							</div>-->
							<!-- End article box -->

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