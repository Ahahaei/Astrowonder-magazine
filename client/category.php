
<?php 
	require_once("../admin/connect.php");
	$slug = '';
	if(isset($_GET['slug'])){
		$slug=$_GET['slug'];
	}

	$query = "SELECT p.*, a.name as author_name, c.name as category_name, c.slug as category_slug FROM posts p join authors a on p.author_id = a.id join categories c on p.category_id = c.id where p.status = 1 and p.deleted_at is null and c.slug = '".$slug."'";
	$list_post_by_category = array();

	$result = $conn ->query($query);

	while ($row = $result -> fetch_assoc()){
		$list_post_by_category[] = $row;
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
									<h1><span class="world">Bài đăng</span></h1>
								</div>

								<div class="row" style="display: flex; flex-wrap: wrap;">
									<?php 
										foreach ($list_post_by_category as $post) {

									 ?>
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="../admin/uploads/<?=$post['thumbnail'] ?>" width='330px' height='260px' alt="">
												<a class="category-post world" href="category.php?slug=<?=$post['category_slug']?>"><?=$post['category_name'] ?></a>
											</div>
											<div class="post-title">
												<h2><a href="detail-post.php?slug=<?=$post['slug']?>"><?=$post['title'] ?> </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?=$post['created_at'] ?></li>
													<li><i class="fa fa-user"></i>by <a href="#"><?=$post['author_name'] ?></a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i><?=$post['view_count'] ?></li>
												</ul>
											</div>
											<div class="post-content">
												<p><?=$post['description'] ?></p>
												<a href="detail-post.php?slug=<?=$post['slug']?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Xem thêm</a>
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
								<a class="navbar-brand" href="stellarium.php"><img src="images/ads.png" alt=""></a>
								</div>
								<div class="tablet-advert">
                                <a class="navbar-brand" href="stellarium.php"><img src="images/ads.png" alt=""></a>
								</div>
								<div class="mobile-advert">
								<a class="navbar-brand" href="stellarium.php"><img src="images/ads.png" alt=""></a>
								</div>
							</div>
							<!-- End google addsense -->

							
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