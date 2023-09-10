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
<!-- sidebar -->
						<div class="sidebar">

							<div class="widget social-widget">
								<div class="title-section">
									<h1><span>Kết nối</span></h1>
								</div>
								<ul class="social-share">
									<li>
										<a href="#" class="rss"><i style='line-height: 40px;' class="fa fa-rss"></i></a>
										<span class="number">52</span>
										<span>Lượt đăng ký</span>
									</li>
									<li>
										<a href="#" class="facebook"><i style='line-height: 40px;' class="fa fa-facebook"></i></a>
										<span class="number">4,773</span>
										<span>Fan</span>
									</li>
									<li>
										<a href="#" class="twitter"><i style='line-height: 40px;' class="fa fa-twitter"></i></a>
										<span class="number">3,501</span>
										<span>Lượt theo dõi</span>
									</li>
									<li>
										<a href="#" class="google"><i style='line-height: 40px;' class="fa fa-google-plus"></i></a>
										<span class="number">5,003</span>
										<span>Lượt theo dõi</span>
									</li>
								</ul>
							</div>

							<div class="widget tab-posts-widget">

								<ul class="nav nav-tabs" id="myTab">
									<!--<li class="active">
										<a href="#option1" data-toggle="tab" >Gần đây</a>
									</li>-->
									<li class="active">
										<a href="#option2" data-toggle="tab">Top Lượt xem</a>
									</li>
									
								</ul>

								<div class="tab-content">
									<!-- <div class="tab-pane active" id="option1">
										<ul class="list-posts">
											<li>
												<img src="upload/news-posts/listw1.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw2.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw3.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw4.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="upload/news-posts/listw5.jpg" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
										</ul>
									</div> -->
									<div class="tab-pane active" id="option2">
										<ul class="list-posts">
										    <?php 
							                foreach ($list_five_posts as $post) {
							                 ?>

											<li>
												<img src="../admin/uploads/<?=$post['thumbnail'] ?>" width='80px' height='70px'alt="">
												<div class="post-content">
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
							</div>

							
							<div class="widget recent-comments-widget">
								<div class="title-section">
									<h1><span>SỰ KIỆN THIÊN VĂN NỔI BẬT</span></h1>
								</div>
								<div class="owl-wrapper">
									<div class="owl-carousel" data-num="1">
										<div class="item">
											<ul class="comment-list">
												<li>
													<img src="upload/news-posts/avatar1.jfif" width='70px' height='70px' alt="">
													<div class="comment-content">
														<p class="main-message">
														Gần như toàn bộ bề mặt Mặt Trăng sẽ bị che khuất (97%). Mặt Trăng sẽ có màu kim loại đồng mờ ảo, kết với bề mặt sáng bạc không bị khuất tạo “Hiệu ứng đèn lồng Nhật Bản” tuyệt đẹp khi quan sát. Pha ban đầu Nguyệt thực có thể thấy từ Anh và Bắc  u. Đông Á và Úc sẽ nhìn thấy khi Mặt Trăng mọc vào tối muộn 
														</p>
														<p>Ngày 19/11/2021: Nguyệt thực một phần</p>
													</div>
												</li>
												<li>
													<img src="upload/news-posts/avatar7.jpg" width='70px' height='70px' alt="">
													<div class="comment-content">
														<p class="main-message">
															Chỉ được nhìn thấy từ lục địa Nam Cực. Ngoài ra quốc gia ở Nam bán cầu như Chile, Argentina, Nam Phi, Úc cũng sẽ quan sát được
														</p>
														<p>4/12/2021: Nhật thực toàn phần</p>
													</div>
												</li>
												<li>
													<img src="upload/news-posts/avatar8.jpg" width='70px' height='70px' alt="">
													<div class="comment-content">
														<p class="main-message">
															Song Tử được coi là “vua” của các trận sao băng bởi rất nhiều người. Có thể thấy khoảng 60 đến 120 sao băng/giờ nếu điều kiện bầu trời thuận lợi. Đạt đỉnh điểm từ tối ngày 13 đến sáng ngày 14. Dù trăng tròn sẽ chặn nhiều tầm quan sát, vẫn có khả năng quan sát trận mưa tốt sau nửa đêm
														</p>
														<p>13 - 14/12/2021: Mưa sao băng Song Tử</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="comment-list">
												<li>
													<img src="upload/news-posts/avatar4.jpg" width='70px' height='70px' alt="">
													<div class="comment-content">
														<p class="main-message">
														Tạo ra từ các bụi vũ trụ để lại bởi một sao chổi đã tuyệt chủng tên 2003 EH1. Diễn ra hằng năm từ mùng 1-5/1. Thời điểm quan sát tốt nhất vào khoảng đêm ngày 3, sáng ngày 4,  sau nửa đêm. Có thể quan sát ở bất kì vị trí nào trên bầu trời
														</p>
														<p>3 - 4/1/2022: Mưa sao băng Thước Tứ Phân Quadrantids</p>
													</div>
												</li>
												<li>
													<img src="upload/news-posts/avatar5.jfif" width='70px' height='70px' alt="">
													<div class="comment-content">
														<p class="main-message">
															Có thể thấy hơn 60 sao băng/giờ nếu thuận lợi nhất. Nguồn gốc từ bụi vũ trụ của sao chổi Halley (được phát hiện từ thời cổ đại). Diễn ra hàng năm từ 19/4 đến 28/5 nhưng đạt cực đại từ đêm mùng 6, sáng mùng 7. Quan sát tốt nhất vào tối, rõ nhất ở Nam Bán cầu </p>
														<p>6-7/5/2022: Mưa sao băng Eta Aquarids</p>
													</div>
												</li>
												<li>
													<img src="upload/news-posts/avatar6.jpg" width='70px' height='70px' alt="">
													<div class="comment-content">
														<p class="main-message">
Xảy ra khi Mặt Trăng đi qua hình chóp bóng của Trái Đất (Mặt Trời, Trái Đất, Mặt Trăng gần như thẳng hàng với Trái Đất ở giữa). Khi đó, Mặt Trăng tối dần, có màu đỏ, cam đồng (trăng máu). Nhìn thấy ở Bắc Mỹ, Greenland, biển Đại Tây Dương, một phần của Tây  u và Tây Phi.</p>

														<p>16/5/2022: Nguyệt thực toàn phần</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<!--<div class="widget subscribe-widget">
								<form class="subscribe-form">
									<h1>Subscribe to RSS Feeds</h1>
									<input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>
									<button id="submit-subscribe">
										<i class="fa fa-arrow-circle-right"></i>
									</button>
									<p>Get all latest content delivered to your email a few times a month.</p>
								</form>
							</div>-->

							<!--<div class="widget post-widget">
								<div class="title-section">
									<h1><span>Featured Video</span></h1>
								</div>
								<div class="news-post video-post">
									<img alt="" src="upload/news-posts/video-sidebar.jpg">
									<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
									<div class="hover-box">
										<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i>27 may 2013</li>
										</ul>
									</div>
								</div>
								<p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis. </p>
							</div>-->

							

						</div> 
						<!-- End sidebar -->

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
						<div class="col-md-3">
							<div class="widget categories-widget">
								<h1>Mục lục</h1>
								<ul class="category-list">
									<li>
										<a >Tin tức </a>
									</li>
									<li>
										<a >Sự kiện </a>
									</li>
									<li>
										<a >Khám phá </a>
									</li>
									<li>
										<a >Vật lý thiên văn </a>
									</li>
									<li>
										<a >Có thể bạn quan tâm </a>
									</li>
									<li>
										<a >Cuoc thi </a>
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