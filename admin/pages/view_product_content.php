<?php
$message = '';
if (isset($_GET['status'])) {
    $product_id = $_GET['id'];
    if ($_GET['status'] == 'unpublished') {
        $message = $obj_product->unpublished_product_info_by_id($product_id);
    } else if ($_GET['status'] == 'published') {
        $message = $obj_product->published_product_info_by_id($product_id);
    } else if ($_GET['status'] == 'delete') {
        $message = $obj_product->delete_product_info_by_id($product_id);
    }
}
$product_id = $_GET['id'];
$query_result = $obj_product->select_product_info_by_id($product_id);
$product_info = mysqli_fetch_assoc($query_result);
extract($product_info);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading page-header text-center lead">
                <u class="text-success"> View Details</u><br/>
                <p class="text-success"><?php echo $message; ?><?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                </p>
            </div>
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <td><?php echo $product_id; ?></td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td><?php echo $product_name; ?></td>
                        </tr>
                        <tr>
                            <th>Category ID</th>
                            <td><?php echo $category_id; ?></td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td><?php echo $category_name; ?></td>
                        </tr>
                        <tr>
                            <th>Sub Category ID</th>
                            <td><?php echo $sub_category_id; ?></td>
                        </tr>
                        <tr>
                            <th>Sub Category Name</th>
                            <td><?php echo $sub_category_name; ?></td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td><?php echo $product_price; ?></td>
                        </tr>
                        <tr>
                            <th>Product Quantity</th>
                            <td><?php echo $product_quantity; ?></td>
                        </tr>
                        <tr>
                            <th>Product Short Description</th>
                            <td><?php echo $product_short_description; ?></td>
                        </tr>
                        <tr>
                            <th>Product Long Description</th>
                            <td><?php echo $product_long_description; ?></td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td><img src="<?php echo $product_image; ?>" alt="" class="img-responsive" height="200" width="200"></td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td><?php
                                if ($publication_status == 1) {
                                    echo 'Published';
                                } else {
                                    echo "Unpublished";
                                }
                                ?></td>
                        </tr>
                        <tr>
                            <th>Action</th>
                            <td class="center">
                                <a href="manage_product.php" class="btn btn-primary" title="back to manage product">
                                    <span class="glyphicon glyphicon-backward"></span>
                                </a>
                                <?php if ($publication_status == 1) { ?>
                                    <a href="?status=unpublished&&id=<?php echo $product_id; ?>" class="btn btn-danger" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                <?php } else { ?>
                                    <a href="?status=published&&id=<?php echo $product_id; ?>" class="btn btn-primary" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                <?php } ?>
                                <a href="edit_product.php?id=<?php echo $product_id; ?>" class="btn btn-success" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
