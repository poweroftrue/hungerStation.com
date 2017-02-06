<?php
if (isset($_POST['btn'])) {
    $message = $obj_slider->update_slider_info($_POST);
}
$slider_id = $_GET['id'];
$query_result = $obj_slider->select_slider_info_by_id($slider_id);
$slider_info = mysqli_fetch_assoc($query_result);
extract($slider_info);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class=" col-lg-12 panel-heading page-header ">
                <div class="col-lg-1">
                    <p>
                        <a href="manage_slider.php" class="btn btn-primary" title="back to manage slider">
                            <span class="glyphicon glyphicon-backward"></span>
                        </a>
                    </p>
                </div>
                <div class="col-lg-11 text-center lead">
                    <u class="text-success">Edit Slider Information</u><br/>
                </div>
            </div>
            <div class="panel-body">
                <form name="edit_slider_form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="slider_name" value="<?php echo $slider_name; ?>" class="form-control">
                            <input type="hidden" name="slider_id" value="<?php echo $slider_id; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Image</label>
                        <div class="col-lg-9">
                            <input type="file"  name="slider_image" id="img1">
                            <img src="<?php echo $slider_image; ?>" alt="" class="img-responsive" height="300" width="300">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Text</label>
                        <div class="col-lg-9">
                            <input type="text" name="slider_text" value="<?php echo $slider_text; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Offer</label>
                        <div class="col-lg-9">
                            <input type="text" name="slider_offer" value="<?php echo $slider_offer; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Description </label>
                        <div class="col-lg-9">
                            <textarea name="slider_description" class="form-control" rows='4'><?php echo $slider_description; ?></textarea>
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
                        <label class="control-label col-lg-3">

                        </label>
                        <div class="col-jg-offset-3 col-lg-9">
                            <input type="submit" name="btn"  value="Update Slider Info" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['edit_slider_form'].elements['publication_status'].value = '<?php echo $publication_status; ?>';
</script>
