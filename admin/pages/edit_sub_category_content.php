<?php
$sub_category_id = $_GET['id'];
$query_result = $obj_sub_category->select_sub_category_info_by_id($sub_category_id);
$catgory_info = mysqli_fetch_assoc($query_result);
extract($catgory_info);

if (isset($_POST['btn'])) {
    $obj_sub_category->update_sub_category_info_by_id($_POST);
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class=" col-lg-12 panel-heading page-header ">
                <div class="col-lg-1">
                    <p>
                        <a href="manage_sub_category.php" class="btn btn-primary" title="back to manage sub category">
                            <span class="glyphicon glyphicon-backward"></span>
                        </a>
                    </p>
                </div>
                <div class="col-lg-11 text-center lead">
                    <u class="text-success">Edit Sub Category Information</u><br/>
                </div>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" action="" method="post" name="edit_sub_category_form">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Sub Category Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="sub_category_name" value="<?php echo $sub_category_name; ?>" class="form-control" required>
                            <input type="hidden" name="sub_category_id" value="<?php echo $sub_category_id; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Sub Category Description</label>
                        <div class="col-lg-9">
                            <textarea name="sub_category_description" class="form-control" rows="6"><?php echo $sub_category_description; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Publication Status</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="publication_status">
                                <option> --- Select Publication Status --- </option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <input type="submit" name="btn" value="Update Sub Category Info" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['edit_sub_category_form'].elements['publication_status'].value = '<?php echo $publication_status; ?>';
</script>