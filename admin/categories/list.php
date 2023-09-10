<?php 
session_start();
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] == false){
    header("Location: /Manhtriblog/admin/auth/login.php");
}

    require_once('../layouts/header.php');
    require_once('../connect.php');
    $query = "SELECT * FROM categories WHERE deleted_at is null";
    //var_dump($query);
    //die;

    $categories = array();

    $result = $conn->query ($query); 

    while ($row = $result->fetch_assoc() ){
        $categories[] = $row;
    }
    

 ?>
<!-- Page Container START -->
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
                                    if(isset($_COOKIE['success'])){

                                 ?>
                                <div class="alert alert-success">
                                    <div class="d-flex justify-content-start">
                                        <span class="alert-icon m-r-20 font-size-30">
                                            <i class="anticon anticon-check-circle"></i>
                                        </span>
                                        <div>
                                            <h5 class="alert-heading">  </h5>
                                            <p><?php echo $_COOKIE['success'] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                } 

                                 ?>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr align="center">
                                                <th scope="col">#</th>
                                                <th scope="col">Tên thể loại</th>
                                                <th scope="col">Mô tả</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($categories as $cate) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?= $cate['id'] ?></th>
                                                    <td><?=$cate['name'] ?></td>
                                                    <td><?=$cate['description'] ?></td>
                                                    <td align="center">
                                                        <?php 
                                                            if ($cate['status']==1){
                                                                echo "<i class='anticon anticon-unlock' style='font-size: 17px;color:green'></i>";            
                                                            }else{
                                                                echo "<i class='anticon anticon-lock' style='font-size: 17px;color:red'></i>";
                                                            }

                                                        ?>
                                                    </td>
                                                    <td align="center">
                                                        <a href="update.php?id=<?=$cate['id']?>" class="btn btn-primary btn-sm btn-tone m-r-5">Cập nhật</a>
                                                        
                                                        <a href="delete.php?id=<?=$cate['id']?>" class="btn btn-danger btn-sm btn-tone m-r-5">Xóa</a>
                                                    </td>


                                                <tr>

                                            <?php 
                                            }
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a href="add.php" class="btn btn-primary btn-sm">Thêm mới</a>
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
            <!-- Page Container END -->
<?php 
    require_once('../layouts/footer.php');
 ?>