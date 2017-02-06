<?php
ob_start();
session_start();

if ($_SESSION['admin_id'] == NULL) {
    header('Location: index.php');
}

require '../classes/dashboard.php';
$obj_dashboard = new Dashboard();

require '../classes/admin.php';
$obj_admin = new Admin();

require '../classes/category.php';
$obj_category = new Category();

require '../classes/slider.php';
$obj_slider = new Slider();

require '../classes/sub_category.php';
$obj_sub_category = new Sub_category();

require_once '../classes/product.php';
$obj_product = new Product();
require_once '../classes/order.php';
$obj_order = new Order();





if (isset($_GET['status'])) {
    if ($_GET['status'] == 'logout') {
        $obj_dashboard->admin_logout();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>NFOOD | DASHBOARD</title>
        <!-- Bootstrap Core CSS -->
        <link href="../assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="../assets/backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="../assets/backend/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="../assets/backend/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../assets/backend/dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="../assets/backend/vendor/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../assets/backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script>
            function check_delete_status() {
                var check = confirm('Are you sure to delete this !');
                if (check) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
                </div>
                <!-- /.navbar-header -->
                <?php include './includes/top_menu.php'; ?>
                <!-- /.navbar-top-links -->
                <?php include './includes/sidebar.php'; ?>
                <!-- /.navbar-static-side -->
            </nav>  

            <div id="page-wrapper">
                <?php
                if (isset($pages)) {
                    if ($pages == 'add_admin') {
                        include './pages/add_admin_content.php';
                    } else if ($pages == 'manage_admin') {
                        include './pages/manage_admin_content.php';
                    } else if ($pages == 'edit_admin') {
                        include './pages/edit_admin_content.php';
                    } else if ($pages == 'add_category') {
                        include './pages/add_category_content.php';
                    } else if ($pages == 'manage_category') {
                        include './pages/manage_category_content.php';
                    } else if ($pages == 'edit_category') {
                        include './pages/edit_category_content.php';
                    } else if ($pages == 'add_sub_category') {
                        include './pages/add_sub_category_content.php';
                    } else if ($pages == 'manage_sub_category') {
                        include './pages/manage_sub_category_content.php';
                    } else if ($pages == 'edit_sub_category') {
                        include './pages/edit_sub_category_content.php';
                    } else if ($pages == 'add_product') {
                        include './pages/add_product_content.php';
                    } else if ($pages == 'manage_product') {
                        include './pages/manage_product_content.php';
                    } else if ($pages == 'view_product') {
                        include './pages/view_product_content.php';
                    } else if ($pages == 'edit_product') {
                        include './pages/edit_product_content.php';
                    } else if ($pages == 'add_slider') {
                        include './pages/add_slider_content.php';
                    } else if ($pages == 'manage_slider') {
                        include './pages/manage_slider_content.php';
                    } else if ($pages == 'view_slider') {
                        include './pages/view_slider_content.php';
                    } else if ($pages == 'edit_slider') {
                        include './pages/edit_slider_content.php';
                    } else if ($pages == 'manage_order') {
                        include './pages/manage_order_content.php';
                    }
                } else {
                    include './pages/home_content.php';
                }
                ?>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="../assets/backend/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../assets/backend/vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="../assets/backend/vendor/raphael/raphael.min.js"></script>
        <script src="../assets/backend/vendor/morrisjs/morris.min.js"></script>
        <script src="../assets/backend/data/morris-data.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../assets/backend/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/backend/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../assets/backend/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script src="../assets/backend/dist/js/sb-admin-2.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });

//             $(document).ready(function () {
//                alert('hai');
//            });


        </script>
    </body>
</html>
