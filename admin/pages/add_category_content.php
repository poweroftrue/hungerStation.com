<?php
$message = '';

if (isset($_POST['btn'])) {
    $message = $obj_category->save_category_info($_POST);
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading page-header text-center lead">
                <u class="text-success">Add Category Information</u><br/>
                <p class="text-success"><?php echo $message; ?></p>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="control-label col-lg-3">Category Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="category_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Category Description</label>
                        <div class="col-lg-9">
                            <textarea name="category_description" class="form-control" rows="6"></textarea>
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
                            <input type="submit" name="btn" value="Save Category Info" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>