<?php
require '../classes/application.php';
$obj_app = new Application();
$message='';
$category_result = $obj_app->select_all_published_category_info();
$sub_category_result = $obj_app->select_all_published_sub_category_info();

if (isset($_POST['btn'])) {
    $message = $obj_product->save_product_info($_POST);
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading page-header text-center lead">
                <u class="text-success">Add Product Information</u><br/>
                <p class="text-success"><?php echo $message; ?></p>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="product_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Category Name</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="category_id">
                                <option>--Select publication status--</option>
                                <?php
                                while ($published_category = mysqli_fetch_assoc($category_result)) {
                                    extract($published_category);
                                    ?>
                                    <option value="<?php echo $category_id; ?>"><?php echo $category_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-3">Sub Category Name</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="sub_category_id">
                                <option>--Select publication status--</option>
                                <?php
                                while ($published_sub_category = mysqli_fetch_assoc($sub_category_result)) {
                                    extract($published_sub_category);
                                    ?>
                                    <option value="<?php echo $sub_category_id; ?>"><?php echo $sub_category_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Price</label>
                        <div class="col-lg-9">
                            <input type="number" name="product_price" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Quantity</label>
                        <div class="col-lg-9">
                            <input type="number" name="product_quantity" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product short Description </label>
                        <div class="col-lg-9">
                            <textarea name="product_short_description" class="form-control" rows='4'></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Long Description </label>
                        <div class="col-lg-9">
                            <textarea name="product_long_description" class="form-control" rows='6'></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Image</label>
                        <div class="col-lg-9">
                            <input type="file"  name="product_image">
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
                            <input type="submit" name="btn"  value="Save Product Info" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

