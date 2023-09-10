<?php 
session_start();
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] == false){
    header("Location: /Manhtriblog/admin/auth/login.php");
}

    require_once('../layouts/header.php');
    require_once('../connect.php');
    $query = "SELECT * FROM categories WHERE status = 1";

    $categories = array();

    $result = $conn -> query ($query); 

    while ($row = $result -> fetch_assoc() ){
    $categories [] = $row;
    }

  
 ?>
 <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Quản lý thể loại</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
                                <a class="breadcrumb-item" href="#">Quản lý</a>
                                <span class="breadcrumb-item active">Quản lý thể loại</span>
                            </nav>
                        </div>
                    </div>
                    <div class="container">

                        <div class="card">
                            <div class="card-body">
                                 <?php 
                                    if(isset($_COOKIE['fail'])){

                                 ?>
                                
                                    <div class="alert alert-danger">
                                    <div class="d-flex justify-content-start">
                                        <span class="alert-icon m-r-20 font-size-30">
                                            <i class="anticon anticon-close-circle"></i>
                                        </span>
                                        <div>
                                            <h5 class="alert-heading"></h5>
                                            <p><?php echo $_COOKIE['fail'] ?>.</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                } 

                                 ?>
                            	<form action="add_process.php" method="POST">
                            		<label>Tên thể loại</label>
                            		<input type="text" class="form-control m-b-15" placeholder="Tên thể loại" name="name">
                            		<label>Mô tả</label>
                            		<textarea  class="form-control" placeholder="Mô tả" aria-label="Withtextarea" name = "description"></textarea>
                            		<br>
                                    <label for="sell">Thể loại cha:</label>
                                    <select name = "parent_id" class="form-control">
                                        <?php 
                                            foreach ($categories as $cate) {
                                         ?>
                                            <option value="<?=$cate['id']?>"><?=$cate['name']?></option>
                                        <?php 
                                            }
                                         ?>
                                    </select>
                                    <br>
                            		<label>Trạng thái</label>
                            		<br>
    								<input name="status" type="radio" value="1">  Hoạt động 
    								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
    								<input name="status" type="radio" value="0">  Không hoạt động
    								<br>
    								<br>
									<button name="submit" type="submit" class="btn btn-primary btn-sm">Lưu</button>

                            		</form>


                                
                            </div>
                        </div>
                    </div>
                
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
<?php 
	require_once('../layouts/footer.php')
 ?>