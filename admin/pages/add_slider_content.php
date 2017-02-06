<?php
$message = '';
if (isset($_POST['btn'])) {
    $message = $obj_slider->save_slider_info($_POST);
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading page-header text-center lead">
                <u class="text-success">Add Slider Information</u><br/>
                <p class="text-success"><?php echo $message; ?></p>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="slider_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Image</label>
                        <div class="col-lg-9">
                            <input type="file"  name="slider_image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Text</label>
                        <div class="col-lg-9">
                            <input type="text" name="slider_text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Offer</label>
                        <div class="col-lg-9">
                            <input type="text" name="slider_offer" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Slider Description </label>
                        <div class="col-lg-9">
                            <textarea name="slider_description" class="form-control" rows='4'></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Publication Status</label>
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
                            <input type="submit" name="btn"  value="Save Slider Info" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

