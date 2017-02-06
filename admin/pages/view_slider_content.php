<?php
$message = '';
if (isset($_GET['status'])) {
    $slider_id = $_GET['id'];
    if ($_GET['status'] == 'unpublished') {
        $message = $obj_slider->unpublished_slider_info_by_id($slider_id);
    } else if ($_GET['status'] == 'published') {
        $message = $obj_slider->published_slider_info_by_id($slider_id);
    } else if ($_GET['status'] == 'delete') {
        $message = $obj_slider->delete_slider_info_by_id($slider_id);
    }
}
$slider_id = $_GET['id'];
$query_result = $obj_slider->select_slider_info_by_id($slider_id);
$slider_info = mysqli_fetch_assoc($query_result);
extract($slider_info);
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
                            <th>Slider ID</th>
                            <td><?php echo $slider_id; ?></td>
                        </tr>
                        <tr>
                            <th>Slider Name</th>
                            <td><?php echo $slider_name; ?></td>
                        </tr>
                        <tr>
                            <th>Slider Image</th>
                            <td><img src="<?php echo $slider_image; ?>" alt="" class="img-responsive" height="200" width="200"></td>
                        </tr>
                        <tr>
                            <th>Slider Mode</th>
                            <td><?php echo $slider_text; ?></td>
                        </tr>
                        <tr>
                            <th>Slider Offer</th>
                            <td><?php echo $slider_offer; ?></td>
                        </tr>

                        <tr>
                            <th>Slider Description</th>
                            <td><?php echo $slider_description; ?></td>
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
                                <a href="manage_slider.php" class="btn btn-primary" title="back to manage slider">
                                    <span class="glyphicon glyphicon-backward"></span>
                                </a>
                                <?php if ($publication_status == 1) { ?>
                                    <a href="?status=unpublished&&id=<?php echo $slider_id; ?>" class="btn btn-danger" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                <?php } else { ?>
                                    <a href="?status=published&&id=<?php echo $slider_id; ?>" class="btn btn-primary" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                <?php } ?>
                                <a href="edit_slider.php?id=<?php echo $slider_id; ?>" class="btn btn-success" title="Edit">
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