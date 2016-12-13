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
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <!--@if (Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level')!!}">
                                {!! Session::get('flash_message') !!}
                            </div>-->
                        <!--@endif-->
                    </div>
                    <!-- Đây là nơi chứa nội dung -->
                    <?php $pageControl->viewAddProductPage() ?>
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