<?php
require '../classes/application.php';
$obj_app = new Application();

$category_result = $obj_app->select_all_published_category_info();
$sub_category_result = $obj_app->select_all_published_sub_category_info();

if (isset($_POST['btn'])) {
    $message = $obj_product->update_product_info($_POST);
}

$product_id = $_GET['id'];
$query_result = $obj_product->select_product_info_by_id($product_id);
$product_info = mysqli_fetch_assoc($query_result);
extract($product_info);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class=" col-lg-12 panel-heading page-header ">
                <div class="col-lg-1">
                    <p>
                        <a href="manage_product.php" class="btn btn-primary" title="back to manage product">
                            <span class="glyphicon glyphicon-backward"></span>
                        </a>
                    </p>
                </div>
                <div class="col-lg-11 text-center lead">
                    <u class="text-success">Edit Product Information</u><br/>
                </div>
            </div>

            <div class="panel-body">
                <form name="edit_product_form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="product_name" value="<?php echo $product_name; ?>" class="form-control">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Category Name</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="category_id">
                                <option>--Select publication status--</option>
                                <?php while ($published_category = mysqli_fetch_assoc($category_result)) { ?>
                                    <option value="<?php echo $published_category['category_id']; ?>"><?php echo $published_category['category_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-3">Sub Category Name</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="sub_category_id">
                                <option>--Select publication status--</option>
                                <?php while ($published_sub_category = mysqli_fetch_assoc($sub_category_result)) { ?>
                                    <option value="<?php echo $published_sub_category['sub_category_id']; ?>"><?php echo $published_sub_category['sub_category_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Price</label>
                        <div class="col-lg-9">
                            <input type="number" name="product_price" value="<?php echo $product_price; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Quantity</label>
                        <div class="col-lg-9">
                            <input type="number" name="product_quantity" value="<?php echo $product_quantity; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product short Description </label>
                        <div class="col-lg-9">
                            <textarea name="product_short_description" class="form-control" rows='4'><?php echo $product_short_description; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Long Description </label>
                        <div class="col-lg-9">
                            <textarea name="product_long_description" class="form-control" rows='6'><?php echo $product_long_description; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Image</label>
                        <div class="col-lg-9">
                            <input type="file"  name="product_image" id="img1">
                            <img src="<?php echo $product_image; ?>" alt="" class="img-circle" height="150" width="150">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">publication Status</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="publication_status">
                                <option>--Select publication status--</option>
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"></label>
                        <div class="col-jg-offset-3 col-lg-9">
                            <input type="submit" name="btn"  value="Update Product Info" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['edit_product_form'].elements['publication_status'].value = '<?php echo $publication_status; ?>';
    document.forms['edit_product_form'].elements['category_id'].value = '<?php echo $category_id; ?>';
    document.forms['edit_product_form'].elements['sub_category_id'].value = '<?php echo $sub_category_id; ?>';

</script>
