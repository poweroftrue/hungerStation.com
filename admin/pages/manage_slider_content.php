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

$query_result = $obj_slider->select_all_slider_info();
?>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading page-header text-center lead">
                <u class="text-success"> All Slider Information</u><br/>
                <p class="text-success"><?php echo $message; ?><?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                </p>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Slider Name</th>
                            <th>Slider Text</th>
                            <th>Slider Offer</th>
                            <th>Slider Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($all_slider = mysqli_fetch_assoc($query_result)) {
                            extract($all_slider);
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $i; ?></td>
                                <td><?php echo $slider_name; ?></td>
                                <td><?php echo $slider_text; ?></td>
                                <td><?php echo $slider_offer; ?></td>
                                <td><?php echo $slider_description; ?></td>
                                <td class="center"><?php
                                    if ($publication_status == 1) {
                                        echo 'Published';
                                    } else {
                                        echo 'Unpublished';
                                    }
                                    ?></td>
                                <td class="center">
                                    <a href="view_slider.php?id=<?php echo $slider_id; ?>" class="btn btn-success" title="View">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
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
                                    <a href="?status=delete&&id=<?php echo $slider_id; ?>" class="btn btn-danger" title="Delete" onclick="return check_delete_status();
                                       ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>