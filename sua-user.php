<?php
require_once('controllers/PageController.php');
$pageControl = new PageController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('views/admin/blocks/head.html') ?>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php require_once('views/admin/blocks/navigation.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                      
                    </div>
                    <!-- Đây là nơi chứa nội dung -->
                    <?php $pageControl->viewEditUserPage() ?>
                    <!-- End Đây là nơi chứa nội dung -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include_once('views/admin/blocks/scripts.html') ?>
</body>
</html>